



<!DOCTYPE html>
<html lang="en">
    

<head>
        <title>Aqualuxy | Theertham Water Purifiers</title> 
        <link rel="icon" type="image/png" href="../img/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="../img/favicon/favicon-16x16.png" sizes="16x16">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body style="background: url(images/bg1.jpg) no-repeat; background-size: 100% 100%; ">
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" method="post" action="framework.php">
                <input type="hidden" name="action_type" id="action_type" value="MASTER_LOGIN">
				 <div class="control-group normal_text"> 
                    <img src="logo.png" style=""> 
                    <!-- <h3> CLOUD <span style="color: #81b140;"> HRMS </span></h3> -->
                    <h3>  <span style="color: #fbfdf8;"> LOGIN </span></h3>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg_blue"><i class="icon-user"></i></span>
                            <input type="text" placeholder="Username" name="userN" required="" style="margin-left: -4px;" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg_blue"><i class="icon-lock"></i></span>
                            <input type="password" placeholder="Password" name="passW" required="" style="margin-left: -4px;" />
                        </div>
                    </div>
                </div>
                <?php if(isset($_GET['e0'])){ ?>
                <div style="text-align: center;"> <span style="color: #e8440d; font-style: italic;"> Invalid username or password  </span></div>
            <?php } if(isset($_GET['eR'])){ ?>
                <div style="text-align: center;"> <span style="color: #e8440d; font-style: italic;"> Invalid Email ID  </span></div>
            <?php } if(isset($_GET['eS'])){ ?>
                <div style="text-align: center;"> <span style="color: #FFF; font-style: italic;"> Send a mail to your mail id for update password  </span></div>
            <?php } ?> 
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover" style="display: none;">Lost password?</a></span>
                    <span class="pull-right" style="margin-right: 10%;"><input type="submit" name="login" class="btn btn-success-blue" value="Login" /> </span>
                </div>
            </form>
            <form id="recoverform" action="framework.php" class="form-vertical" method="post">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" name="email" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-info" name="recover" value="Recover" /></span>
                </div>
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>



</html>
