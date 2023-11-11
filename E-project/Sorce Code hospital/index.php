<?php
include('link.php');
include('header.php');

if(!isset($_SESSION['userid'])){
    echo '<script>
	window.location.href="login.php";
	</script>';
  }

?> 

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    


  

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To Medinova</h5>
                    <h1 class="display-1 text-white mb-md-4">Get Vaccinated For Better Future</h1>
                    <div class="pt-2">
                        <a href="service.php" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Services</a>
                        <!-- <a href="" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/images.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">About Us</h5>
                        <h1 class="display-4">Best Vaccination Services For you And Your Family.</h1>
                    </div>
                    <p>Vaccines reduce risks of getting a disease by working with your body's natural defences to build protection. When you get a vaccine, your immune system responds. We now have vaccines to prevent more than 20 life-threatening diseases, helping people of all ages live longer, healthier lives.</p>
                    <div class="row g-3 pt-3">      
                        <div class="col-sm-3 col-6">
                           <div class="bg-light text-center rounded-circle py-4">
                              <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0"> <a  href="doctors.php"> Vaccination<small class="d-block text-primary">Staff</small></a></h6></center>
                            </div> 
                        </div>
                        
                        </div>
                        
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                <h1 class="display-4">Excellent Medical Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                    <i class="fa-solid fa-syringe text-white fa-2x"></i>
                            
                        </div>
                        <h4 class="mb-3">Malaria vaccine</h4>
                        <p class="m-0">Malaria is a serious and sometimes fatal disease caused by a parasite that commonly infects a certain type of mosquito which feeds on humans.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                        <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                        <i class="fa-solid fa-syringe text-white fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Polio Vaccine</h4>
                        <p class="m-0">Polio vaccines are vaccines used to prevent poliomyelitis (polio). Two types are used: an inactivated poliovirus given by injection (IPV) and a weakened poliovirus given by mouth (OPV).</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                        <i class="fa-solid fa-syringe text-white fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Covid Vaccine</h4>
                        <p class="m-0">The Pfizer and Moderna vaccines are strongly recommended as safe and effective at preventing serious illness or death from COVID-19.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                        <i class="fa-solid fa-syringe text-white fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Mumps Vaccine</h4>
                        <p class="m-0">MMR vaccine is very safe and effective. The mumps component of the MMR vaccine is about 88% (range: 32-95%) effective when a person gets two doses.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                        <i class="fa-solid fa-syringe text-white fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Chickenpox Vaccine</h4>
                        <p class="m-0">Chickenpox is a highly contagious disease caused by the varicella-zoster virus (VZV). It causes an itchy, blister-like rash. The rash appears first on the chest, back, and face, and then spreads over the entire body.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                        <i class="fa-solid fa-syringe text-white fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Measles Vaccine</h4>
                        <p class="m-0">Measles can be prevented with MMR vaccine. The vaccine protects against three diseases: measles, mumps, and rubella. CDC recommends children get two doses of MMR vaccine,</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    

    <!-- Footer Start -->
    <?php
    
    include('footer.php')?>
    


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