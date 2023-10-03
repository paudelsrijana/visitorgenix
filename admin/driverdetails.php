<?php 
 session_start();
?>
<html>
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/style.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Bookings</title>
    
 </head>
    
    <style>
    .btn-success{
        padding: 10px;
        border-radius: 10px;
        color:#fff;
        background-color:#5cb85c;
        border-color:#4cae4c;
        text-decoration: none;
        font-size: 18px;
    }
    .btn-success:hover
    {
        color:#fff;
        background-color:#449d44;
        border-color:#398439;
    }
    table{
        width:100%;
        text-align: center;
        font-size: 19px;
        font-family: sans-serif;
        
    }
    table th{
        background-color: beige;
        padding: 20px;
        color: #25302B;
    }
    table tr:nth-child(even){
        background-color:#b8e0c1;
      padding: 20px;
        font-size: 16px;
        color:darkslategray;
       
    }
    table tr:nth-child(odd){
        background-color:floralwhite;
        padding: 20px;
        font-size: 16px;
    }
        table tr td{
            padding: 20px;
        }
    </style>
 <body>
       <script type="text/javascript">
function deletes(regdno)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='deletevehicle.php?regdno='+regdno;
     }
}</script>
        
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
      <a class="navbar-brand" href="afterlogin.html"><img src="../Images/logo.png" height="90px" width="90px" class="img-responsive"></a>
    </div>

      <div class="echo">
     <ul class="nav navbar-nav"><li style="font-size: 16px; color: 9e9898">Welcome
         <br>
        <?php
             echo ($_SESSION['username']);
                                
        
         ?>
      </li></ul>
      </div>
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="adminafterlogin.php">HOME</a></li>
          <li><a href="managebooking.php">MANAGE BOOKINGS</a></li>
          <li  class="active"><a href="driverdetails.php">MANAGE DRIVERS</a></li>
    <li><a href="../logout.php">LOGOUT</a></li>

      </ul>        
      </div> </div>
</nav>
            
         <center>
        <div id="book">
     <div class="travel">
         <h4>Driver Details!</h4></div></div>
     
         <div style="overflow-x: auto;">
     <table>
        <tr>
            <th>Regd No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Time</th>
            <th>Departure Date</th>
            <th>Pick up Location</th>
            <th>Vehicle No:</th>
            <th>Action</th>
           
        <?php 
         $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "vgenix";
    
    //create connection
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if(mysqli_connect_error())
    {
        die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    }
    else
    { 
        $sql = "SELECT * FROM  driverdetail";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0)
        {
            while($row = $result-> fetch_assoc())
            {
                
                
                echo "<tr>";
                echo "<td>".$row["regdno"]."</td>"; 
                 echo "<td>".$row["name"]."</td>"; 
                 echo "<td>".$row["address"]."</td>"; 
                 echo "<td>".$row["phone"]."</td>"; 
                 echo "<td>".$row["time"]."</td>"; 
                 echo "<td>".$row["departuredate"]."</td>";
                 echo "<td>".$row["location"]."</td>"; 
                 echo "<td>".$row["vehicleno"]."</td>"; 
                echo "<td><a href='#' onclick='deletes($row[regdno])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";       
            }
            echo "</table>";
        }
        else {
            echo "No records!!";
        }}
            ?>
        </tr>
        </table>
         </div>
         </center>
     
     
     
     
<div id="abc" class="container text-center">
    <h3>Find us here</h3>  
     </div>
     
  
     <div id="map">
        <div class="googlemap col-md-6">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7066.055509104708!2d85.37329614999999!3d27.68553705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a3fb6a336e3%3A0xf8e832b9e7c7b1c7!2sSanothimi%2C%20Madhyapur%20Thimi%2044600!5e0!3m2!1sen!2snp!4v1687790603445!5m2!1sen!2snp"
                width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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