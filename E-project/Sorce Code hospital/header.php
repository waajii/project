<?php
session_start();


?>
<html>
    <body>
         <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+92 876 5432</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i>info@example.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="https://twitter.com/?lang=en">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <!-- <a class="text-body px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a> -->
                        <a class="text-body px-2" href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="https://www.youtube.com/">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
      <!-- Navbar Start -->
      <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Vaccine</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="Hospitalweb.php" class="nav-item nav-link">Hospital</a>
                        
                        <?php
                        if(isset($_SESSION['userid'])){
                          
                            ?>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                            <div class="dropdown-menu m-0">
                
                                
                                <a href="userprofile.php?userid=<?php echo $_SESSION['userid']?>" class="dropdown-item"><?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ?></a>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                                
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    </body>
</html>