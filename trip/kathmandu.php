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
    <title>Home</title>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img src="Images/logo.png" height="90px" width="90px" class="img-responsive"></a>
            </div>
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li ><a href="afterlogin.php">Home</a></li>
                    <li class="active"><a href="destination.php">DESTINATIONS</a></li>
                    <li><a href="afterloginbooking.php">BOOKINGS</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="index.php">LOGOUT</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div id="book">
        <div class="travel">
            <h3 style="text-align: center;">Our Packages</h3>
        </div>
    </div>
    <div id="image"  >
        <div class="col-md-4 text-center container">
            <h5>Kathmandu Valley Tour</h5>
            <img src="Images/glimpse.jpg" class="img-circle"><br><br>
            <a href="travelbookingmain.php" class="btn btn-primary">Book Now</a>

        </div>
        <div class="col-md-4 text-center container" style=" border-left: 2px solid #E9E9E9;">
            <h5>Annapurna Base Camp</h5>
            <img src="Images/anan.jpg" class="img-circle">
            <br><br>
            <a href="travelbookingmain.php" class="btn btn-primary">Book Now</a>
        </div>
        <div class="col-md-4 text-center container" style=" border-left: 2px solid #E9E9E9;">
            <h5>Everest Base Camp</h5>
            <img src="Images/everest.jpg" class="img-circle">
            <br><br>
            <a href="travelbookingmain.php" class="btn btn-primary">Book Now</a>
        </div>
    </div><br>
    <hr>
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