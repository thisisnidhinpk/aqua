
<!DOCTYPE HTML>
<?php
 
$host="localhost";
$serveruname="aqualuxy";
$serverpwd="aqua143!*";
$dbnme="aqualuxy_aquadb2020";

$conn = new mysqli($host, $serveruname, $serverpwd, $dbnme);
if ($conn->connect_error) {
  echo "rng". $conn->connect_error;
}
;
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
  <script src="js/responsiveslides.min.js"></script>

  <!-- <script src="js/jquery-3.5.1.min.js"></script> -->
  <script src="custom-scripts/indexpage-scripts.js"></script>
  <script src="custom-scripts/service-mnu.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
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
						<li><a href="#"><i class="google"></i></a></li>
						<li><a href="#"><i class="dribble"></i></a></li>
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
		 	<!-- <a href="Index.html"><img src="images/logo.jpg" alt=""/></a> -->
		 	<a href="Index.php"><img src="images/aqualuxy_logo.png" alt=""/></a>
		 </div>
		 <div class="header_right">
		 </div>
		  <div class="clearfix"></div>
	 </div>
</div>
<!--cart-->
<!-- Menus -->
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="Index.php">Home</a></li>
			 <li class="grid"><a class="color2" href="AboutUs.php">About Us</a></li>
			 <li><a class="color4" href="#">Products</a>
			 
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
						
						
					</div>
					
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
				<!-- <li><a class="color5" href="Services.html">Services</a></li> -->
				<li ><a class="color5"  href="#" onclick="service_updating()">Services</a></li>
				<li><a class="color7" href="Contact.php">Contact Us</a></li>
			   </ul>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!-- End of the Menus -->
<div class="content">
	 <div class="container">
		 <div class="slider">
				<ul class="rslides" id="slider1">
				  <li><img src="images/banner2.jpg" alt=""></li>
				  <li><img src="images/banner1.jpg" alt=""></li>
				  <li><img src="images/banner3.jpg" alt=""></li>
				</ul>
		 </div>
	 </div>
</div>
<!-- Start -->
<!-- Start 2 col -->
<div class="container">
	 <div class="registration">
		 <div class="registration_left">
			 <div class="recmnd-head"><h3>Welcome to Theertham Water Purifiers !</h3></div>
			 <!-- <p align="justify">We have created niche for ourselves in this highly competitive market. Incorporated in the year 2007 at Chennai-India. Our timely delivery, client centric approach, fair business policies and flexible payment modes have enabled us to gain a topmost position in the industry... -->
			 <p align="justify">We are one of the prominent manufacturers, distributors, suppliers, traders, and service providers of a wide range of Reverse Osmosis Parts, which includes RO Systems, Bracket, Filter Wounds, Housing, Membrane, Pump, and others. Manufactured from top grade material and precision engineered as per the latest technology, these products are in compliance with international standards and best serve the purpose. Besides, customers can avail these products at industry leading prices......
			 <a class="acount-btn" href="AboutUs.html">More</a></p>
		 </div>
		 <div class="registration_left">
			 <div class="recmnd-head"><h3>Why Us?</h3></div>
				 <ul>
				 <li>High Quality</li>
				 <li>Competitive Cost</li>
				 <li>Easy Installation and Low Default</li>
				 <li>Widest Possible Range</li>
				 <li>Widest Possible brand options</li>
				 </ul>
		 </div>
	 </div>
</div>
<!-- End 2 col -->
<!-- Start 3 col -->
<div class="new">
	 <div class="container">
		 <div class="new-products">
		 <div class="new-items">
			 <div class="item1">
				 <div class="item-info2">
					 <h3>Passion</h3>
					 <p align="justify">Easy Installation and Low Default, Widest Possible Range and Widest Possible brand options</p>
				 </div>
			 </div>
		 </div>
		 <div class="new-items new_middle">
			 <div class="item1">			 
				 <div class="item-info2">
					 <h3>Products</h3>
					 <p align="justify">We provide a very wide range of water purification membranes with different brands.</p>
				 </div>
			 </div>
		 </div>		  
		 <div class="new-items new_last">
			 <div class="item1">	
				 <div class="item-info2">
					 <h3>Quality</h3>
					 <p align="justify">High Quality and Competitive Cost with most popular brands.</p>
		 <div class="clearfix"></div>	
				 </div>			 
			 </div>
		 </div>
		 <div class="clearfix"></div>	
		 </div>
	 </div>		 
