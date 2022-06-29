<?php
include "db.php";

    $idold=$_GET["id"];

    $up="SELECT `name`, `password`, `email`, `age`, `gender` FROM `register` WHERE `id`=$idold;";
    $data= mysqli_query($db_con,$up);
    $r= mysqli_fetch_row($data);
    $name= $r[0];
    $password= $r[1];
    $email= $r[2];
    $date= $r[3];
    $gender=$r[4];
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
<form action="newupdate.php" method="post">
    <input type="text" name="name" value="<?php echo $name?>">
    <input type="password" name="password" value="<?php echo $password?>">
    <input type="email" name="email" value="<?php echo $email?>">
    <input type="date" name="date" value="<?php echo $date?>">
    <input type="radio" name="gender" checked="<?php echo $gender?>" value="male">male
    <input type="radio" name="gender" checked="<?php echo $gender?>" value="female">female

    <input type="hidden" name="id" value="<?php echo $idold?>">
    <input type="submit" name="insert" id="" value="submit">
</form>

</body>
</html>
