<?php
session_start();
include('config.php');

$car = $_POST['car'];
$otp2 = $_POST['otp2'];
$date = $_POST['datetimelocal'];

$qry = mysqli_query($con,"SELECT * FROM logtable WHERE otp2='$otp2' ");
$qry1 = mysqli_num_rows($qry);
if($qry1)
{
    $row = mysqli_fetch_array($qry);
    if($row['carno'] == $car)
    {
        $sql = mysqli_query($con,"UPDATE logtable SET totime='$date', status='Left' WHERE otp2='$otp2' ");
        $lot = $row['lotname'];
        $sql5 = mysqli_query($con,"UPDATE lot SET status='Leaving' WHERE lotname='$lot' ");
        ?>
        <script type="text/javascript">
            alert ("Proceed to Pay.");
            window.location.href = "fee.php";
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