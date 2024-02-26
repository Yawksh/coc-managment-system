<?php
?>

<title>Center of Competence </title>
>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link  rel="stylesheet" href="css/font.css">
<link type="text/css" rel="stylesheet" href="index.css"/>
<link rel="shortcut icon" href="img/fekd.PNG" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<script src="css/ac_activex.js" type="text/javascript"></script>
<script src="js/valid.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.js"></script>

</script>
	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	<script type='text/javascript' SRC="js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			if ($('#slides').length > 0) {
				$('#slides').cycle({ 
					fx: 'fade',
					speed: 750,
					timeout: 6000, 
					randomizeEffects: false, 
					pager:  '#slidepager',
					cleartypeNoBg: true
				});
			}
		});
	</script>
	<link rel="shortcut icon" href="su.jpg" />
</head>
<style type='text/css'>
#body-bg
{
}
.error
{
	color:red;
}
.success
{
	color:#eee;
	font-weight:bold;	
}
.box
{   width:300px;
	border:1px solid gray;
	padding:20px;
	border-radius:5px;
	box-shadow:3px 3px 3px red;
	background-color:#eee;
}
	

#div_text{
	width:350px;

	display:inline-block;
	margin:10px;

	font-family:Times New Roman;
	font-size:20px;
}
#div_teext{
	width:450px;
	display:inline-block;
	margin:10px;
	font-family:Times New Roman;
	font-size:20px;
	margin-top:20px;
}

</style>
<body style="background-color:#eee;">
<div class="header">
    <div class="row">
        <div class="col-lg-6">
            <span class="logo"><img calss="img-circle" style="border-radius: 80%;margin-top: -8px"align="c" width="10%" height="78%" src="image/fekd.PNG"/>FEKEDE EGZI COLLEGE CoC</span></div>
        <div class="col-md-2 col-md-offset-4"></div>
    </div >
</div>
<div id="wrapper" width="1000">
<div class='container'>
<header>
   <?php
          session_start();
            if(isset($_SESSION["error"])){
                ?>
                <div id="alert_danger" class="alert alert-danger">
                    <span style="color: yellow;" class="glyphicon glyphicon-warning-sign"></span> &nbsp; <?php echo $_SESSION["error_msg"];?><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
                <?php
                unset($_SESSION["error"]);
                unset($_SESSION["error_msg"]);
            }

            ?>
<div>

</div>
</header></div>
<div class='col-lg-6'>
<section>
<div id='cssmenu' width="1800">
<ul>
   <li class='active'><a href=''>&nbsp;&nbsp;&nbsp;&nbsp;Home</span></a></li>
   <li class='active'>
   <li class='last'><a href='contactt.php'><span>Contact us</span></a></li>
    <li class='active'>
   <li class='last'><a href='index.php'><span></span></a></li>
  
   <li class='last'><a href='index.php'><span></span></a>
   
   </li>
      <li class='last'><a href='index1.php'>Login</a>
   </li>
 <ul/>   
</div></section></div>
<div class='container' style='width:1000;border-radius:10px;background-color:#red;
padding-bottom:1px;
margin-top:20px;margin-bottom:20px;height:auto;'>
 
<div class='jumsbotron' style='margin-top:50px; padding-top:20px; padding-bottom:10px;' width="1000">
		<div id="ja-mainbody" bgcolor="black" width="1000">
		<div id="ja-contentwrap" width="1000"> 
		<div align="center" width="1000">
      <div class="moduletable" width="1000">
	  <table width="1000" border="0" cellpadding="0" cellspacing="0">
	  <div id="right" width="1000">
	  <div class="container_16 clearfix" width="1000">
<center><img src="image/home.PNG" width="1050" height="400" style="border-radius:30px;
box-shadow:5px 5px 5px 5px red;"/></center>
		</div>	
</div>			
</table> 
		</div>
		 </div> 
		</div>
</div>
 <!--
		 <aside>
    <div class="widget">
    <marquee><h4 style="font-family:Edwardian Script ITC;font-size:45px;"><b>Use Links To Follow DT University</b> </h2></marquee>
	<div class="inner">
   <a href="https://www.facebook.com/DebreTabor-University-1413425935352664/">
						<img src="images/facebook.png"width="100"></a>
						 <a href="#"><img src="images/fax.jpg"width="150"></a>
						 <a href="#"><img src="images/g.png"></a>
						 <a href="#"><img src="images/telephone.jpg"width="150"></a>
						 <a href="#"><img src="images/q.jpg"width="150"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 <a href="http://www.youtube.com/"><img src="images/youtube.png"></a>
	</div>
	 
	</div>
	</aside> 
-->
		 </div>
		 </div>

		 </div>
</body>
