<?php
include 'config.php';

$child_id = $_POST['id'];
$child_name = $_POST['name'];
$child_age = $_POST['age'];
$child_gender = $_POST['gender'];

$update = "update `child` set name ='$child_name' , age = '$child_age' , gender = '$child_gender' where id = '$child_id' ";
$res = mysqli_query($connect, $update);
if (!$res) {
    die("Query failed");
}
header('location:userprofile.php');
?>