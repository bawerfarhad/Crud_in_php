<?php

$server="localhost";
$user="root";
$password="";
$dbname="crud_app";

$db_con= mysqli_connect($server,$user,$password,$dbname) or die("cannot connect to the database");
