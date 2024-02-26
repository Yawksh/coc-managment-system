<?php

//all the variables defined here are accessible in all the files that include this one
$con= new mysqli('localhost','root','','coc1')
or die("Could not connect to mysql".mysqli_error($con));


if(isset($_POST['save'])or die(mysqli_error($con))){
   //$url=$_POST['urlc'];
   $email=$_POST['EmailAddress'];
 
   $resetSql=  mysqli_query($con,"SELECT * FROM `users` WHERE EmailAddress='$email'");
   
   $count=  mysqli_num_rows($resetSql);
   if($count>0){
       $newpassword=  rand(100000, 999999);
	   $newpass=md5($newpassword);
       $from="rede401@gmail.com";
       
       if($resetData=  mysqli_fetch_assoc($resetSql)){
           $to=$resetData['EmailAddress'];
       }
       $subject="Password Reset Request";
       $message="Your new password is ".$newpassword;
       $headers="From: ".$from;
       mail($to,$subject,$message,$headers);
       mysqli_query($con,"UPDATE users SET Password='$newpass' WHERE EmailAddress='$email'");
//       ------------------------------------
	   // header('Location:'.$url.'');
		require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 25; // or587 
   $mail ->IsHTML(true);
   $mail ->Username = "rede401@gmail.com";
   $mail ->Password = "0929385921";
   $mail ->SetFrom("rede401@gmail.com");
   $mail ->Subject = $subject;
   $mail ->Body = $message;
   $mail ->AddAddress($to);

   if(!$email->Send())
   {
	   echo "<script>alert('Your new password was not sent !')</script>";
	   echo"".$email->ErrorInfo;
   }
   else
   {
       echo "<script>alert('Your new password was sent by this email address! open yor gmail account and recover it !')</script>";
       echo "<script>window.location='index.php';</script>"; 
   }
		
   }  else {
       echo "<script>alert('There is no an account with the Email you provided!')</script>";
       echo "<script>window.location='index.php';</script>"; 
   }
  
        
}
?>
