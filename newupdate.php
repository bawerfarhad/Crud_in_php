<?php
include "db.php";
    if (isset($_POST['insert'])){
        $id= $_POST['id'];
        $name= $_POST['name'];
        $password= $_POST['password'];
        $email= $_POST['email'];
        $date= $_POST['date'];
        $gender=$_POST['gender'];
        $up="UPDATE `register` SET `name`='$name',`password`='$password',`email`='$email',`age`='$date', `gender`='$gender' WHERE `id`=$id;";
        $data= mysqli_query($db_con,$up);
        header("location:index.php");
    }
?>
