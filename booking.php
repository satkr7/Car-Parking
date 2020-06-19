<?php
session_start();

class BookingClass
{	
	public $lotnumber;
	
	function insertBooking($con, $carownername, $carownerid, $licencenumber, $garagelocation, $duration, $date)
	{
		$cost = $duration * 2;
		$qry0 = mysqli_query($con,"SELECT * FROM garage where lotname='$garagelocation'");
		$row = mysqli_fetch_array($qry0);
		$lotnumber = $row['lots'];

		$qry0 = mysqli_query($con,"SELECT * FROM garage where lotname='$garagelocation'");
		$row = mysqli_fetch_array($qry0);
		$lotnumber = $row['lots'];

		$qry = mysqli_query($con,"INSERT INTO booking (carowner, userid, licencenum, garagelocation, lotnumber, cost, duration, fromtime, payment, status) 
						VALUES ('$carownername', '$carownerid', '$licencenumber', '$garagelocation', '$lotnumber','$cost', '$duration', '$date', 'Due', 'Park') ");
		
	}
	
	function updateGarageLots($con, $garagelocation)
	{
		$qry1 = mysqli_query($con,"UPDATE garage SET lots=lots-1 WHERE lotname='$garagelocation' ");
	}
	
	function sendConfirmationMail($recipient, $garagelocation, $date, $duration, $carownername, $cost)
	{
		$subject = "Booking Confirmed";
		$message = "Hello ".$carownername.", Your booking is confirmed at garage: ".$garagelocation." from ".$date." for duration of ".$duration.". You need to pay Rs".$cost.".";
		
		if (mail($recipient, $subject, $message))
		{
			return "Mail Sent!";
		}
	}
	
}


?>


