<?php
session_start();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Bookings</title>

</head>

<style>
    .btn-success {
        padding: 10px;
        border-radius: 10px;
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
        text-decoration: none;
        font-size: 18px;
    }

    .btn-success:hover {
        color: #fff;
        background-color: #449d44;
        border-color: #398439;
    }

    table {
        width: 90%;
        text-align: center;
        padding: 20px;
        font-size: 19px;
        font-family: sans-serif;

    }

    table th {
        background-color: beige;
        padding: 10px;
        color: #25302B;
    }

    table tr:nth-child(even) {
        background-color: #b8e0c1;
        padding: 10px;
        font-size: 16px;
        color: darkslategray;
    }

    table tr:nth-child(odd) {
        background-color: floralwhite;
        padding: 10px;
        font-size: 16px;
    }
</style>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!--Grouping for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="afterlogin.html"><img src="Images/logo.png" height="90px" width="90px"  class="img-responsive"></a>
            </div>

            <div class="echo">
                <ul class="nav navbar-nav">
                    <li style="font-size: 20px; color: green; font-weight:bold; margin-top:7px">
                        <?php
                        echo ($_SESSION['firstname']);


                        ?>
                    </li>
                </ul>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="afterlogin.php">Home</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="destinationafterlogin.php">DESTINATIONS</a></li>
                    <li class="active"><a href="afterloginbooking.php">BOOKINGS</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="afterlogincontact.php">CONTACT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <br>
    <form method="POST" action="">
        <div id="book">
            <div class="travel">
                <center>
                    <h3>Enter your e-mail address to check your booking status!</h3>
                </center>
                <hr class="line" style="width:55%; height: 2px;">

            </div>
            <h4>Check Your Booking Status </h4>

            <div class="input-group">
                <span class="input-group-addon">Email-Address: * </span>
                <input id="email" type="email" class="form-control" name="email" placeholder="email(you used for booking)" required>
            </div><br>
            <input class="btn btn-primary sub btn--radius-2 " type="submit" name="sub" value="Submit" style="margin-left: 20px;">
        </div>
    </form>
    <center>
        <div style="overflow-x: auto;">
            <table>
                <tr>
                    <th>Booking ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Phone no:</th>
                    <th>Pickup Address</th>
                    <th>Pickup Date</th>
                    <th>Pickup Time</th>
                    <th>Driver Name</th>
                    <th>Vehicle Number</th>
                    <?php
                    $email = "";
                    $host = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "";
                    $dbname = "vgenix";

                    //create connection

                    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

                    if (mysqli_connect_error()) {
                        die('Connect Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
                    } else {
                        if (isset($_POST['sub'])) {
                            $email = $_POST['email'];
                        }
                        $sql = "SELECT r.bookingid, r.firstname, r.lastname, r.phone, r1.location,  r.departuredate ,r1.time, r1.name, r1.vehicleno FROM  travelbooking r,  driverdetail r1 where email = '$email' and r.location=r1.location and r.departuredate=r1.departuredate ";
                       
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row["bookingid"] . "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["location"] . "</td><td>" . $row["departuredate"] . "</td><td>" . $row["time"] . "</td><td>" . $row["name"] . "</td><td>" . $row["vehicleno"] . "</td></tr>";
                           
                            }
                            echo "</table>";
                        } else {
                            echo "No records!!";
                        }
                    }
                    ?>
                </tr>
            </table>
        </div>
        <br><br>
        <a href="afterloginbooking.php" class="btn btn-success">Clear</a>
    </center>

    <div id="abc" class="container text-center">
        <h3>Find us here</h3>
    </div>



    <div id="map">
        <div class="googlemap col-md-6">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7066.055509104708!2d85.37329614999999!3d27.68553705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a3fb6a336e3%3A0xf8e832b9e7c7b1c7!2sSanothimi%2C%20Madhyapur%20Thimi%2044600!5e0!3m2!1sen!2snp!4v1687790603445!5m2!1sen!2snp" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact col-md-6">
            <h1>Visitor Genix Pvt Ltd</h1>
            <br>
            <div class="contact1">
                <h3> Office Address</h3>
                <i class="fa fa-location-arrow fa-2x" aria-hidden="true"></i>&nbsp<p> Sanothimi Campus, Sanothimi,
                    Bhaktapur<br>
                    <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp visitorgenix@gmail.com<br>
                    <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>&nbsp&nbsp +977 9849942151
                </p>
            </div>
        </div>
    </div>

    <div class="container bg-8">
        <div class="col-md-4">
            <h3>About</h3>
            <div class="line-h"></div>
            <p>We understands the challenges of the modern tourism industry and knows that planning, developing and
                adapting destination resources to the evolving needs of the market is the key to success. We take all
                trends in tourism business into consideration, invest in new infrastructure and offer both leisure and
                business travel solutions. </p>
        </div>
        <div class="col-md-4">
            <h3>Social Links</h3>
            <div class="line-h"></div>
            <div class="social">
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                    <li> <a href="https://www.youtube.com/"> <i class="fa fa-youtube"></i></a></li>

                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <h3>Our Bunker</h3>
            <div class="line-h"></div>
            <p>Sanothimi College<br>
                Sanothimi, Bhaktapur<br>
                Bagmati,Kathmandu</p>
        </div>
    </div>
    <hr style=" color:black;">
    <div class="container-fluid footer">
        <div>
            <p> Copyright &copy 2023 - All Rights Reserved - Privacy Policy</p>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>