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
        <a class="navbar-brand" href="afterlogin.html"><img src="Images/logo.png" height="200px" width="200px" class="img-responsive"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="afterlogin.php">Home</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li class="active"><a href="destination.php">DESTINATIONS</a></li>
          <li><a href="afterloginbooking.php">BOOKINGS</a></li>
          <li><a href="gallery.php">GALLERY</a></li>
          <li><a href="contact.php">CONTACT</a></li>
          <li><a href="logout.php">LOGOUT</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <br>

  <center>
    <form method="POST" action="travelbooking.php">

      <div id="book">
        <div class="travel">
          <center>
            <h3>Book your visit</h3>
          </center>
          <hr class="line" style="width:35%; height: 2px;">
          <?php
          if (isset($_GET['msg1'])) {
            echo $_GET['msg1'];
          }
          ?>
        </div>

        <div class="input-group">
          <span class="input-group-addon">Firstname: * </span>
          <input id="email" type="text" class="form-control" name="firstname" placeholder="firstname(as per your Govn ID)" required>
        </div><br>
        <div class="input-group">
          <span class="input-group-addon">Lastname: *</span>
          <input id="email" type="text" class="form-control" name="lastname" placeholder="lastname" required>
        </div><br>
        <div class="input-group">
          <span class="input-group-addon add">Address: *</span>
          <input id="email" type="text" class="form-control " name="address" placeholder="address" required>
        </div><br>

        <div class="input-group">
          <span class="input-group-addon" style="padding-right:10px;">Phone no: * </span>
          <input id="email" type="text" class="form-control" name="phone" placeholder="10 digit phone number" required>
        </div><br>

        <div class="input-group">
          <span class="input-group-addon">Email ID: <i class="glyphicon glyphicon-user"></i> </span>
          <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
        </div><br>

        <div class="ktm">
          <center>
            <h3>Mention your Travelling Date:</h3>
          </center>
          <hr class="line" style="width:40%; border-bottom-width: 2px;">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">Departure date: </span>
          <input id="email" type="date" class="form-control" name="departuredate" placeholder="mm/dd/yyyy" style="width:20%;" required>
        </div><br>

        <div class="input-group">
          <span class="input-group-addon" style="padding-right:28px;">Arriving date: </span>
          <input id="email" type="date" class="form-control" name="arrivaldate" placeholder="mm/dd/yyyy" style="width:20%;" required>
        </div><br>

        <div class="input-group">
          <span class="input-group-addon" style="padding-right:28px;">Pick-up Location</span>
          <input id="email" type="text" class="form-control" name="location" style="width:48%;" required>
        </div><br>

        <hr class="line" style="width:100%; border-bottom-width: 2px;">

        <div class="input-group">
          <span class="input-group-addon">Additional Queries: </span>
          <textarea rows="5" cols="47" id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info"></textarea>
        </div>
        <br>
        <center>
          <input class="btn btn-primary sub btn--radius-2 " type="submit" name="sub" value="Submit">
        </center>
      </div>
    </form>
  </center>

  <div class="ktm">
    <center>
      <h3>Already Booked?</h3>
    </center>
    <hr class="line" style="width:100%; border-bottom-width: 2px;">
    <center>
      <a href="afterloginbooking.php" class="btn btn-primary">Booking Status</a>
    </center>
  </div>
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