<?php
session_start();
include('config.php');

$carownername = $_SESSION['log']['name'];
$carownerid = $_SESSION['log']['useruid'];
$licencenumber = $_POST['licence'];
$garagelocation = $_POST['lot'];
$duration = $_POST['duration'];
$cost = $duration * 2;
$date = $_POST['datetimelocal'];

$qry0 = mysqli_query($con,"SELECT * FROM garage where lotname='$garagelocation'");
$row = mysqli_fetch_array($qry0);
$lotnumber = $row['lots'];

$qry = mysqli_query($con,"INSERT INTO booking (carowner, userid, licencenum, garagelocation, lotnumber, cost, duration, fromtime, payment, status) 
						VALUES ('$carownername', '$carownerid', '$licencenumber', '$garagelocation', '$lotnumber','$cost', '$duration', '$date', 'Due', 'Park') ");
						
$qry1 = mysqli_query($con,"UPDATE garage SET lots=lots-1 WHERE lotname='$garagelocation' ");
header("location:bookinginfo.php");

/*
if (mail($recipient, $subject, $message))
{
    $qry = mysqli_query($con,"INSERT INTO logtable (useruid, lotname, carno, otp1, otp2) VALUES ('$uid', '$lot', '$car', '$otp1', '$otp2') ");
    $qry1 = mysqli_query($con,"UPDATE lot SET status='Ongoing Booking' WHERE lotname='$lot' ");
    header("location:verify.php");
}
*/
?>