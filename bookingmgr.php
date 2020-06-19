<?php
session_start();
include('config.php');
include("booking.php");

$carownername = $_SESSION['log']['name'];
$carownerid = $_SESSION['log']['useruid'];
$carowneremail = $_SESSION['log']['email'];
$licencenumber = $_POST['licence'];
$garagelocation = $_POST['lot'];
$duration = $_POST['duration'];
$cost = $duration * 2;
$date = $_POST['datetimelocal'];

$object = new BookingClass();

$object->insertBooking($con, $carownername, $carownerid, $licencenumber, $garagelocation, $duration, $date);
$object->updateGarageLots($con, $garagelocation);

$object->sendConfirmationMail($carowneremail, $garagelocation, $date, $duration, $carownername, $cost);

header("location:bookingUI.php");

?>