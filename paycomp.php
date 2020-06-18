<?php
session_start();
include('config.php');

$id = $_SESSION['log']['useruid'];
$fee = $_POST['amount'];


$qry = mysqli_query($con,"SELECT * FROM booking WHERE userid='$id' ");
while($row = mysqli_fetch_array($qry))
{
	$lot = $row['garagelocation'];
	$qry1 = mysqli_query($con,"UPDATE garage SET lots=lots+1 WHERE lotname='$lot' ");
}

$qry2 = mysqli_query($con,"UPDATE booking SET payment='Paid' WHERE userid='$id' ");
$qry3 = mysqli_query($con,"UPDATE booking SET status='Left' WHERE userid='$id' ");

header("location:bookingUI.php");
?>