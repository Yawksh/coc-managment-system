<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Center of Competence </title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <?php if(@$_GET['w'])
    {echo'<script>alert("'.@$_GET['w'].'");</script>';}
    ?>
    <script>
        function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
            var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
    </script>

</head>

<body>
<div class="header">
    <div class="row">
        <div class="col-lg-6">
            <span class="logo"><img calss="img-circle" style="border-radius: 80%;margin-top: -8px"align="c" width="10%" height="18%" src="image/fekd.PNG"/>FEKEDE EGZI COLLEGE CoC</span></div>
        <div class="col-md-2 col-md-offset-4"></div>
    </div >
</div>

<div class="col-sm-offset-3 col-sm-6">
    <div class="panel">
        <div class="row">
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
        </div>
        <form class="form-horizontal" action="login/login.php" method="POST">
            <fieldset>
                <h3 style="background: #005cc2;text-align: center;padding: 6px;font-family: Georgia;color: #eeeeee"><span >Login</span></h3>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="email"></label>
                    <div class="col-md-8">
                        <input id="uname" name="uname" placeholder="Enter your username" class="form-control input-md" type="text">
                    </div>
                </div>
                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="password"></label>
                    <div class="col-md-8">
                        <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-8">
                        <select required class="form-control" name="accout_type">
                            <option value="">Account type</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Director">Director</option>
                            <option value="Department">Exam evaluator</option>
                            <option value="Instructor">Exam Preparation</option>
                            <option value="Student">Student</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-8">
                        <button type="submit" name="login" class="btn btn-primary">Log in</button>
                        <a href="forgotepass.php">forgetpssword</a>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>



<div class="bg1">
    <div class="row">


    </div>
</div><!--container end-->

<div class="modal fade title1" id="developers">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="false">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
            </div>

            <div class="modal-body">
                <p>
                <div class="row">
                    <div class="col-md-4">
                        <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
                    </div>
                    <div class="col-md-5">
                        <a href="http://yugeshverma.blogspot.in" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Yugesh Verma</a>
                        <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9165063741</h4>
                        <h4 style="font-family:'typo' ">vermayugesh323@gmail.com</h4>
                        <h4 style="font-family:'typo' "></h4></div></div>
                </p>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal For Developers-->
<div class="modal fade title1" id="contact_us">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="false">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Contact us</span></h4>
            </div>

            <div class="modal-body">
                <p>
                <div class="row">
<!--                    <div class="col-md-4">-->
<!--                        <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">-->
<!--                    </div>-->
                    <div class="col-md-5">
                        <a href="http://yugeshverma.blogspot.in" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Yugesh Verma</a>
                        <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9165063741</h4>
                        <h4 style="font-family:'typo' ">vermayugesh323@gmail.com</h4>
                        <h4 style="font-family:'typo' ">Chhattishgarh insitute of management & Technology ,bhilai</h4></div></div>
                </p>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>




<!--Modal for admin login-->
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="false">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
            </div>
            <div class="modal-body title1">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form role="form" method="post" action="login/login.php">
                            <div class="form-group">
                                <input required type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <input required type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
                            </div>
                            <div class="form-group" align="center">
                                <input type="submit" name="login" value="Login" class="btn btn-primary" />
                            </div>
                        </form>
                    </div><div class="col-md-3"></div></div>
            </div>
            <!--<div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>-->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
