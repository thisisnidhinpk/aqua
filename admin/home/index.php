
<?php 
  session_start();
  include "../config.php";
  $user = $_SESSION['user'];
  if($user==''){
    header('location:logout.php');
  }
?>




<!DOCTYPE html>
<html>
<head>
    <!-- Google Analytics -->
    
    
    <!-- End Google Analytics -->

    <meta charset="utf-8">
    <title>Aqualuxy | Theertham Water Purifiers</title> 
    <link rel="icon" type="image/png" href="../../img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../../img/favicon/favicon-16x16.png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="themecss/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="themecss/ionicons.min.css" rel="stylesheet">
    <link href="bower_components/material-design-icons/iconfont/material-icons.css" rel="stylesheet">



    <script type="text/javascript" src="js/jquery2.0.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>

    <script src="themejs/bootstrap.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/base64.js"></script>


    <!-- <script src="js/bootstrap-datepicker.js"></script> -->
   <!--  <script src="js/datepicker.js"></script> -->
    <script src="js/jquery.timepicker.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/select2/select2.min.js"></script>
    <script src="js/bootstrap-colorpicker.min.js"></script>

    <!--fullcaledar-->

    <link href="js/fullcaledar/fullcalendar.css" rel="stylesheet">
    <link href="js/fullcaledar/fullcalendar.print.css" rel="stylesheet" media="print">
    <script src="js/fullcaledar/lib/moment.min.js"></script>
    <script src="js/fullcaledar/fullcalendar.min.js"></script>

    <script src="js/clipboard.js"></script>

    <link href="themecss/datatables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/jquery.timepicker.css" rel="stylesheet">
    <link href="datep/datepicker.css" rel="stylesheet">
    <link href="http://apps.gamonoid.com/icehrm-open-core/web/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/select2/select2.css" rel="stylesheet">
    <link href="http://apps.gamonoid.com/icehrm-open-core/web/js/bootstrap-colorpicker-2.1.1/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="http://apps.gamonoid.com/icehrm-open-core/web/bower_components/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <link href="css/AdminLTE.css" rel="stylesheet">

    <!-- <script src="http://apps.gamonoid.com/icehrm-open-core/web/themejs/plugins/datatables/jquery.dataTables.js?v=23.0.0.OS"></script>
    <script src="http://apps.gamonoid.com/icehrm-open-core/web/themejs/plugins/datatables/dataTables.bootstrap.js?v=23.0.0.OS"></script> -->
    <script src="http://apps.gamonoid.com/icehrm-open-core/web/themejs/AdminLTE/app.js?v=23.0.0.OS"></script>


    <link href="css/style.css" rel="stylesheet">

    
