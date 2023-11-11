<?php
include('config.php');
$user_id = $_GET['id'];

$delete = "UPDATE `childs data` SET status = '1' where id = $user_id";

$result = mysqli_query($connect, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:removeC.php');
?>