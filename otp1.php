<?php
session_start();
include('config.php');

$car = $_POST['car'];
$otp1 = $_POST['otp1'];
$date = $_POST['datetimelocal'];

$qry = mysqli_query($con,"SELECT * FROM logtable WHERE otp1='$otp1' ");
$qry1 = mysqli_num_rows($qry);
if($qry1)
{
    $row = mysqli_fetch_array($qry);
    if($row['carno'] == $car)
    {
        $sql = mysqli_query($con,"UPDATE logtable SET fromtime='$date', status='Park' WHERE otp1='$otp1' ");
        $lot = $row['lotname'];
        $sql5 = mysqli_query($con,"UPDATE lot SET status='Booked' WHERE lotname='$lot' ");
        ?>
        <script type="text/javascript">
            alert ("Park your Car.");
            window.location.href = "verify.php";
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert ("Invalid Credentials!");
            window.location.href = "verify.php";
        </script>
        <?php
    }
}
else
{
    ?>
    <script type="text/javascript">
        alert ("Invalid OTP!");
        window.location.href = "verify.php";
    </script>
    <?php
}

?>