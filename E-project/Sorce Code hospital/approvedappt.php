<?php
include('header.php');
include('link.php');
include('config.php');
$userid = $_SESSION['userid'];

$fetch = "SELECT *
FROM `childs_appt` as ca 
INNER JOIN `child` as cd ON ca.child_id = cd.id 
INNER JOIN `userdata` as ud ON ca.user_id = ud.id 
INNER JOIN `hdata` as hd ON ca.hid = hd.h_id 
INNER JOIN `vaccine_stock` as vs ON ca.vac_id = vs.id 
WHERE ca.status = 1 AND ca.user_id = '$userid'";

$data = mysqli_query($connect, $fetch);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending req</title>
</head>
<body>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Approved appointments</h6>
            <a href="Pendingop.php"><button class="btn btn-Warning" style="margin-left: 1000px;" >Pending appointments</button></a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Parent name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Hospital</th>
                            <th>Vaccine</th>
                            <th>dateTime</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($rows = mysqli_fetch_assoc($data)) {
                            ?>
                            <tr>
                                <td><?php echo $rows['name'] ?></td>
                                <td><?php echo $rows['Fname'] ?></td>
                                <td><?php echo $rows['age'] ?></td>
                                <td><?php echo $rows['gender'] ?></td>
                                <td><?php echo $rows['h_name'] ?></td>
                                <td><?php echo $rows['vac_name'] ?></td>
                                <td><?php echo $rows['dateTime'] ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
</body>
</html>
