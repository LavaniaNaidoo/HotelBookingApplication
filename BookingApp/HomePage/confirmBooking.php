<?php

require __DIR__ . "/../Register/hotel.php";


session_start();

// Retrieves id variable from GET superglobal
$selectedHotelId = $_GET['hotelId'];

// Empty variable to hold value of selected hotel object
$selectedHotel;

// Filtering:
foreach ($_SESSION['hotellist'] as $hotel) { // Loops over entered list of hotels

    if ($hotel->getId() == $selectedHotelId) { // Takes the id passed through the GET request and comapares it to the id's of all hotels in an array

        $selectedHotel = $hotel; // If the id of any hotel in array is the same as the id given from the previous page, that hotel object gets pulled out of the array, and assigned to the $selectedHotel variable
    }
}

echo "Customer data:"; // Prints out customer/user to test

var_dump($_SESSION['customer']);

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
    <title> Confirm Booking </title>

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
<body>

<!-- Confirm Customer Information -->
<h2 id="Confirm Booking" class="mt-5 mb-4 pt-5 text-center fw-bold h-font"> Confirm Booking: </h2>

    <div class="container">
        <h5 class="row"> Customer Summary </h5>
            <div class="card-body">
            <h5 class="card-title"> Customer Information </h5>
            <p class="card-text"> 
                <?php 
                    foreach ($_SESSION['customer'] as $detail) { // Prints out customer name, email address, check-in & check-out date and number of days that will be stayed over 
                        echo "
                            <li>
                                $detail
                            </li>
                        ";   
                    }
                ?>
            </p>
    </div>
</div>

<!-- Confirm Customer Booking -->
<div class="container">
        <h5 class="row"> Booking Summary </h5>
            <div class="card-body">
            <h5 class="card-title"> Booking Information </h5> <!-- Prints out name of desired hotel, total cost of trip, tells you if it is fully booked or still available -->
            <p class="card-text"> 
                <?php 
                    echo "
                        <div class='box'>
                            <span> ". $selectedHotel->getName() ." </span> 
                            <span> Total cost for trip: R".$hotel ->calculateCostOfStay($userNumDays)." ,00 </span> 
                        <li>";
                    if( !$selectedHotel->getFullyBooked() ) {
                    echo "<span class='has-text-success'> Available </span>";
                    } else {
                    echo "<span class='has-text-danger'> No Rooms Available, sorry! </span>";
                    }
                    echo "</li>             
                </div>
            ";
            ?>
        </p>
    </div>
</div>

<!-- Downloads pdf of "reciept" for the customer bookings -->
<h2 id="Print Reciept" class="mt-5 mb-4 pt-5 text-center fw-bold h-font"> Want to download your Confirmed Booking? Click here! </h2>
<a href="downloads/confirmBooking.pdf" class="text-decoration-none fw-bold mt-5 mb-4 pt-5"> Download PDF file </a>

<!-- Logout button -->
    <form action="./..Includes/logOut.php">
    <button type="submit" class="btn btn-outline-dark shadow-none"> Log Out </button>
    </form>


<br><br><br>
<br><br><br>


<!-- Script tags -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

</body>
</html>