<style type="text/css"> 
::-webkit-scrollbar {   width: 7px; }
::-webkit-scrollbar-track {  background: #f1f1f1;}
::-webkit-scrollbar-thumb {  background: #888;  border-radius:15px;}
::-webkit-scrollbar-thumb:hover {  background: #555; }

</style>
    


</head>
<body class="skin-blue" data-turbolinks="false">
<header id="delegationDiv" class="header" style="background: #55a7e0 !important;">
    <a href="#" class="logo" style="overflow: hidden;font-family: 'Source Sans Pro', sans-serif;background: #fff !important; border-bottom: 2px solid #4998cf;">
        <img src="../logo.png" style="width: 152px;"> 
        Theertham   </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation" style="background: #4998cf !important;">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="logo logoResponsive" style="background: #4998cf !important;">
            Theertham Water Solutions        </div>
        <div class="navbar-right" >
            <ul class="nav navbar-nav">

<li class="dropdown user user-menu" >
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-user"></i>
        <span>Admin <i class="caret"></i></span>
    </a>
    <ul class="dropdown-menu" >
        <!-- User image -->
        <li class="user-header bg-light-pink" style="background: #4998cf !important;">
            <img src="images/user_male.png" class="img-circle" alt="User Image" />
            <p>
                Admin

            </p>
        </li>
       
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="./" class="btn btn-default btn-flat">Profile</a>
                <a href="" data-toggle="modal" data-target="#passwordchangeModal" class="btn btn-default btn-flat"><i class="fa fa-key"></i></a>
            </div>
            <div class="pull-right">
                <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>
</li><li class="dropdown messages-menu" style="display: none;">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-chevron-down"></i>
        <span></span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="#" onclick="modJs.showMessage('About','<p>Theertham Water Solutions<br/>Version 23.0.0.OS<br/>Release Date: 21/05/2019</p>')"><h5>About</h5></a>
        </li>
    </ul>
</li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left" >
    <div id="iceloader" style="
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 9999;
    background: rgba(0, 0, 0, 0);
    background-image: url('images/icehrm-loader.gif');
    background-repeat: no-repeat;
    background-position: center;display:none;"></div>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas" style="padding-top: 3%;">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
    <div class="pull-left image">
        <img src="images/user_male.png" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-left info">
        <p>Admin</p>

        <a href="#"><i class="fa fa-circle text-success"></i> Logged In</a>
    </div>
</div>

<ul class="sidebar-menu" style="">
    <li class="" ref="admin_Employees">
        <a  href="./">
                    <i class="fa fa-desktop"></i> Dashboard 
                </a>
        
    </li>
     <li  class="treeview" ref="admin_Admin_Reports">
        <a href="#">
           <i class="fa fa-product-hunt" aria-hidden="true"></i> <span>Products</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu" id="admin_Admin_Reports">
             <li>
                <a data-turbolinks="true" href="?p=category">
                    <i class="fa fa-file-o"></i> Category                                        
                </a>
            </li>
            <li>
                <a data-turbolinks="true" href="?p=products">
                    <i class="fa fa-file-o"></i> Products                                        
                </a>
            </li>
        </ul>
    </li>
    <li  class="" ref="admin_Employees">
        <a href="?p=banner">
            <i class="fa fa-slideshare" aria-hidden="true"></i> <span>Banner</span>
            
        </a>
       
    </li>
     <li  class="" ref="admin_Employees">
        <a href="?p=faqs">
           <i class="fa fa-question-circle" aria-hidden="true"></i><span>FAQ</span>
            
        </a>
       
    </li>
     <li  class="" ref="admin_Employees">
        <a href="?p=videos">
            <i class="fa fa-file-video-o" aria-hidden="true"></i> <span>Videos</span>
            
        </a>
       
    </li>
   
</ul>
</section>
        <!-- /.sidebar -->
</aside>








    <!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->



<?php 
    if(isset($_GET['p'])){
         if($_GET['p']=="videos") {
            include "videos.php";
        }
        elseif($_GET['p']=="category") {
            include "categories.php";
        }
        elseif ($_GET['p']=='products') {
                        include "products.php";
                    }
        elseif ($_GET['p']=='banner') {
                        include "banner.php";
                    }
        elseif ($_GET['p']=='faqs') {
                        include "faqs.php";
                    }
        else if($_GET['p']=='deleteData')
                    {
                        include "deleteData.php";
                    }
        else if($_GET['p']=="framework")
        {
            include "../framework.php";
        }





        
    }else {
        
?>


    <section class="content-header" style="background: #7cc6f9 !important;">
        <h1> Dashboard     <small>  Admin&nbsp;&nbsp;  </small> </h1>


    </section>
    <!-- Main content -->
    <section class="content">

<script type="text/javascript" src="js/dashboard/lib.js"></script><div class="span9">
    <div class="row">
        
        
        <div class="col-lg-3 col-xs-12">

    <div class="small-box bg-bg1">
        <div class="inner">
            <h3>
                Products
            </h3>
            <p id="numberOfEmployees">

            <?php 
            include "../config.php";
            global  $abs_path; 
            $strSQL = "SELECT COUNT(*) as count FROM `tbl_products` WHERE status = 0";
            $strRes = mysql_query($strSQL);
            $row = mysql_fetch_assoc($strRes);

            echo $row['count'];
            ?>
                 Products
            </p>
        </div>
        <div class="icon">
            <i class="fa fa-users"></i>
        </div>

        <a href="?p=products" class="small-box-footer" id="employeeLink">
            Manage Products <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
<div class="col-lg-3 col-xs-12">
    <div class="small-box bg-bg2">
        <div class="inner">
            <h3>Banner</h3>
            <p>&nbsp; </p>
        </div>
        <div class="icon">  <i class="fa fa-file-text"></i>  </div>
        <a href="?p=banner" class="small-box-footer" id="reportsLink">
            Manage Banner <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
<div class="col-lg-3 col-xs-12">
    <div class="small-box bg-bg3">
        <div class="inner">
            <h3>Videos</h3>
            <p>&nbsp; </p>
        </div>
        <div class="icon">  <i class="fa fa-file-text"></i>  </div>
        <a href="?p=videos" class="small-box-footer" id="reportsLink">
             Manage Videos <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>









</div>


</div>
<script>
    var modJsList = new Array();

    modJsList['tabDashboard'] = new DashboardAdapter('Dashboard','Dashboard');

    var modJs = modJsList['tabDashboard'];

</script>
</section><!-- /.content -->

<?php } ?>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
		<script type="text/javascript">
            
		$(document).ready(function() {
			$('.datepicker').datepicker({
                dateFormat: "dd-mm-yy"
            });
            $('.datepicker2').datepicker({
                dateFormat: "dd-mm-yy"
            });
			
		});

function checkPassword()
        {
            var cPassword=$("#cPassword").val();
            var ccPassword=$("#ccPassword").val();
            if(cPassword==ccPassword)
            {
                $("#changePasswordBtn").show();
            }
            else
            {
                $("#changePasswordBtn").hide();
            }
        }
        function changePassword()
        {
            var cPassword=$("#cPassword").val();
            var ccPassword=$("#ccPassword").val();
            $.ajax({
                url: "changePassword.php",
                data: {'action':'changePassword','password':cPassword},            
                type: "POST",
                success: function (data) {
                    if(data=="success")
                    {
                        $("#passwordchangeModal").modal('hide');
                         $("#PasswordmessageModel").modal('show');
                         alert("Password Changed Successfully");
                    }
                    else
                    {
                        $("#passwordchangeModal").modal('hide');
                         $("#PasswordmessageModel").modal('hide');
                        $("#PasswordmessagefailureModel").modal('show');
                        alert("Something went Wrong!");
                    }
                    }
                
            });
        }
        
         


	</script>
	<!-- Delete Modal -->
<div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="deleteModelLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="fa fa-times"/></button>
				<h3 id="deleteModelLabel" style="font-size: 17px;"></h3>
			</div>
			<div class="modal-body">
				<p id="deleteModelBody"></p>
			</div>
			<div class="modal-footer">
				<button class="btn" onclick="modJs.cancelDelete();">Cancel</button>
				<button class="btn btn-primary" onclick="modJs.confirmDelete();">Delete</button>
			</div>
		</div>
	</div>
</div>
<!-- Delete Modal -->
<div class="modal fade" id="passwordchangeModal" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="fa fa-times"/></button>
                <h3 id="yesnoModelLabel" style="font-size: 17px;">Change Password</h3>
            </div>
            <div class="modal-body">
                <p id="yesnoModelBody">Password <input type="password" name="cPassword" id="cPassword" class="form-control" placeholder="Password" onchange="checkPassword();"></p>
                <p id="yesnoModelBody">Confirm Password <input type="password" name="ccPassword" id="ccPassword" class="form-control" placeholder="Reenter Password" onchange="checkPassword();"></p>
            </div>
            <div class="modal-footer">
                <button  data-dismiss="modal" class="btn" >Cancel</button>
                <button id="changePasswordBtn" class="btn btn-primary" onclick="changePassword();"  style="display: none;" >Change</button>
            </div>
        </div>
    </div>
</div> 

<!-- Message Modal -->
<div class="modal fade" id="messageModel" tabindex="-1" role="dialog" aria-labelledby="messageModelLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="fa fa-times"/></button>
				<h3 id="messageModelLabel" style="font-size: 17px;"></h3>
			</div>
			<div class="modal-body">
				<p id="messageModelBody"></p>
			</div>
			<div class="modal-footer">
				<button class="btn" onclick="modJs.closeMessage();">Ok</button>
			</div>
		</div>
	</div>
</div>
<!-- Message Modal -->

<!-- Plain Message Modal -->
<div class="modal fade" id="plainMessageModel" tabindex="-1" role="dialog" aria-labelledby="plainMessageModelLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom:none;/*background-color: #3c8dbc;*/">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-top:-10px;"><li class="fa fa-times"/></button>
			</div>
			<div class="modal-body">
				<p id="plainMessageModelBody"></p>
			</div>
		</div>
	</div>
</div>
<!-- Plain Message Modal -->

<!-- Data Message Modal -->
<div class="modal fade" id="dataMessageModel" tabindex="-1" role="dialog" aria-labelledby="dataMessageModelLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom:none;/*background-color: #3c8dbc;*/">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-top:-10px;"><li class="fa fa-times"/></button>
			</div>
			<div class="modal-body">
				<p id="dataMessageModelBody"></p>
			</div>
		</div>
	</div>
</div>
<!-- Data Message Modal -->

<!-- Yes No Modal -->
<div class="modal fade" id="yesnoModel" tabindex="-1" role="dialog" aria-labelledby="yesnoModelLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="fa fa-times"/></button>
				<h3 id="yesnoModelLabel" style="font-size: 17px;"></h3>
			</div>
			<div class="modal-body">
				<p id="yesnoModelBody"></p>
			</div>
			<div class="modal-footer">
				<button id="yesnoModelNoBtn" class="btn" onclick="modJs.cancelYesno();">No</button>
				<button id="yesnoModelYesBtn" class="btn btn-primary">Yes</button>
			</div>
		</div>
	</div>
</div>
<!-- Yes No Modal -->

<!-- Upload Modal -->
<div class="modal fade" id="uploadModel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="fa fa-times"/></button>
				<h3 id="uploadModelLabel" style="font-size: 17px;"></h3>
			</div>
			<div class="modal-body">
				<p id="uploadModelBody"></p>
			</div>
			<div class="modal-footer">
				<button class="btn" onclick="$('#uploadModel').modal('hide');">Cancel</button>
			</div>
		</div>
	</div>
</div>
<!-- Upload Modal -->


<!-- Message Modal -->


	


	    </body>
</html>
