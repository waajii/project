<?php
include('config.php');
$child_id = $_GET['id'];

$delete = "UPDATE `child` SET status = '0' where id = $child_id";

$result = mysqli_query($connect, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:removeC.php');
?>