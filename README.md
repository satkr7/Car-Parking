# Online Car Parking Website


## About the Project
Online Parking finder website provides a platform for the user to find a parking slot. Garage Owners can register their garages to the website and make money out of it.

## Project Implementation
* Backend: PHP
* Frontend: HTML, CSS
* Database: MySQL

## Setup:
* Clone the repository
* Setup a server (XAMPP)
* Unzip the repository in ../xampp/htdocs/
* Import "database/carparkingsystem.sql" in PHPMyAdmin
* Edit your credentials in "config.php" for localhost, user, password, database
```python
$con = mysqli_connect("localhost", "user", "password");
$db = mysqli_select_db($con, "databaseName");
```
* Get your API key from [developer.google.com](https://console.developers.google.com/) and replace "YOUR_API_KEY" with your key in "locationmap.php" and "locationmapgarages.php"
```javascript
<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=loadMap">
</script>
```
* Run Online Parking finder website on localhost


## Developers

[Transformer Team](http://103.127.146.165/wiki/index.php?title=Transformers:Main)




