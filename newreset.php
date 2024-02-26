


     <?php 
     include("connection/dbConnection.php");
       
      if ( isset($_POST['save']))
      {
      $email=$_POST['EmailAddress'];
       $result=mysqli_query($con,"select * from users where EmailAddress='$email'");  
      // $se=mysqli_query($con,$s);
       $u=mysqli_num_rows($result);
       if($u>0){
       //newpass=rand(100000,999999);
        $newpassword=  rand(100000, 999999);
     $newpass=md5($newpassword);
     //  $from="hibretcinema@gmail.com";
       
       if($resetData=  mysqli_fetch_assoc($result)){
           $to=$resetData['EmailAddress'];
       }
       $subject="Password Reset Request";
       $message="Your new password is ".$newpassword;
       //$headers="From: ".$from;
      // mail($to,$subject,$message,$headers);
       mysqli_query($con,"UPDATE `users` SET `pwd`='$newpass' WHERE `EmailAddress`='$email'");
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
      echo "<script>window.location='index.php';</script>"; 
   }
   else
   {
       echo "<script>alert('Your new password was sent by this email address! open your gmail account and recover it !')</script>";
       echo "<script>window.location='index.php';</script>"; 
   }
    
   }  else {
       echo "<script>alert('There is no an account with the Email you provided!')</script>";
       header("location='index.php");
       echo "<script>window.location='index.php';</script>"; 
   }
  
      }   
    ?>


