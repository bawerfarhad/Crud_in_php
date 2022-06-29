<?php
    include "db.php";
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $password= $_POST['password'];
        $email= $_POST['email'];
        $date= $_POST['date'];
        $gender=$_POST['gender'];
        $sql="INSERT INTO `register`(`id`, `name`, `password`, `email`, `age`,`gender`) VALUES (null,'$name','$password','$email','$date','$gender');";
        $data= mysqli_query($db_con,$sql);
        if(!$data){
            echo "error";
        }
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="name"   placeholder="type name">
        <input type="password" name="password"  placeholder="type password">
        <input type="email" name="email"   placeholder="type email">
        <input type="date" name="date">
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        <input type="submit" name="submit" id="" value="submit">
    </form>

    <table border="2">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>password</th>
            <th>email</th>
            <th>age</th>
            <th>gender</th>
            <td>actions</td>
        </tr>
        <?php
        $query="SELECT * FROM `register`;";
        $data= mysqli_query($db_con,$query);

        while ($r= mysqli_fetch_assoc($data)){?>

        <tr>
            <td><?php echo $r['id']?></td>
            <td><?php echo $r['name']?></td>
            <td><?php echo $r['password']?></td>
            <td><?php echo $r['email']?></td>
            <td><?php echo $r['age']?></td>
            <td><?php echo $r['gender']?></td>
            <td>
                <a href="update.php?id=<?php echo $r['id']?>">update</a>
                ||
                <a href="delete.php?id=<?php echo $r['id']?>">delete</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>
