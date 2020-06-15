<?php
session_start();
include('config.php');

$car = $_POST['car'];
$lot = $_POST['lot'];
$uid = $_SESSION['log']['useruid'];
$otp1 = mt_rand(100000,999999);
$otp2 = mt_rand(100000,999999);

$from = "contact.ecellvit@gmail.com";
$email = $_SESSION['log']['email'];
$recipient = $email;
$subject = "Car Parking System OTP";
$message = "Message via Car Parking System. This is your OTP1 (Enter while you park your car) ".$otp1." . This is your OTP2 (Enter while you leave the Parking Lot) ".$otp2." ." ;
$headers = 'From:' . $from;
if (mail($recipient, $subject, $message, $headers))
{
    $qry = mysqli_query($con,"INSERT INTO logtable (useruid, lotname, carno, otp1, otp2) VALUES ('$uid', '$lot', '$car', '$otp1', '$otp2') ");
    $qry1 = mysqli_query($con,"UPDATE lot SET status='Ongoing Booking' WHERE lotname='$lot' ");
    header("location:verify.php");
}
?>