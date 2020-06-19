<?php
session_start();
include('config.php');
include('sessioncheck.php');

$qry = mysqli_query($con,"SELECT * FROM garage");
$row = mysqli_fetch_array($qry);

$lat = $row['latitude'];
$long = $row['longitude'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Maps</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaCG3lYkCLnzQxDzGYQhNf8t2Se3QIxyo&callback=loadMap">
	</script>
	
	<script>
		var map;
		function loadMap() {
			var loc = { lat: <?php echo $lat; ?>, lng: <?php echo $long; ?> }; 
			map = new google.maps.Map(document.getElementById("map"), {
			center: loc,
			zoom: 15
			});
			
			<?php
			while($row1 = mysqli_fetch_array($qry))
			{
				?>
					var marker = new google.maps.Marker({
						position: { lat: <?php echo $row1['latitude']; ?>, lng: <?php echo $row1['longitude']; ?> },
						map: map
					});
				<?php
			}
				?>
		}
	</script>
	
	<style type="text/css">
	.container
	{
		height: 450px;
	}
	#map
	{
		width: 100%;
		height: 100%;
		border: 1px solid blue;
	}
	</style>
	</head>
	
	<body>
		<div class="container">
			<center><h1> Garage Location on Google Maps of <?php echo $garagename; ?></h1></center>
			<div id="map"></div>
		</div>
	</body>

</html>
			
			
			
			
			
			
			
			
