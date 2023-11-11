<?php
include('config.php');
// get id work remaining
 include('header.php');


if (isset($_SESSION['userid'])) {
  $userid = $_SESSION['userid'];
} else {
  $userid = '0';
}
$fetch = "SELECT * from `child` where user_id = '$userid' AND  status = 1  ";
$data = mysqli_query($connect, $fetch);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <?php include('link.php');
  ?>
  <title>Profile</title>
</head>

<body>



  <!-- Content Row -->
  <div class="card-group p-4 text-center">
    <div class="card">
      <div class="card-body shadow h-100" style="margin: left 5px; right:5px ; ;">
        <h5 class="card-title" style="color:#13C5DD ;">Register Your child</h5>
        <div class="col-auto">
          <i class="fas fa-child fa-2x text-gray-300"></i>
        </div>
        <a href="detailchild.php?userid=<?php echo $_SESSION['userid']?>"><button type="button" class="btn btn-primary">Open Form</button></a>
      </div>
    </div>
    <div class="card">
      <div class="card-body shadow h-100" style="margin: left 5px; right:5px ; ;">
        <h5 class="card-title" style="color:#13C5DD; ">Book a Appointment</h5>
        <div class="col-auto">
          <i class="fas fa-clock fa-2x text-gray-300"></i>
        </div>
        <a href="appointments.php"><button type="button" class="btn btn-primary">Book now</button></a>
      </div>
    </div>
    <div class="card">

      <div class="card-body shadow h-100" style="margin: left 5px; right:5px ; ;">
        <h5 class="card-title" style="color:#13C5DD;"> Approved Appointment</h5>
        <div class="col-auto">
          <i class="fas fa-thumbs-up fa-2x text-gray-300"></i>
        </div>
       <a href="approvedappt.php"><button type="button" class="btn btn-primary">Open</button></a>
      </div>
    </div>
    <div class="card">
      <div class="card-body shadow h-100" style="margin: left 5px; right:5px ; ;">
        <h5 class="card-title" style="color:#13C5DD;"> Vaccination report </h5>
        <div class="col-auto">
          <i class="fas fa-thumbs-up fa-2x text-gray-300"></i>
        </div>
       <a href="vaccinereport.php"><button type="button" class="btn btn-primary">Open</button></a>
      </div>
    </div>

  </div>


  <!-- DataTales Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Your Childrens information</h6>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php

              while ($rows = mysqli_fetch_assoc($data)) {
              ?>
                <tr>
                  <td><?php echo $rows['name'] ?></td>
                  <td><?php echo $rows['age'] ?></td>
                  <td><?php echo $rows['gender'] ?></td>

                  <td>

                    <a href="updatechild.php?id=<?php echo $rows['id']; ?>" class="btn btn-warning"><?php echo 'Update' ?></a>
                    <a href="remove.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger"><?php echo 'Trash' ?></a>
                  </td>

                </tr>
            </tbody>
          <?php
              }

          ?>


            </table>
        </div></div></div>


        </div>


</div>


          <?php include('footer.php'); ?>
</body>

</html>