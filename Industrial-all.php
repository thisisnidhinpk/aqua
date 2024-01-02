
<!DOCTYPE HTML>
<?php

require_once 'db-config.php'; 
?>
<html>
<head>
<title>Aqualuxy | Theertham Water Purifiers</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />

<script src="custom-scripts/send-productenquiry.js"> </script>
<script src="custom-scripts/industrial-all.js"></script>
<!--etalage-->
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){
				$('#etalage').etalage({
					thumb_image_width: 200,
					thumb_image_height: 300,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});
			});
		</script>
<!-- //etalage-->
</head>
<body>
<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
				<li><a href="mailto:theerthamknr@gmail.com">theerthamknr@gmail.com</a></li>|
					<li>+91 9526 333 770</li>
				</ul>
			</div>
			<div class="top_left">
				<!-- ul>
					<li class="top_link">Email:<a href="mailto:info@aquacaresystem.org">info@aquacaresystem.org</a></li>|
					<li class="top_link">Phone: 1234567890</li>|
				</ul-->
				<div class="social">
					<ul>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="dribble"></i></a></li>	
						<li><a href="#"><i class="google"></i></a></li>										
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="index.html"><img src="images/aqualuxy_logo.png" alt=""/></a>			
		 </div>
		  <div class="clearfix"></div>	
	 </div>
</div>
<!--cart-->
<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li><a class="color1" href="index.php">Home</a></li>
			 <li class="grid"><a class="color2" href="AboutUs.php">About Us</a></li>
			<li class="active grid"><a class="color4" href="#">Products</a>
			<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<!-- <h4>RO</h4> -->
								<ul>
									<li><a href="DomesticRO-all.php">Domestic</a></li>
									<li><a href="Industrial-all.php">Industrial</a></li>
								</ul>
							</div>
						</div>
						<!-- <div class="col1">
							<div class="h_nav">
								<h4>Iron Remover</h4>
								<ul>
									<li><a href="IronRemoverPost.html">Industrial</a></li>
									<li><a href="IronRemoverPre.html">Pre Treatment</a></li>
								</ul>
							</div>
						</div> -->
						<!-- <div class="col1">
							<div class="h_nav">
								<h4>Water Softner</h4>
								<ul>
									<li><a href="WaterSoftnerPost.html">Post Water Softener</a></li>
									<li><a href="WaterSoftnerPre.html">Pre Water Softener</a></li>
								</ul>
							</div>
						</div> -->
						<!-- <div class="col1">
							<div class="h_nav">
								<h4>Plants</h4>
								<ul>
									<li><a href="DMPlant.html">DM Plant</a></li>
									<li><a href="STPPlant.html">STP Plant</a></li>
									<li><a href="ROIndustrialPlant.html">RO Industrial Plant</a></li>
								</ul>
							</div>
						</div> -->
					</div>
					<!-- <div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
					</div> -->
    				</div>
				</li>
			<!-- <li><a class="color4" href="#">Products</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>RO</h4>
								<ul>
									<li><a href="DomesticRO.html">Domestic RO</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Iron Remover</h4>
								<ul>
									<li><a href="IronRemoverPost.html">Post Treatment</a></li>
									<li><a href="IronRemoverPre.html">Pre Treatment</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Water Softner</h4>
								<ul>
									<li><a href="WaterSoftnerPost.html">Post Water Softener</a></li>
									<li><a href="WaterSoftnerPre.html">Pre Water Softener</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Plants</h4>
								<ul>
									<li><a href="DMPlant.html">DM Plant</a></li>
									<li><a href="STPPlant.html">STP Plant</a></li>
									<li><a href="ROIndustrialPlant.html">RO Industrial Plant</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li> -->
				<li ><a class="color5"  href="#" onclick="service_updating()">Services</a></li>
				<li><a class="color7" href="Contact.php">Contact Us</a></li>
			   </ul>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!-- -->
<div class="container">
<!-- Product 1 -->

