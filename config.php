<?php

$con = mysqli_connect("localhost", "root", "");

if($con)
{
	$db = mysqli_select_db("carparkingsystem");
	if(!$db)
	{
		echo "Could not connect to database".mysqli_error($con);
	}
}
else
{
	echo "could not connect to server";
}

?>