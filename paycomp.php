<?php
session_start();
include('config.php');

$id = $_POST['id'];
$fee = $_POST['fee'];
$qry = mysqli_query($con,"SELECT * FROM logtable WHERE id='$id' ");
$row = mysqli_fetch_array($qry);
$lot = $row['lotname'];
$qry1 = mysqli_query($con,"UPDATE logtable SET payment='Paid' WHERE id='$id' ");
$qry2 = mysqli_query($con,"UPDATE lot SET status='Free' WHERE lotname='$lot' ");
header("location:dashboard.php");
?>