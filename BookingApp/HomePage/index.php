<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome! </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .h-font {
            font-family: 'Roboto', sans-serif;
        }
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        /* Firefox */
        input[type=number]{
            -moz-appearance: textfield;
        }
        .custom-bg{
            background-color: #2ec1ac;
        }
        .custom-bg:hover{
            background-color: #279e8c;
        }
        .availabilty-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-width: 575px) {
            .availabilty-form{
            margin-top: 25px;
            padding: 0 35px;
        }  
        }
    </style>
</head>
<!-- Header/NavBar -->
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"> Luxusní Bookings </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="index.php"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#About"> About </a>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="index.php"> Gallery </a>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#Contact Us"> Contact Us </a>
                    </li>
            </div>
            <div class="d-flex">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                Register
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Admin Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="" method="post">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center"> 
                <i class="bi bi-person-lines-fill fs-3 me-2"></i> Admin Login
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base"> 
                Please Note: Your details must match with your Admin Credentials (Name, Email Address etc.)
            </span>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ps-0 mb-3">
                        <label class="form-label"> Name </label>
                        <input type="text" name="name" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 p-0 mb-3">
                        <label class="form-label"> Email address </label>
                        <input type="email" name="email" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 ps-0 mb-3">
                        <label class="form-label"> Password </label>
                        <input type="password" name="password" class="form-control shadow-none">
                    </div>
                </div>
            </div>
        <div class="text-center my-1">
        <button type="submit" name="submit" value= "login now" class="btn btn-dark shadow-none"> Login </button>
        </div>
    </form>
    </div>
  </div>
</div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="availHotels.php" method="post">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center"> 
                <i class="bi bi-person-lines-fill fs-3 me-2"></i> New User Registration 
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base"> 
                Please Note: Your details must match with your ID (Name, Email Address etc.)
                that will be required during check-in.
            </span>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ps-0 mb-3">
                        <label class="form-label"> Name </label>
                        <input type="text" name="customerName" placeholder="Please enter your name" class="form-control shadow-none" required>
                    </div>
                    <div class="col-md-6 p-0 mb-3">
                        <label class="form-label"> Email address </label>
                        <input type="email" name="customerEmail" placeholder="Please enter your email" class="form-control shadow-none" required>
                    </div>
                <span class="col-md-6 mb-3 bg-light text-dark text-wrap"> 
                        <label for="checkInDate" class="form-label shadow-none mb-3 mt-4" style="font-weight: 500;" required> Check-in </label>
                        <input type="date" name="checkInDate" required>
                    </span>
                    <span class="col-md-6 mb-3 bg-light text-dark text-wrap"> 
                        <label for="checkoutDate" class="form-label shadow-none mb- mt-4" style="font-weight: 500;" required> Check-out </label>
                        <input type="date" name="checkoutDate" required>
                    </span>
                </div>
            </div>
        <div class="text-center my-1 mt-3">
        <button type="submit" name="submit" class="btn btn-dark shadow-none"> Check Availability </button>
        </div>
    </form>
    </div>
  </div>
</div>
</div>

<!-- Website gallery -->
<h1 id="Gallery" class="mt-3 mb-2 pt-3 text-center fw-bold h-font"> Welcome to Luxusní Bookings!  </h1>
<h3 id="Gallery" class="mt-3 mb-4 pt-4 text-center fw-bold h-font"> Your Prague get-away Hotel Reservation System.  </h3>

<!-- Prague Carousel -->
<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="./images/prague1.jpg" class="w-100 h-180 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="./images/prague2.jpg" class="w-100 h-180 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="./images/prague3.jpg" class="w-100 h-180 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="./images/prague4.jpg" class="w-100 h-180 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="./images/prague5.jpg" class="w-100 h-180 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="./images/prague6.jpg" class="w-100 h-180 d-block"/>
        </div>
      </div>
    </div>
    </div>
</div>

<!-- About Website -->
<h2 id="About" class="mt-5 mb-4 pt-5 text-center fw-bold h-font"> About: Design Brief for Project </h2>
<h6 class="mt-5 mb-4 pt-4 text-center">  I was approached by a client who is planning on launching a new website which takes information from various hotels and allows customers to view, compare and create bookings, all on one convenient platform. 
    <br>
        The client explained that they would like to have two separate views so that one view is able to provide customers with a good looking interface and guided experience.
    <br>
        And the other view should allow staff members to audit content on the site and in the system without using any code, since the client's company does not employ any technical IT staff.
    <br>
        Final notes from the client mentions that since there is a strict deadline for the website to launch so they are willing to compromise on the initial software solution (admin side) and that a focus should be placed on getting the customer facing view running above all else.
    <br>
        We plan to keep the content management system on the backburner as a future feature. </h6>







        
<!-- Contact Us-->
<h2 id="Contact Us" class="mt-5 mb-5 pt-4 text-center fw-bold h-font"> Contact Us </h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163930.96841337872!2d14.465623899999999!3d50.05966965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b939c0970798b%3A0x400af0f66164090!2sPrague%2C%20Czechia!5e0!3m2!1sen!2sza!4v1668436119042!5m2!1sen!2sza" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5> Call us: </h5>
                <a href="tel: 069 777 2222" class="d-inline-block mb-2 text-decoration-none text-dark"> 
                <i class="bi bi-telephone-fill"></i> 069 777 2222 
                </a>
                <br>
                <a href="tel: 069 777 2222" class="d-inline-block text-decoration-none text-dark"> 
                <i class="bi bi-telephone-fill"></i> 011 222 7777 
                </a>
                <br>
            </div>
            <div class="bg-white p-4 rounded mb-4">
                <h5> Follow us: </h5>
                <a href="#" class="d-inline-block mb-3"> 
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram"></i> Instagram 
                </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2"> 
                <i class="bi bi-facebook"></i> Facebook
                </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3"> 
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-tiktok"></i> TikTok 
                </span>
                </a>
                <br>
            </div>
        </div>
    </div>
</div>

<br><br><br>
<br><br><br>

<!-- Script tags -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
     <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
      });
    </script>

</body>
</html>