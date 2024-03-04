
<?php
session_start();
include './Connection.php';


?>
<html>
<head>
  <title>Hibret Cinema</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/left_item.css" rel="stylesheet" type="text/css" />
  <link href="css/hover_dropdown.css" rel="stylesheet" type="text/css" />
  <link href="css/Login-style.css" rel="stylesheet" type="text/css">
  <script src="js/jquery-1.12.1.min.js"></script>
  <script src="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

 <!--For the slide-->
  <link href="css/slide-style.css" rel="stylesheet" type="text/css" media="all" />
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.flexisel.js"></script>


</head>
<body>
<div class="wrapper">
  <div class="left-gap1"><img src="images/spacer.gif" alt="#" border="0"
 height="1" width="6" /></div>
  <div class="main">
  <!--Logo and login signup nav-area-->
 
    <div class="header">
      <div class="nav-area">
      <?php

        if (isset( $_SESSION['sess_user'])){
           include './afterLogin.php';
        }else{
           include './beforLogin.php';
        }  
       ?>
	 <!-- <b><strong> <marquee style="color:blue;allign:center;size:30000000000px">WELL COME</marquee></b></strong>-->
  </div>
        <ul class="nav">
          <li style="border: medium none ;"><a href="index.php">Home</a></li>
         <!--<li><a href="singlereservation.php">Reservation</a></li-->
          <li><a href="location.html">Location</a></li>
          <li><a href="lang.html">Language</a></li>
		   <li><a href="News.php">News</a></li>
		  <li><a href="about_us.php">About Us</a></li>
		 <li><a href="contact_us.php"> Contact Us </a></li>
       
</ul>
      </div>
       <div class="banner-area">
 <!----> <div class="more-reviews">
         <ul id="flexiselDemo2">
           <?php
		 
		 $query=mysql_query("select * from upload ") or die( mysql_error());
							while($row=mysql_fetch_array($query)){
								$image1=$row['image1'];
								$image2=$row['image2'];
								$image3=$row['image3'];
								$image4=$row['image4'];
								
								
							}
							?>
          <li><img src="slide-images/<?php echo $image1; ?>"alt=""/></li>
          <li><img src="slide-images/<?php echo $image2; ?>"/></li>
          <li><img src="slide-images/<?php echo $image3; ?>" alt=""/></li>
          <li><img src="slide-images/<?php echo $image4; ?>"alt=""/></li>
         </ul>
		 
	<div class="mid-right" >
 <h1>Welcome to our website</h1>
        <p class="txt-1"><b><h4 style="margin-left:20px;">This website is intended to the customer to provide information about weekly schedules and to book tickets online inorder to see easly</h4></b></p></br>
        <br />

      <script type="text/javascript">
    $(window).load(function() {
      
      $("#flexiselDemo2").flexisel({
        visibleItems: 4,
        animationSpeed: 10000,
        autoPlay: true,
        autoPlaySpeed: 3000,       
        pauseOnHover: false,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
          portrait: { 
            changePoint:480,
            visibleItems: 2
          }, 
          landscape: { 
            changePoint:640,
            visibleItems: 3
          },
          tablet: { 
            changePoint:768,
            visibleItems: 3
          }
        }
      });
      });
     </script>
    </div>  
      </div>
    </div>
	<div class="left-header">
        <h3>Follow Us</h3>
        </div>
         <div class="widget" >
                        <ul>
                            <li><a href="http://www.facebook.com">Facebook</a></li>
                            <li><a href="http://www.twitter.com">Twitter</a></li>
                        </ul>
                    </div>
      </div>
<!----------------Login Modal---------------->
 <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog" style="width: 390px;">
     <div class="modal-content">
        <div class="modal-header"> 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign In</h4>
        </div>
        <div class="login">
            <form action="Login_modal.php" method="post">
            <input type="hidden" name="urllogin" value="<?php echo $_SERVER['PHP_SELF'];?>"/>
                <label>Username:</label><br/>
                <input type="text" name="username" required="required"/><br/>
                <label>Password:</label><br/>
                <input type="password" name="password" required="required"/><br/>
                <label><a href="#" data-toggle="modal" data-target="#ForgetPassword">Forgot Password</a></label>
             
            </div>
        <div class="modal-footer">
         <input type="submit" name="login" value="Login" class="btn btn-primary" />
          <button type="button" class="btn btn-default" bgcolor="red" data-dismiss="modal">Cancel</button>
             </form>
        </div>
      </div>
    </div>
  </div>
<!---------------------------------------------->
<!----------------------------------------------------->
<div class="modal fade" id="ForgetPassword" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reset Password</h4>
        </div>
        <div class="modal-body">
          <div class="form-box">
          <div class="box-header with-border">
            <h4 class="box-title">Enter Your Email On The Space We Provided</h4><br>
		</div>
          <!-- /.box-header -->
          <div class="box-body">
          <div class="schedule-form">
              <form action="resetPassword.php" method="post">
                  <input type="hidden" name="urlc" value="<?php echo $_SERVER['PHP_SELF'];?>"/>
                 <input type="text" name="email" required="required"/><br/> 
          				 
           </div>
          </div> 
        </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="save" value="Reset" class="btn btn-primary" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </form>
        </div>
      </div>
    </div>
  </div>
<!----------------------------------------------------------->

    <div class="footer">
      <p class="copyright"><center><h4>copy right&copy &nbsp;&nbsp;<?php echo date("Y");?>&nbsp;&nbsp;
	  <a href="http://www.dtu.edu.et">DTU Computer Science Students</a></h4>  </center> </p>
    </div>
  </div>
  <div class="right-gap1"><img src="images/spacer.gif" alt="#" border="0"
 height="1" width="6" /></div>
</div>
</body>
</html>
