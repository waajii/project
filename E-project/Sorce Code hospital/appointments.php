<?php
include('header.php');
include('config.php');
include('link.php');
$userid = $_SESSION['userid'];
?>

<?php

if(isset($_POST['submit'])){

$Vaccine = $_POST['vaccine'];
$Name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$hospital = $_POST['h_name'];







$query = "INSERT INTO `childs_appt` (`id`, `child_id`, `user_id`, `age`, `gender`, `hid`, `vac_id`, `dateTime`, `status`) VALUES (NULL, '$Name', '$userid', '$age', '$gender', '$hospital', '$Vaccine', current_timestamp(), 0)";




$result = mysqli_query($connect,$query); 
if($result){
// header('location : index.php');

}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
</head>
<body>
    


<div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Appointment</h5>
    
                        <h1 class="display-4">Make An Appointment For Your Family</h1>
                    </div>
                    <p class="text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <!-- <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="">Find Doctor</a> -->
                    <!-- <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="">Read More</a> -->
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">Book An Appointment</h1>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="row p-4 g-3">
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" name="name" required >
                                echo '<option selected>Select child</option>';
                                <?php   
                                $Cfetch = "SELECT * from `child` where user_id = '$userid' AND status = 1 ";
                                $query = mysqli_query($connect,$Cfetch);
                                If($query){
                                    If(mysqli_num_rows($query) > 0 ){
                                        while ($CD = mysqli_fetch_assoc($query)){
                                            echo '<option value="'.$CD['id'] .'">'.$CD['name'].'</option>'; 
                                        }
                                    }


                                }
                                ?>
                                </select>
                                </div>
                                <div  class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" name="vaccine" required >
                                    echo '<option selected>Select vaccine</option>'; 
                                    <?php
                                    $vac_fetch = "SELECT * from `vaccine_stock`";
                                    $result = mysqli_query($connect, $vac_fetch);
                                    if($result){
                                        if(mysqli_num_rows($result) > 0){
                                           while ($data = mysqli_fetch_assoc($result)){
                                            echo '<option value="'.$data['id'] .'">'.$data['vac_name'].'</option>'; 
                                           }
                                        }
                                    }
                                    
                                    ?>
                            
                        </select>
                    </div>
                    <div class="col-12  col-sm-6">
                        <input type="number" name ="age" class="form-control bg-light border-0" placeholder="child Age" required >
                    </div>
                                <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" name="h_name" required >
                                echo '<option selected>Select Hospital</option>';
                                <?php   
                                $hfetch = "SELECT * from `hdata`";
                                $hquery = mysqli_query($connect,$hfetch);
                                If($hquery){
                                    If(mysqli_num_rows($hquery) > 0 ){
                                        while ($hd = mysqli_fetch_assoc($hquery)){
                                            echo '<option value="'.$hd['id'] .'">'.$hd['h_name'].'</option>'; 
                                        }
                                    }
    
    
                                }
                                ?>
                                </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name ="Desc" class="form-control bg-light border-0" placeholder="Child Medical History" required >
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name ="gender" class="form-control bg-light border-0" placeholder="Gender" required >
                                </div>
                            </div>
                       
                                
                                
                                </div>
                                
                                <div class="col-12">
                                <a href="Pendingop.php"  class="btn btn-success w-100 py-3"><button class="btn btn-success w-100 py-3"  type="submit" name = "submit" > 
                                Make An Appointment </button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <?php  include('footer.php');   ?>
    </body>
</html>