</div>
<!-- End 3 col -->
<!-- End -->
<div class="recommendation">
	 <div class="container">
		 <div class="recmnd-head">
			 <h3>RECOMMENDATIONS FOR YOU</h3>
		 </div>
<?php
		//  $result = $conn->query("SELECT * FROM tbl_products "); 
		$result = $conn->query("SELECT tbl_products.id,tbl_products.Prod_img,tbl_product_category.category_name,tbl_products.Prod_name FROM tbl_products INNER JOIN tbl_product_category ON tbl_products.Prod_catagory = tbl_product_category.id");
		 
?>
		 <div class="bikes-grids">
		  			 
			 <ul id="flexiselDemo1">
			 <?php if($result->num_rows > 0){ ?>
			 <?php while($row = $result->fetch_assoc()){ ?> 
				<li>
					 <!-- <a href="DomesticRO.html#1"><img src="data:image/jpg;charset=utf8;base64,<?php /* echo base64_encode($row['Prod_img']);*/ ?>" alt="" height=200/></a>	
					 <h4><a href="DomesticRO.html#1">Semi Automatic<br/>10 LPH</a></h4> -->
					 <a ><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Prod_img']); ?>" alt="" height=200/></a>	
					 <h4 id="a1" data-id="<?php echo $row['id']; ?>"><a   ><?php echo $row['Prod_name']; ?><br/><?php echo $row['category_name']; ?></a></h4>
				 </li>
            <!-- <img src="data:image/jpg;charset=utf8;base64,<?php /*echo base64_encode($row['DProduct_img']);*/ ?>" />  -->
        <?php }} ?> 
			
				 <!-- <li>
					 <a href="DomesticRO.html#1"><img src="images/s01.jpg" alt=""/></a>	
					 <h4><a href="DomesticRO.html#1">Semi Automatic<br/>10 LPH</a></h4>
				 </li>
				 <li>
					 <a href="DomesticRO.html#2"><img src="images/s02.jpg" alt=""/></a>	
					 <h4><a href="DomesticRO.html#2">Misty Swan</a></h4>	
				 </li>
				 <li>
					 <a href="DomesticRO.html#3"><img src="images/s03.jpg" alt=""/></a>
					 <h4><a href="DomesticRO.html#3">Aqua Grant</a></h4>	
				 </li>
				 <li>
					 <a href="DomesticRO.html#4"><img src="images/s04.jpg" alt=""/></a>
					 <h4><a href="DomesticRO.html#4">RO Water Purifier<br/>25 Ltr.</a></h4>	
				 </li>
				 <li>
					 <a href="DomesticRO.html#5"><img src="images/s05.png" alt=""/></a>	
					 <h4><a href="DomesticRO.html#5">RO Water Purifier<br/>50 Ltr.</a></h4>	
				 </li>
				 <li>
					 <a href="ROIndustrialPlant.html#1"><img src="images/s06.png" alt=""/></a>	
					 <h4><a href="ROIndustrialPlant.html#1">ACS-Industrial<br/>50 LPH RO</a></h4>	
				 </li> -->
				 <!-- li>
					 <a href="ROIndustrialPlant.html#2"><img src="images/s07.png" alt=""/></a>	
					 <h4><a href="ROIndustrialPlant.html#2">ACS-Industrial<br/>100 LPH RO</a></h4>
				 </li>
				 <li>
					 <a href="ROIndustrialPlant.html#3"><img src="images/s08.png" alt=""/></a>	
					 <h4><a href="ROIndustrialPlant.html#3">ACS-Industrial<br/>250 LPH RO</a></h4>
				 </li>
				 <li>
					 <a href="ROIndustrialPlant.html#4"><img src="images/s09.png" alt=""/></a>	
					 <h4><a href="ROIndustrialPlant.html#4">ACS-Industrial<br/>500 LPH RO</a></h4>	
				 </li>
				 <li>
					 <a href="ROIndustrialPlant.html#5"><img src="images/s10.png" alt=""/></a>	
					 <h4><a href="ROIndustrialPlant.html#5">ACS-Industrial<br/>1000 LPH RO</a></h4>	
				 </li -->
		    </ul>
		
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
	 </div>
	 </div>

	 
</div>
<!-- shan -->

 <div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="Index.php">Home</a></li>
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