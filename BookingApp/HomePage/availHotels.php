<?php 
    require __DIR__ . "/../Register/hotel.php";
    require_once __DIR__ . "/../Includes/hotelData.php";

    session_start();

// Holds hotel objects in the system

// Sets the value of session variable that is equal to the data in hotelData.php
$_SESSION['hotellist'] = $hotelData;

// If user submitted data through the register form, then the data is saved to local variables
if (isset($_POST['submit'])) {

    $name = $_POST['customerName'];
    $email = $_POST['customerEmail'];
    $inDate = $_POST['checkInDate'];
    $outDate = $_POST['checkoutDate'];

        $_SESSION['userNumDays'] = Hotel::calculateNumDays($inDate, $outDate);

        $userNumDays = $_SESSION['userNumDays'];
 

    // Saving user data to SESSION superglobal
    $_SESSION['customer'] = [
        'name' => $name,
        'email' => $email,
        'inDate' => $inDate,
        'outDate' => $outDate,
        'userNumDays' => $userNumDays,
    ];

    var_dump($_SESSION['customer']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <title> View Hotels </title>

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
                        <a class="nav-link active me-2" aria-current="page" href="#"> View Bookings </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#"> Edit Profile </a>
            </div>
            <div class="d-flex">
                <!-- Logout Button -->
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="logout" data-bs-target="index.php">
                Log Out
                </button>
            </div>
        </div>
    </div>
</nav>


<!-- Available Hotels -->
<h2 class="mt-2 mb-3 pt-5 text-center fw-bold h-font"> Available Hotels </h2>

<?php 
foreach ($SESSION ['hotellist'] as $hotel){
    echo "  
    <div class='container'>
    <div class='row'>
        <div class='col-lg-4 col-md-6 my-3'>
        <div class='card border-0 shadow' style='max-width: 350px; margin: auto;'>
            <img src='Image:".$hotel ->getImg()."' class='card-img-top'>

            <div class='card-body'>
                <h4> ".$hotel->getName()." </h4>
                <h6 class='mb-4'> R ".$hotel ->getCostPerNight()." </h6>
                <li>";
                    if(!$hotel ->getFullyBooked() ) {
                        echo "<span> <h6 class='has-text-success'> Available </h6> </span>";
                    } else {
                        echo "<span> <h6 class='has-text-danger'> No Rooms Available, sorry! </h6> </span>";
                    }
    echo "      </li>              
                <li> Total Cost: R ".$hotel ->calculateCostOfStay($userNumDays).",00 </li>  
                <div class='features mb-4'>
                    <h5 class='mb-1'> Rooms: </h5>
                    <span class='badge rounded-pill bg-light text-dark text-wrap'> ".$hotel ->getavailRooms()" </span>
                </div>
                <div class='facilities mb-4'>
                <h5 class='mb-1'> Amenities: </h5>
                <span class='badge rounded-pill bg-light text-dark text-wrap'> ".$hotel ->getDescription()"</span>
                <div class='rating mb-4'>
                <h5 class='mb-1'> Rating: </h5>
                <span class='badge rounded-pill bg-light'>
                <i class='bi bi-star-fill text-warning'></i>
                <i class='bi bi-star-fill text-warning'></i>
                <i class='bi bi-star-fill text-warning'></i>
                <i class='bi bi-star-fill text-warning'></i>
                <i class='bi bi-star-fill text-warning'></i>
                </span>
                </div>
                <div class='text-center my-1 mt-3'>
                <form action='   ' method='get'>
                    <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                    <button type='submit' class='btn btn-sm text-white custom-bg shadow-none mb-2 mt-4' name='book'> Book </button>
                </form> 
            </div>
        </div>
    </form>
</div>
</div>
";
}
?>

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>

<!-- Script tags -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


</body>
</html>