<?php
//include("config.php");
include("connection/dbconnection.php");
$we="";
$ty="";

$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	 $id= substr(str_shuffle($set), 0,5);
   $FirstName=$_POST['name'];
   $address=$_POST['address'];
	$city=$_POST['city'];
	$accout=$_POST['accout'];
	$password=$_POST['password'];
	$Amount=$_POST['amount'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];

		$sql ="insert into account(Name,address,city,accountNumber,password,Amount,Email,telephon) values
	('$FirstName','$address','$city','$accout','$password','$Amount','$email','$phone')";
	$in=mysqli_query($con,$sql);
	if(!$in)
		  {
			  
            echo mysqli_error($con);
		  }
          else  
		  {
		 echo'<script type="text/javascript">alert("successfully  register r!");window.location=\'payment1.php\';</script>';
         
		  }
		  ?>
				
	
