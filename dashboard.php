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

<?php include('header.php'); ?>
<!-- #header -->

<div class="limiter">
    <div class="container-login100" style="background-image: url('img/carbgdash.jpg');">
        <div class="wrap-login100 dash" style="width: 75%;">
        <span class="login100-form-title p-b-53">
            Current Status
          </span>
            <table rules="all">
                <tr>
                    <?php
                    $qry = mysqli_query($con,"SELECT * FROM lot ");
                    $c=0;
                    while($row = mysqli_fetch_array($qry) and $c < 5)
                    {
                        $c = $c+1;
                        if($row['status']=='Free')
                        {
                            ?>
                            <td>
                                <span><a href="book.php">Book Now<br>Parking Lot - <?php echo $row['lotname']; ?></a></span>
                            </td>
                            <?php
                        }
                        else if($row['status']=='Leaving')
                        {
                            ?>
                            <td style="background: #1a1a1a;">
                                <span><a href="book.php">Leaving Soon<br>Parking Lot - <?php echo $row['lotname']; ?></a></span>
                            </td>
                            <?php
                        }
                        else
                        {
                            ?>
                            <td style="background: #1a1a1a;">
                                <span><a href="#">Booked<br>Parking Lot - <?php echo $row['lotname']; ?></a></span>
                            </td>
                            <?php
                        }
                    }
                    ?>
                </tr>
                <tr>
                    <?php
                    $qry = mysqli_query($con,"SELECT * FROM lot ");
                    $c=0;
                    while($row = mysqli_fetch_array($qry) )
                    {
                        $c = $c+1;
                        if($c > 5)
                        {
                            if($row['status']=='Free')
                            {
                                ?>
                                <td>
                                    <span><a href="book.php">Book Now<br>Parking Lot - <?php echo $row['lotname']; ?></a></span>
                                </td>
                                <?php
                            }
                            else
                            {
                                ?>
                                <td style="background: #1a1a1a;">
                                    <span><a href="#">Booked<br>Parking Lot - <?php echo $row['lotname']; ?></a></span>
                                </td>
                                <?php
                            }
                        }
                    }
                    ?>
                </tr>
            </table>
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
