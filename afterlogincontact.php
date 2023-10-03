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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="destinationafterlogin.php">DESTINATIONS</a></li>
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
      <h3 style="text-align: center;">Contact Us:</h3>
      <hr class="line" style="width:35%; height: 2px;">
      <?php
      if (isset($_GET['msg1'])) {
        echo $_GET['msg1'];
      }
      ?>
    </div>
  </div>
  <div class="container bg-8">
    <div class="col-md-4">
      <h3>Visitor Genix</h3>
      <div class="line-h"></div>
      <p>We understands the challenges of the modern tourism industry and knows that planning, developing and
        adapting destination resources to the evolving needs of the market is the key to success. We take all
        trends in tourism business into consideration, invest in new infrastructure and offer both leisure and
        business travel solutions. </p>
      <br>
      <h4 style="font-weight:600; font-size:17px; color:#34363b;">Address:</h4>

      <p>Sanothimi College<br>
        Sanothimi, Bhaktapur<br>
        Bagmati,Kathmandu</p>
      <br>
      <h4 style="font-weight:600; font-size:17px; color:#34363b;">Phone:</h4>

      <p>9849942151
        <br>9860441191
      </p>

    </div>
    <div class="col-md-4">
      <h3>Enquiries</h3>
      <div class="line-h"></div><br>
      <form action="enquiry.php" method="post">
        <div class="input-group">
          <span class="input-group-addon">Name: * </span>
          <input id="email" type="text" class="form-control" name="name" placeholder="Fullname" required style="width:90%;">
        </div><br>

        <div class="input-group">
          <span class="input-group-addon">Email: * </span>
          <input id="email" type="email" class="form-control" name="email" placeholder="@xyz.com" required style="width:90%;">
        </div><br>
        <div class="input-group">
          <span class="input-group-addon">Subject</span>
          <input id="email" type="text" class="form-control" name="subject" placeholder="Subject" style="width:90%;">
        </div><br>

        <div class="input-group">
          <span class="input-group-addon">Queries</span>
          <textarea rows="6" cols="20" type="text" class="form-control" name="enquire" style="width:90%;" required></textarea>
        </div><br>

        <input class="btn btn-primary sub btn--radius-2 " type="submit" name="sub" value="Submit">
      </form>

    </div>
    <div class="col-md-4">
      <h3>Map</h3>
      <div class="line-h"></div>
      <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7066.055509104708!2d85.37329614999999!3d27.68553705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a3fb6a336e3%3A0xf8e832b9e7c7b1c7!2sSanothimi%2C%20Madhyapur%20Thimi%2044600!5e0!3m2!1sen!2snp!4v1687790603445!5m2!1sen!2snp" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <hr style=" color:black;">
  <div class="container-fluid footer">
    <div>
      <p> Copyright &copy 2023 - All Rights Reserved - Privacy Policy</p>
    </div>
  </div>
</body>

</html>