<?php
include "db.php";
$id = $_GET["id"];
$sql = "DELETE FROM `register` WHERE id = $id";
$result = mysqli_query($db_con, $sql);


if ($result) {
    header("Location: index.php");
} else {
    echo "fail in delete Data" . mysqli_error($db_con);
}
