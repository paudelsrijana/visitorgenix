<?php
 $host= "localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="vgenix";

    //create connection
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if(mysqli_connect_error())
    {
        die ('Connection to Server Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
       	$info=$_GET['regdno'];	
	mysqli_query($conn,"delete from driverdetail where regdno='$info'");
    header('location:driverdetails.php?info=driverdetails');
	
    }
?>