<?php
session_start();
include('config.php');
include('sessioncheck.php');

$name = htmlspecialchars(ucfirst($_POST['name']), ENT_QUOTES, 'UTF-8');
$lots = htmlspecialchars($_POST['lots'], ENT_QUOTES, 'UTF-8');
$address = htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8');
$lat = htmlspecialchars($_POST['lat'], ENT_QUOTES, 'UTF-8');
$long = htmlspecialchars($_POST['long'], ENT_QUOTES, 'UTF-8');
$ownerid = $_SESSION['log']['useruid'];

$qry = mysqli_query($con,"INSERT INTO garage (lotname, ownerid, lots, totallots, address, latitude, longitude) 
						VALUES ('$name', '$ownerid', '$lots', '$lots', '$address', '$lat', '$long') ");
						

header("location:garageowner.php");

?>