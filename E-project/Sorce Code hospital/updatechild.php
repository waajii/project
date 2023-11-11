<?php
include('config.php');



$child_id = $_GET['id'];
$getid = "SELECT * from `child` where id ='$child_id'";
$result = mysqli_query($connect, $getid);
if (!$result) {
    die("Query Failed");
}
if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <title>Update Child Details</title>
            <?php include('link.php'); ?>
        </head>
        

        <body>
         
         <!-- Page Wrapper -->
          <?php include('header.php') ?>

    
             <div class="container">
            <div class="col-md-6">
                <form action="updateD.php" method="post" class="form-group ">
                    <h1>Update Child Details</h1>
                    <div>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $rows['id'] ?>">
                        <label for="name"> Name </label>
                        <input type="text" name="name" class="form-control" value="<?php echo $rows['name'] ?>">
                    </div>

                    <div>
                        <label for="age"> age </label>
                        <input type="number" name="age" class="form-control" value="<?php echo $rows['age'] ?>">
                    </div>
                    <div>
                        <label for="gender"> gender </label>
                        <input type="gender" name="gender" class="form-control" value="<?php echo $rows['gender'] ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <button href="userprofile.php" type="submit" class="btn btn-danger">Close</button>
                <button  type="submit" name="adduser" class="btn btn-success">Update Details</button>
            </div>
            </form>
            </div>
            </div>
    </div>
    </div>
    </div>
            <?php
    }
}
include('footer.php');
?>
</body>

</html>