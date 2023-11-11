<?php
include('header.php');
include('config.php');
include('link.php');


$parent_id = $_SESSION['userid'];

// $user_id = $_GET['userid'];
if (isset($_POST["register"])) {
    // $user_id = $_GET['user_id'];
    $name =  $_POST["name"];
    $age =   $_POST["age"];
    $gender = $_POST["gender"];
    

    

 

        $child_check = "SELECT * from `child` where name = '$name' AND Age = '$age' AND gender = '$gender' ";
        $result = mysqli_query($connect, $child_check);
 if (mysqli_num_rows($result) > 0) {
        echo "<script> alert('child already exist'); </script>";
  } else {
   $insert_query = "INSERT INTO `child` (`user_id`,`name`, `age`, `gender`) VALUES ('$parent_id','$name', '$age', '$gender')";
    $connection_insert = mysqli_query($connect, $insert_query);
    if($connection_insert){
        echo "<script> alert('Child Registered'); 
        window.location.href='userprofile.php'
        </script>";
    }
        
        }
    
    }










?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register child</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"><img src="img/images.jpg" alt="" width="500px" height ="600px"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Childs Information</h1>
                            </div>
                            <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="examplechildsName"
                                            placeholder="Childs Name" name="name" required >
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="exampleage"
                                            placeholder="Child Age" name="age" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="textarea" class="form-control form-control-user" id="examplemedical"
                                        placeholder="child Gender" name="gender" required>
                                    </div>
                        
                                    <div  class="col-12 col-sm-6">
                                        <select class="form-select bg-light border-0" name="vaccine" style="height: 55px;">
                                            <option selected>Medical History</option>
                                            <option value="Malaria Vaccine">None</option>
                                         
                                        </select>
                                    </div> <br>
                               
                                <button  type="submit" name="register"  class="btn btn-primary btn-user btn-block" a href="userprofile.php">Register child</button>
                                </a><hr>
                                </form>
                            <hr>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>