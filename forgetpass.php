		<!DOCTYPE HTML>
		<?php
		require_once("connection/connection.php");
		?>
		<html>
		<head>
			
		  <title>classroom system</title>
		 <link href="a_data/style.css" rel="stylesheet" type="text/css">
		<script src="ism/js/ism-2.1.js"></script>
		<style type="text/css">

			

		a:hover {
			background-color:PURPLE;
		}
		p{
			
			}
		body,td,th {
			color: blue;
		}
		body {
			
			margin-left: 0px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
			#mydv {
					width: 8000px;
					height:5000px;
					border-width: 2px;
					border-style:solid;
					border-color:red;
					background: #CCC;
				}
		}
		#images
		{
			float:right;
			width:650px;
		   
					 border-radius:50px;
					 margin-top:15px;
					 box-shadow:10px 20px 10px #993300; 
		}
		#accounts{
			float:left;
			width:250px;
			
			}
		.cusCare{
			
			margin-left:200px;}
		</style>
		</head>
		<body>
		<table align="center" width="900px" height="400" border=1 bgcolor="white">
		<tr>
		<td height=px  colspan=3>

		<img src="images/interface.png" width="1230px" height="160" ><br>
		 <div class="menu">
				   <ul>
				  <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
				 <li><a  href="index.php" >HOME</a></li>
				  <li><a  href="about us.php" >About Us</a></li>
				   <li><a  href="faq.php" >Feedback</a></li>
				<li> <a  href="help.php" >HELP</a></li>
			
			<li><a  href="contact.php">Contact Us</a></li>
			<li><a  href="login.php" >LOGIN</a></li>
			</ul>
			   </div>
		</td>

		</tr>	
		 <td  valign="top" bgcolor="#DEB887">

		<table align="center"><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr></table>

		<div id="login">
		<center>
		<form name="frmForgot" id="frmForgot" method="post" action="forgetpass.php" onSubmit="return validate_forgot();">

			<?php if(!empty($success_message)) { ?>
			<div class="success_message"><?php echo $success_message; ?></div>
			<?php } ?>

			<div id="validation-message">
				<?php if(!empty($error_message)) { ?>
			<?php echo $error_message; ?>
			<?php } ?>
			</form >
			</div>
			<form  method="POST" action="forgetpass.php">
		<table class="log_table" >
		<tr bgcolor="#000000"><br><th colspan="2"><font color="#ffffff" style="text-decoration:bold;">Did You forget Your Password?</font></th></tr>
		<tr>
		 <td>Enter Email</td><td><input type="text" name="email" id="user-email" class="input-field" style="height: 30px;" required/>&nbsp;</td>
		</tr>

		<tr><td></td><td><input type="submit" name="login" id="forgot-password" class="form-submit-button" value="Search" style="height: 30px;width: 150px; background-color: #20B2AA;color: black;"/> &nbsp;&nbsp;&nbsp;&nbsp;</td></tr><br/>
		<tr>
		<td>
		</td>
		<td>
		</td>
		<td>
		 
		</td>
		</tr>
		</table>
		</form>
			
		 <?php 
			  $con=mysqli_connect('localhost','root','','scrs-db') or die("could not connect".mysql_error());
			if ( isset($_POST['login']))
			{
			$em=$_POST['email'];
		   $result=mysqli_query($con,"select * from users where email='$em'");	
		  // $se=mysqli_query($con,$s);
		   $u=mysqli_num_rows($result);
		   if($u>0){
			 //newpass=rand(100000,999999);
			  $newpassword=  rand(100000, 999999);
	   $newpass=base64_encode($newpassword);
     //  $from="hibretcinema@gmail.com";
       
       if($resetData=  mysqli_fetch_assoc($result)){
           $to=$resetData['email'];
       }
       $subject="Password Reset Request";
       $message="Your new password is ".$newpassword;
       //$headers="From: ".$from;
      // mail($to,$subject,$message,$headers);
       mysqli_query($con,"UPDATE `users` SET `password`='$newpass' WHERE `email`='$em'");
//       ------------------------------------
	   // header('Location:'.$url.''); 
		
			require 'PHPMailer/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = "ssl";
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "rede401@gmail.com";
   $mail ->Password = "0929385921";
   $mail ->SetFrom("rede401@gmail.com");
   $mail ->Subject = $subject;
   $mail ->Body = $message;
   $mail ->AddAddress($to);

   if(!$mail->Send())
   {
	   echo "<script>alert('Your new password was not sent !')</script>";
	   echo"".$mail->ErrorInfo;
   }
   else
   {
       echo "<script>alert('Your new password was sent by this email address! open your gmail account and recover it !')</script>";
       echo "<script>window.location='index.php';</script>"; 
   }
		
   }  else {
       echo "<script>alert('There is no an account with the Email you provided!')</script>";
       echo "<script>window.location='index.php';</script>"; 
   }
  
			}	  
		?>

				<br><br><br><br><br><br><br><br><br><br><br>	
					</div>
		</td>

		<tr>
		<td bgcolor=#66CDAA>
		<table align="center"><tr><td><font face="Times New Roman" size="3" color="black" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p><i>Copyright © 2019 E.C. All Right Reserved by 4th Year Group_15 Computer Science Student.</i></p>
		 &nbsp; &nbsp; &nbsp; &nbsp;

		</font></td></tr></table>
		</td>
		</tr>
								
		</body>
		</html>
