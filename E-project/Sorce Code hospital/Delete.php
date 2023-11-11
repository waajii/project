<?php
include('config.php');
$child_id = $_GET['id'];

$delete = "DELETE from `child` where id = '$child_id'";

$result = mysqli_query($connect, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:userprofile.php');
?>