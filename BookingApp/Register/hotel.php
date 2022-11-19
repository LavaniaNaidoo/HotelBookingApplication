<?php 

// Includes Database configuration file
include __DIR__ . "/config.php";

 class Hotel {

// Fields

    private $id;
    private $name;
    private $costPerNight;
    private $availRooms;
    private $fullyBooked;
    private $description;
    private $img;

// Constructor 

public function __construct($idInput, $nameInput, $cpnInput, $roomsInput, $fullyBookedInput, $descriptionInput, $imgInput){

    $this ->id = $idInput;
    $this ->name = $nameInput;
    $this ->costPerNight = $cpnInput;
    $this ->availRooms = $roomsInput;
    $this ->fullyBooked = $fullyBookedInput;
    $this ->description = $descriptionInput;
    $this ->img = $imgInput;
}

// Methods
// Calculates the whole cost of the trip
public function calculateCostOfStay($numDays) {

    $amount =  $numDays * $this->costPerNight;

    return $amount;
}

// Calculates the duration of the trip
public static function calculateNumDays($startDate, $endDate) {

    // Calculates the difference in timestamps
    $diff = strtotime($endDate) - strtotime($startDate);

    // 1 day = 24 hours  ->  24 * 60 * 60 = 86400 seconds
    $numDays = abs(round($diff / 86400));

    return $numDays;
}

public function __toString() {
    return "$this->id - $this->name - $this->costPerNight - $this->availRooms - $this->fullyBooked - $this->description - $this->img ";
}

public function createElement() {
    return "$this->id - $this->name - $this->costPerNight - $this->availRooms - $this->fullyBooked - $this->description - $this->img ";
}

// Getters & Setters Functionality

public function getId() {
    return $this->id;
}

public function setId($newId) {
   $this->id = $newId;

   return $this;
}

// Gets the value of the name
public function getName()
{
    return $this->name;
}

/**
 * Sets the value of name
 * @return  self
 */
public function setName($name)
{
    $this->name = $name;

    return $this;
}

/**
 * Gets the value of costPerNight
 */
public function getCostPerNight()
{
    return $this->costPerNight;
}

/**
 * Sets the value of costPerNight
 * @return  self
 */
public function setCostPerNight($costPerNight)
{
    $this->costPerNight = $costPerNight;

    return $this;
}

/**
 * Gets the value of fullyBooked
 */
public function getFullyBooked()
{
    return $this->fullyBooked;
}

/**
 * Sets the value of fullyBooked
 * @return  self
 */
public function setFullyBooked($fullyBooked)
{
    $this->fullyBooked = $fullyBooked;

    return $this;
}

/**
 * Gets the value of availRooms
 */
public function getAvailRooms()
{
    return $this->availRooms;
}

/**
 * Sets the value of availRooms
 * @return  self
 */
public function setAvailRooms($availRooms)
{
    $this->availRooms = $availRooms;

    return $this;
}

/**
 * Gets the value of description
 */
public function getDescription()
{
    return $this->description;
}

/**
 * Sets the value of description
 * @return  self
 */
public function setDescription($description)
{
    $this->description = $description;

    return $this;
}

/**
 * Gets the value of img
 */
public function getImg()
{
    return $this->img;
}

/**
 * Sets the value of img
 * @return  self
 */
public function setImg($img)
{
    $this->img = $img;

    return $this;
}
}


























?>