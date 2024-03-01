
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Center of competance </title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link  rel="stylesheet" href="css/font.css">


	
</head>
<body bgcolor="#eee">

<div class="header">
    <div class="row">
        <div class="col-lg-6">
            <span class="logo"><img calss="img-circle" style="border-radius: 80%;margin-top: -8px"align="c" width="10%" height="78%" src="image/fekd.PNG"/>FEKEDE EGZI COLLEGE CoC</span></div>
        <div class="col-md-2 col-md-offset-4"></div>
    </div >
</div>
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel">
        <div class="row">
          
            
             </div>
                </div>
                </div>

  <!-- Modal content-->
      <div class="form-group">
        <div class="form-group">
                    <label class="col-md-2 control-label" for="email"></label>
          <div class="col-md-8">
          <h4 class="form-group">Reset Password</h4>
        </div>
        </div>
        </div>
        <div class="form-group">
                    <label class="col-md-2 control-label" for="password"></label>
                    <div class="col-md-8">
                    
            <h4 class="form-group">Enter Your Email </h4><br></div>
		</div>
          <!-- /.box-header -->
          <div class="form-group">
          <div form-group">
              <form action="newreset.php" method="post">
                  <input type="hidden" name="urlc" value="<?php echo $_SERVER['PHP_SELF'];?>"/>
                  <h3 align="left">
                 <input type="text" name="EmailAddress" required="required"/><br/> 
          				 </h3>
           </div>
          </div> 
       
        <div class="form-group">
                    <label class="col-md-2 control-label" for="password"></label>
                    <div class="col-md-8">
          <input type="submit" name="save" value="save" class="btn btn-primary" />
       </div>
              </form>
   

</body>
</html>
