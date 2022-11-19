<?php 

$hotelData = [

    /* 
        $id;
        $name;
        $costPerNight;
        $availRooms;
        $fullyBooked;
        $description;
        $img;
    */

    new Hotel(
        1, //$id;
        "OREA Pyramida Praha Hotel", //$name;
        660, //$costPerNight;
        5, //$availRooms;
        false, //$fullyBooked;
        [ // $description;
            "Free wifi" => "True",
            "Wellness Center" => "False",
            "Bar" => "True",
            "Tennis Court" => "False" ,
            "Indoor & Outdoor Pool" => "True" ,

        ],
        "./images/prague4.jpg" //$img;
    ),

    new Hotel(
        2, //$id;
        "Hilton Prague Hotel", //$name;
        2324, //$costPerNight;
        7, //$availRooms;
        false, //$fullyBooked;
        [ // $description;
            "Free wifi" => "True",
            "Wellness Center" => "True",
            "Bar" => "True",
            "Tennis Court" => "True" ,
            "Indoor & Outdoor Pool" => "True" ,

        ],
        "./images/room3.jpg" // $img;
    ),

    new Hotel(
        3, //$id;
        "Hotel Leon D'Oro", //$name;
        1364, //$costPerNight;
        3, //$availRooms;
        true, //$fullyBooked;
        [ // $description;
            "Free wifi" => "True",
            "Wellness Center" => "True",
            "Bar" => "False",
            "Tennis Court" => "True" ,
            "Indoor & Outdoor Pool" => "True" ,

        ],
        "./images/prague6.jpg" // $img;
    ),

    new Hotel(
        4, //$id;
        "Hotel Assenzio Prague", //$name;
        757, //$costPerNight;
        2, //$availRooms;
        true, //$fullyBooked;
        [ // $description;
            "Free wifi" => "True",
            "Wellness Center" => "False",
            "Bar" => "True",
            "Tennis Court" => "False" ,
            "Indoor & Outdoor Pool" => "False" ,

        ],
        "./images/room4.jpg" // $img;
    ),

    new Hotel(
        5, //$id;
        "Belevedere", //$name;
        2667, //$costPerNight;
        7, //$availRooms;
        false, //$fullyBooked;
        [ // $description;
            "Free wifi" => "True",
            "Wellness Center" => "True",
            "Bar" => "True",
            "Tennis Court" => "True" ,
            "Indoor & Outdoor Pool" => "True" ,

        ],
        "./images/room5.jpg" // $img;
    ),

    new Hotel(
        6, //$id;
        "Art Noveau Palace Hotel", //$name;
        1522, //$costPerNight;
        6, //$availRooms;
        true, //$fullyBooked;
        [ // $description;
            "Free wifi" => "True",
            "Wellness Center" => "True",
            "Bar" => "True",
            "Tennis Court" => "False" ,
            "Indoor & Outdoor Pool" => "False" ,

        ],
        "./images/room6.jpg" // $img;
    )
    ];























?>