<style type="text/css">
    header{
        padding: 10px;
    }
</style>
<?php
if(isset($_SESSION['log'])=="")
{
    ?>
    <header style="background: black;">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="dashboard.php"><img src="img/cps.png" style="width: 300px;margin-top: 10px;" /></img></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="index.php">Header 1</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">

                    <li class="menu-has-children"><a>About Us</a>
                    </li>

                    <li class="menu-has-children"><a>Contact Us</a>
                    </li>

                    <li class="menu-has-children"><a>Book Parking Lot</a>
                        <ul>
                            <li><a href="index.php">Existing User</a></li>
                            <li><a href="signup.php">New User</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>

            <!-- #nav-menu-container -->
        </div>
    </header>
    <?php
}
else if($_SESSION['log1']=="user")
{
    ?>
    <header style="background: black;">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="dashboard.php"><img src="img/cps.png" style="width: 300px;margin-top: 10px;" /></img></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="index.php">Header 1</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">

                    <li class="menu-has-children"><a>About Us</a>
                    </li>

                    <li class="menu-has-children"><a href="dashboard.php">View Free Slot</a>
                    </li>

                    <li class="menu-has-children"><a href="book.php">Book Free Slot</a>
                    </li>

                    <li class="menu-has-children"><a href="verify.php">Verification</a>
                    </li>

                    <li class="menu-has-children"><a href="fee.php">Parking Fees</a>
                    </li>

                    <li class="menu-has-children"><a>Contact Us</a>
                    </li>

                    <li class="menu-has-children"><a href="logout.php">Logout</a>
                    </li>

                </ul>
            </nav>

            <!-- #nav-menu-container -->
        </div>
    </header>
    <?php
}
else if($_SESSION['log1']=="admin")
{
    ?>
    <header style="background: black;">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="dashboard.php"><img src="img/cps.png" style="width: 300px;margin-top: 10px;" /></img></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="index.php">Header 1</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">

                    <li class="menu-has-children"><a>About Us</a>
                    </li>

                    <li class="menu-has-children"><a>Contact Us</a>
                    </li>

                    <li class="menu-has-children"><a href="logout.php">Logout</a>
                    </li>

                </ul>
            </nav>

            <!-- #nav-menu-container -->
        </div>
    </header>
    <?php
}
else
{
    ?>
    <header style="background: black;">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="dashboard.php"><img src="img/cps.png" style="width: 300px;margin-top: 10px;" /></img></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="index.php">Header 1</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">

                    <li class="menu-has-children"><a>About Us</a>
                    </li>

                    <li class="menu-has-children"><a>Contact Us</a>
                    </li>

                    <li class="menu-has-children"><a>Book Parking Lot</a>
                        <ul>
                            <li><a href="index.php">Existing User</a></li>
                            <li><a href="signin.php">New User</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>

            <!-- #nav-menu-container -->
        </div>
    </header>
    <?php
}
?>
<script>
    function myfunction(){
        alert("index First");
    }
</script>