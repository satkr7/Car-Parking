<?php
session_start();
include('config.php');
include('sessioncheck.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Free Lots</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="img/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">

    <style type="text/css">
        table{
            border: 1px solid #1a1a1a;
            width: 100%;
            text-align: center;
        }
        td{
            height: 250px;
        }
        a{
            color: skyblue;
        }
        .dash{
            padding-top: 20px;
            padding-right: 23px;
            padding-left: 23px;
            padding-bottom: 17px;

        }
    </style>

</head>

<body>
<div id="preloader"></div>

<!-- #header -->
		
		<div class="limiter">
					
					<!-- Book Slot -->
					<div class="container-login100">
                    <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            
                    <form class="login100-form validate-form" method="post" action="booking.php">
                      <span class="login100-form-title p-b-59">
                        Book a Parking Slot
                      </span>

                        <div class="wrap-input100 validate-input" data-validate="Car No. is required">
                            <span class="label-input100">Enter Your Licence No.</span>
                            <input class="input100" type="text" name="licence" placeholder="Licence No." required="required">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Lot No. is required">
                            <span class="label-input100">Garage</span>
                            <select class="input100" name="lot" required="required">
                                <?php
                                $qry = mysqli_query($con,"SELECT * FROM garage WHERE lots>0 ");
                                while ($row = mysqli_fetch_array($qry)) {
                                    ?>
                                    <option value="<?php echo $row['lotname']; ?>"><?php echo $row['lotname']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <span class="focus-input100"></span>
                        </div>
						
						
						<div class="wrap-input100 validate-input" >
							<input class="input100" type="datetime-local" name="datetimelocal">
							<span class="focus-input100"></span>
						</div>
						

                        <div class="wrap-input100 validate-input" data-validate="Duration is required">
                            <span class="label-input100">Duration</span>
                            <input class="input100" type="text" name="duration" placeholder="Duration in minutes" required="required">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    Book Now
                                </button>
                            </div>

                        </div>
                    </form>
					</div>
					</div>
					
					<!-- Find the garage location -->
					<div class="container-login100">
					<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                    <form class="login100-form validate-form" method="post" action="location.php">
                      <span class="login100-form-title p-b-59">
                        Find the garage location
                      </span>

                        <div class="wrap-input100 validate-input" data-validate = "Lot No. is required">
                            <span class="label-input100">Garage</span>
                            <select class="input100" name="lot" required="required">
                                <?php
                                $qry = mysqli_query($con,"SELECT * FROM garage");
                                while ($row = mysqli_fetch_array($qry)) {
                                    ?>
                                    <option value="<?php echo $row['lotname']; ?>"><?php echo $row['lotname']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    Find Location
                                </button>
                            </div>

                        </div>
                    </form>
					</div>
					</div>
					
					<!-- Booking Details -->
					<div class="container-login100">
					<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
					<form class="login100-form validate-form" method="post" action="bookingmgr.php">
                      
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    Booking Details
                                </button>
                            </div>

                        </div>
                    </form>
					</div>
					</div>
					
					<!-- Search Parking Lot -->
					<div class="container-login100">
					<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
					<form class="login100-form validate-form" method="post" action="dashboard.php">
                      
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    Search Parking Lots
                                </button>
                            </div>

                        </div>
                    </form>
					</div>
					</div>
					
					<div class="container-login100">
					<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
					<form class="login100-form validate-form" method="post" action="logout.php">
                      
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    Exit
                                </button>
                            </div>

                        </div>
                    </form>
					</div>
					</div>
            
				</div>

<?php include('footer.php'); ?>
<!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Required JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/morphext/morphext.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/stickyjs/sticky.js"></script>
<script src="lib/easing/easing.js"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="js/custom.js"></script>

<script src="contactform/contactform.js"></script>


</body>

</html>
