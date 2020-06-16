<?php

$con = mysqli_connect("localhost:3307", "root", "");

if($con)
{
	$db = mysqli_select_db($con, "carparkingsystem");
	if(!$db)
	{
		echo "Could not connect to database".mysqli_error($con);
	}
	else
	{
		echo "Connected";
	}
}
else
{
	echo "Not Connected";
}

?>