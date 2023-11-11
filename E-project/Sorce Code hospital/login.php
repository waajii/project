<?php
include('header.php');

if(isset($_SESSION['userid'])){
  echo '<script>
	window.location.href="index.php";
	</script>';
}

include('link.php');


include 'config.php';


  
  if(isset($_POST['submit'])){
    $login_email = mysqli_real_escape_string($connect,$_POST['email']);
    $login_pass = mysqli_real_escape_string($connect,$_POST['Password']);
  
    $log_query = "SELECT * from userdata where email = '$login_email'";
    $login_conn = mysqli_query($connect, $log_query);
    if(mysqli_num_rows($login_conn) > 0){
      $row = mysqli_fetch_assoc($login_conn);
      $db_pass = $row['Password'];
        $pass_check = password_verify($login_pass,$db_pass);
      if($pass_check){
        
        $_SESSION['userid'] =  $row['id'];
        $_SESSION['fname'] =  $row['Fname'];
        $_SESSION['lname'] =  $row['Lname'];
        $_SESSION['email'] =  $row['email'];
        echo "<script>
        window.location.href='index.php';
        </script>";

          }else{
        echo "<script> alert('Invalid Password')</script>";
  
      }
    }else{
        echo "<script> alert('Invalid Email')</script>";

    }
  }
  
  ?>



<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/online.jpg"
          class="img-fluid" alt="">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST">
      <br><br><br><br>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" required name="email" />
            <label class="form-label" for="form3Example3" >Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name ="Password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" required  />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
      

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name = "submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>

</section>


    <!-- Footer Start -->

<?php

include('footer.php');
?>

 


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>