<?php 
error_reporting("E_NOTICE"); 
?>
<?php
include("connection.php");
session_start();
?>
<?php
$user_id=$_SESSION['user_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>DEBRE TABOR CONDOMINUM HOUSE MANAGMENT SYSTEM</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/7.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<script type="text/javascript">
		function check() {
    if(document.getElementById('password').value === document.getElementById('confirm_password').value) {
	 $('#message').html('Matching').css('color', 'green');
    } else {
        $('#message').html('Not Matching').css('color', 'red');
    }
}
function check() {
    if(document.getElementById('UserName').value === document.getElementById('confirm_Username').value) {
	 $('#message').html('Matching').css('color', 'green');
    } else {
        $('#message').html('Not Matching').css('color', 'red');
    }
}
	</script>
	</head>
<body>
<div id="wrapper">
	<div class="shell">
		<div class="container">
			<header id="header">
			<img src="images/p1.png" align="left">
			</header>
				<div class="cl">&nbsp;</div>
			</nav>
				<div class="search">
				</div>
				<div class="cl">&nbsp;</div>
			</nav>
			<div class="main">
				<div class="featured">
				</div>
 		<div class="main">
			<center><h3><b>manage account </h3> <i style="padding-left:55em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</i></a></b></h3></center>
			<nav id="navigation">
				<div class="cl">&nbsp;</div>
			</nav>
		<div class="featured">
		<section class="cols">
					<div class="col">
					</div>
					<div class="col">
						<div class="cl">&nbsp;</div>
						<p><br /></p>
					</div>
					<div class="col">
					</div>
					<div class="col">
				 <br/><br/><div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680"><br/>
				  <h5><font color='#ff6633' style="text-transform:uppercase;font-weight:" face='georgia'>What Do You Want To Do For Your Account?</font></h5>
				&nbsp;<a href="?action=pass"><b>Change Password</b></a><br/>&nbsp;&nbsp;&nbsp;
				<a href="?action=un"><b>Change User Name</b></a><br/><br/>
				</div>
				<?php
					$action=$_REQUEST['action'];
					if ($action=="pass"){
					?>
		<br/><br/><br/>
		<form action="?action=chpass" method="post" name="myform">
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'>
            <tr>
              <td class="td"><h2>Current Password</h2></td>
              <td >&nbsp;</td>
			  <td class="td"><input type="password" name="curpass" id='in' size="30" class="input" required/></td>
			 </tr>
			 <tr>
              <td  class="td"><h2>New Password</h2></td>
              <td >&nbsp;</td>
			  <td class="td"><input type="password"name="newpass" id='password' size="30" required class="input"/></td>
			 </tr>
			 <tr>
              <td  class="td"><h2>Repeat Password</h2></td>
              <td >&nbsp;</td>
			  <td class="td"><input type="password" name="newpass1" id='confirm_password' class="input" size="30" onchange="check()" required/></td>
			  <td id='message'></td>
			 </tr>
			 <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td align="center"><input type="submit" style="height: 35px;width: 130px"name="change" id='send' value="Change"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type='reset' id='clear'style="height: 35px;width: 130px"name="clear" value="Cancel"  /></td>
            </tr>
		  </table></form><br/></div>
				<?php
				}
		else if($action=='chpass'){
	
				$cpass =md5($_POST['curpass']);
				$npass =$_POST['newpass'];
				$npass1 =$_POST['newpass1'];
				$password =md5($_POST['newpass']);
				$result = mysql_query("SELECT * FROM user_type WHERE Password='{$cpass}' AND user_no='{$user_id}' ");
				if(!$result){
				die("query faile".mysql_error());
				}
				if(mysql_num_rows($result)==1){
				if($npass==$npass1){
				$query="update user_type set password='{$password}' where Password='{$cpass}' AND user_no='{$user_id}'";
				$result=mysql_query($query);
				echo '<img src="images/yes.ico"/>&nbsp;! Your password changed successfully';
				echo '<meta content="2;manageAcc.php" http-equiv="refresh" />';

					}
				else{
				echo '<img src="images/no.ico"/> &nbsp;! New password and Repeat password is not much';
				echo '<meta content="2;manageAcc.php?pass" http-equiv="refresh" />';
					}
				}
				else
				{
				echo '<img src="images/no.ico"/>&nbsp;! Current Password is not correct...Please insert the correct password';
				echo '<meta content="3;manageAcc.php?action=pass" http-equiv="refresh" />';
				}
				
				}
			  else if ($action=='un'){
		?><br/><br/><br/>
		<form  method="post" name="myform">
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'>
            <tr>
              <td  class='td'><h2>Current UserName</h2></td>
              <td >&nbsp;</td>
			  <td><input type="text" name="curun" id='in' class="input" size="30" required/></td>
			 </tr>
			 <tr>
              <td  height="24"><h2>New UserName</h2></td>
              <td >&nbsp;</td>
			  <td><input type="text" name="newun" id='in' size="30" class="input" required/></td>
			 </tr>
			  <tr>
              <td  class="td"><h2>Repeat Username</h2></td>
              <td >&nbsp;</td>
			<td class="td"><input type="Username" name="newUsername1" id='confirm_Username' class="input" size="30" onchange="check()" required/></td>
			  <td id='message'></td>
			 </tr>
			 <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
             <td align="center"><input type="submit"style="height: 35px;width: 130px" name="change" id='send' value="Change" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type='reset'style="height: 35px;width: 130px" id='clear'name="clear" value="Cancel"  /></td>
            </tr>
		  </table>
		</form><br/></div>
				<?php
				if (isset($_POST['change']))
			  {
				$cun =$_POST['curun'];
				$nun =$_POST['newun'];
				$neun =$_POST['new_Username'];
				$result = mysql_query("SELECT * FROM user_type WHERE UserName='{$cun}' AND user_no='{$user_id}' ");
				if(!$result){
				die("query faile".mysql_error());
				}
				if(mysql_num_rows($result)==1){
				$query="update user_type set UserName = '{$nun}' where UserName = '{$cun}' AND user_no='{$user_id}'";
				$result=mysql_query($query);
				echo '<img src="images/yes.ico"/>&nbsp! Your UserName changed successfully';
				echo '<meta content="2;manageAcc.php" http-equiv="refresh" />';
			}
				else
				{
				echo '<font color="red" style="padding-left:25em"><h3>Current UserName is not correct!</font>';
				echo '<meta content="2;manageAcc.php?action=un" http-equiv="refresh" />';
				}
				}
				}
					?>
					</div>
					<div class="cl">&nbsp;</div>
				</section>
				</div>
				</div>
			<div class="cl">&nbsp;</div>
			<div id="footer">
				<div class="footer-nav">
					</ul>
					<div class="cl">&nbsp;</div>
				</div>
				  &nbsp;<br>
		  &nbsp;<br>
		  &nbsp;<br>
		<font color="rgb"><center>&copy; Copyright is Reserved,Design By Fourth Year Information Technology  Student In 2011 E.C</center></font>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>