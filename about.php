<?php
require('connection/dbConnection.php');
	 $today=date("Y-m-d");
     $newDay=date("Y-m-d", strtotime("+30 days"));
     //$sql2="select * from payment";
	 //$result10 = mysqli_query($con,$sql2) or die(mysqli_error($con));
    while($row = mysqli_fetch_array($con,$result10))
	{
		
		
		$Date=$row['Date'];
		$End_date=$row['End_date'];
		$FM_approve=$row['FM_approve'];
		$payed=$row['payed'];
		$sid=$row['sid'];
		
		 if($today>=$End_date)
		 {
			
			$sql1="Update payment set Date='0000-00-00',End_date='0000-00-00',value='00.00',month='0',FM_approve='null',payed='',payed_date='0000-00-00'";
			$updated = mysql_query($sql1) or die(mysql_error());
			
		 }
	 
	 }
	 
	 ?>
<!DOCTYPE HTML>
<html>
<head>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/style.css" rel='stylesheet' type='text/css' />

</head>
<body>
 <div class="container Page-container">
 <?php 


 ?>

	<div class="row">
		<div class="col-md-12">
			<div class="mycss1">
					<div class="col-md shadow">
						<label for="show-menu" class="show-menu"><span class="fa fa-bars">Menu</span></label>
						<input type="checkbox" name="" id="show-menu">
						
						<ul class="nav nav-pills nav-justified navigation" >

							<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
							<li class="active"><a href="about.php"><span class="glyphicon glyphicon-earphone"></span>About us</a></li>
							<li><a href="anycomment.php"><span class="glyphicon glyphicon-info-sign"></span>Comment</a></li>
							<li><a href="login.php"><span class="glyphicon glyphicon-earphone"></span>Login</a></li>
							
							
						</ul>
					</div>
			</div>
		</div>
	</div>



	<div class="row">
		<?php 

				include("right8.php");
			?>
	
	
			<div class="col-md-9 container">

			<div class="grid-form1">

			<center>
				<table border="0" width="90%" cellpadding="1" cellspacing="1">
					<tr> 
						<td colspan="2" valign="bottom"><hr></td>
					</tr>
					<tr>
						<td><div align="center"><img src="./image/download.PnG" /><font size='3' face='verdana' color='blue'><b> Web Based Charity club information management system for DTU</b></font></div></td>
					</tr>
					<tr> 
						<td colspan="2" valign="bottom"><hr></td>
					</tr>
				</table>
		
		  <div>
 

<p><font size='3' face='verdana' color='black'><b>DTU Charity club</b> is an organization under the DTU student’s union that supports <br>DTU students who need a special support for their school activity. DTU charity club</br> info() management concerned at a field that used to manage different stakeholders</br> like:-students who need a special support, sponsors who gives a financial and</br> material support & the club members. Making a good information management</br> system to DTU’s charity club is vital to all operations that can be done by this club.
			</font></p>


</div>	
				
				

			</div>
		</div>
	</div>	
      






    <div class="row">
        <div class="col-md-12">
			<center>
			 <?php
				include("inc/foot.php");
				
				   ?>
				   
			</center>
	    </div>
  
    </div>
</div>

</body>

</html>
