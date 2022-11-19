<?php

// Includes all needed files
require_once __DIR__ . "/hotel.php";
require_once __DIR__ . "/user.php";
include __DIR__ . "/config.php";

// Dependancy Injection 

class Booking {

    public User $user;
    public Hotel $hotel;

    public function __construct($user, $hotel) {
        $this->user = $user;
        $this->hotel = $hotel;
    }
    
}