<?php
		 $result = $conn->query("SELECT * FROM tbl_products where Prod_catagory=2"); 
	?>
			<?php if($result->num_rows > 0){ ?>
			 <?php while($row = $result->fetch_array()){ ?> 
<div class="check" id="">
	<div class="recmnd-head">
	<h3><?php echo $row['Prod_name']; ?></h3>
	</div>
	<div class="single_left">
    
	<!-- <img src="images/ro1.png" /> -->
    <img src="data:image/png;base64,<?php echo base64_encode($row['Prod_img']); ?>" />
	</div>
	<div class="single-right">
	<table class="table">
	<tbody>
	<tr>
	<th>MODEL</th>
	<th><?php echo $row['Prod_name']; ?></th>
	</tr>
    <tr>
	<td>Type</td>
	<td>Industrial</td>
	</tr>
	<tr>
	<td>Color</td>
	<td><?php echo $row['color']; ?></td>
	</tr>
	<tr>
	<td>Filter Stage</td>
	<td><?php echo $row['filter_stage']; ?></td>
	</tr>
	<tr>
	<td>Total Capacity</td>
	<td><?php echo $row['T_capasity']; ?></td>
	</tr>
	<tr>
	<td>Purifying Technology</td>
	<td><?php echo $row['technology']; ?></td>
	</tr>
	<tr>
	<td>Water Flow Rate </td>
	<td><?php echo $row['flow_rate']; ?></td>
	</tr>
	<tr>
	<td>Power Consumption</td>
	<td><?php echo $row['power']; ?></td>
	</tr>
	<tr>
	<td>Warranty Summary</td>
	<td><?php echo $row['warranty']; ?></td>
	</tr>
	<!-- <tr>
	<td>Operating Voltage</td>
	<td>160-300V AC (50 Hz)</td>
	</tr>
	<tr>
	<td>Dimension (mm)</td>
	<td>L 370 W 190 H 480<br></td>
	</tr>
	<tr>
	<td>Net Weight</td>
	<td>7.4kg</td>
	</tr> -->
	<tr>
	<td></td>
	<td><button class="acount-btn" data-prodname="<?php echo $row['Prod_name']; ?>">Send Enquiry</button></td>
	</tr>
	</tbody>
	</table>
	</div>
</div>
<?php }}else{ ?>
    <div class="check" id="">
	<div class="recmnd-head">
	<h3>NA</h3>
	</div>
	<div class="single_left">
    
	<img src="images/no-items.png" />
    
	</div>
	<div class="single-right">
	<table class="table">
	<tbody>
	<tr>
	<th>MODEL</th>
	<th>NA</th>
	</tr>
    <tr>
	<td>Type</td>
	<td>NA</td>
	</tr>
	<tr>
	<td>Color</td>
	<td>NA</td>
	</tr>
	<tr>
	<td>Filter Stage</td>
	<td>NA</td>
	</tr>
	<tr>
	<td>Total Capacity</td>
	<td>NA</td>
	</tr>
	<tr>
	<td>Purifying Technology</td>
	<td>NA</td>
	</tr>
	<tr>
	<td>Water Flow Rate </td>
	<td>NA</td>
	</tr>
	<tr>
	<td>Power Consumption</td>
	<td>NA</td>
	</tr>
	<tr>
	<td>Warranty Summary</td>
	<td>NA</td>
	</tr>
	<!-- <tr>
	<td>Operating Voltage</td>
	<td>160-300V AC (50 Hz)</td>
	</tr>
	<tr>
	<td>Dimension (mm)</td>
	<td>L 370 W 190 H 480<br></td>
	</tr>
	<tr>
	<td>Net Weight</td>
	<td>7.4kg</td>
	</tr> -->
	<tr>
	<td></td>
	<td><button class="acount-btn"   disabled>Send Enquiry</button></td>
	</tr>
	</tbody>
	</table>
	</div>
</div> 
<?php } ?> 
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="form-group modal-content">
    <span class="form-control close" >&times;</span>
    <center><p>Send An Enquiry..</p><br>
	<input type="text" class="form-control" id="txtprodName" readonly>
	<input type="text" class="form-control" placeholder="Name" id="txtName">
	<input type="text" class="form-control" placeholder="Contact Number" id="txtContactnum">
	<input type="text" class="form-control" placeholder="Email id" id="txtEmail">
	<input type="text" class="form-control" placeholder="Address" id="txtAddress">
	<textarea class="form-control" rows="5" id="comment" placeholder="Remarks" id="txtRemark"></textarea><br>
	<button class="form-control acount-btn"  id="btn-send-prodenq" >Send Enquiry</button>
	</center>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");


// Get the button that opens the modal
var btn = document.getElementById("myBtn");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
	<div class="clearfix"></div>
</div>	
</div>
<div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="index.php">Home</a></li>
					 <li><a href="AboutUs.php">Who We Are</a></li>
					 <li><a href="#" onclick="service_updating()">Services</a></li>
					 <li><a href="Contact.php">Contact Us</a></li>
					 <!-- <li><a href="#">Carrers</a></li>					  -->
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Products</h4>
				 <ul>
				 <li><a href="DomesticRO-all.php">Domestic</a></li>
					 <li><a href="Industrial-all.php">Industrial</a></li>
					 <!-- <li><a href="WaterSoftnerPost.html">Water Softner</a></li>
					 <li><a href="DMPlant.html">Plants</a></li> -->
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Social Network</h4>
				 <ul>
					 <li><a href="#">Facebook</a></li>
					 <li><a href="#">Twitter</a></li>
					 <li><a href="#">LinkedIn</a></li>
					 <li><a href="#">Google<sup>+</sup></a></li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Get in Touch</h4>
				 <ul>
				 <li>THEERTHAM WATER PURIFIERS SYSTEMS</li>
					 <li>Nabeesu Building,480,</li>
					 <li>Keecherikunnu,</li>
					 <li>(Via).Keecheri,</li>
					 <li>(PO)Pappinisseri,</li>
					 <li>Kannur - 670 561</li>
					 <li>Kerala-India</li>
					 <li>Phone: +91 9526 333 770</li>
					 <li><a href="mailto:theerthamknr@gmail.com">theerthamknr@gmail.com</a></li>				 
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- shan 1 -->
<div class="footer">
	 <div class="container">
		 <div class="copywrite">
			 <p align="center">Copyright &reg;2020 Aqualuxy | Theertham Water Purifiers Systems All rights reserved<a href="http://www.aqualuxy.com"></a></p>
		 </div>
		 </div>
	 </div>
</div>
<!-- -->
</body>
</html>