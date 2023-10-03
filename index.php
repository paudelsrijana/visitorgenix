<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <!-- Navigation Bar -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
      
        <div class="container-fluid below-nav">
            <div class="navbar-header">
                <a class="navbar-brand" href="bootstrap.html"><img src="Images/logo.png" height="90px" width="90px" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="bootstrap.php">Home</a></li>
                    <li><a href="destination.php">DESTINATIONS</a></li>
                    <li><a href="login/index.php">BOOKINGS</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="login/index.php">LOGIN/SIGNUP</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <script language="JavaScript" type="text/javascript">
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 3000
            })
        });
    </script>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Slide Wrapper -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="Images/slider1.jpg" alt="slider1">
                <div class="carousel-caption">

                    <h4>“We travel not to escape life, but for life not to escape us.”</h4>

                </div>
            </div>
            <div class="item">
                <img src="Images/slider2.jpg" alt="slider2">
                <div class="carousel-caption">
                    <h4>“An investment in travel is an investment in yourself.” </h4>
                </div>
            </div>
            <div class="item">
                <img src="Images/slider3.jpg" alt="slider3">
                <div class="carousel-caption">

                    <h4>“To travel is to live.”</h4>
                </div>
            </div>
            <div class="item">
                <img src="Images/slider4.jpg" alt="slider4">
                <div class="carousel-caption">
                    <h3>“It’s better to see something once than to hear about it a thousand times.”</h3>
                </div>
            </div>
            ...
        </div>

    </div>
    <br>
    <div id="band" class="container text-center">
        <h3>Our Packages</h3>
        <p>
            We, Visitor Genix, are proud to present a selection of finely tailored programs. We are committed to making
            your travel efficient and innovative.</p>
    </div>
    <div id="image">
        <div class="col-md-4 text-center container">
            <h5>Mountain Region Trekking</h5>
            <img src="Images/pkg1.jpg" class="rounded"><br><br>
            <a href="destination.php" class="btn btn-primary">Go Here</a>

        </div>
        <div class="col-md-4 text-center container" style=" border-left: 2px solid #E9E9E9;">
            <h5>Cultural & Heritage Trekking </h5>
            <img src="Images/pkg2.JPG" class="rounded">
            <br><br>
            <a href="destination.php" class="btn btn-primary">Go Here</a>
        </div>
        <div class="col-md-4 text-center container" style=" border-left: 2px solid #E9E9E9;">
            <h5>Random Natural Places Trekking</h5>
            <img src="Images/pkg3.jpg" class="rounded">
            <br><br>
            <a href="destination.php" class="btn btn-primary">Go Here</a>
        </div>
    </div><br><br>
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