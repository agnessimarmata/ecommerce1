<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Jewellery Store</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pendent Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="move-top.js"></script>
<script type="text/javascript" src="easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- start menu -->
<link href="megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="menu_jquery.js"></script>
<script src="simpleCart.min.js"> </script>
<link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	
<!-- //header -->
<!-- top-header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="contact.html">Kontak</a></li>|
					<li><a href="login.html">Pesanan</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto:info@example.com">info@example.com</a></li>|					
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- top-header -->
<!-- logo-cart -->
<div class="header_top">
	<div class="container">
		<div class="logo">
		 	<a href="index.html">Jewelry Store</a>			 
		</div>
		<div class="header_right">
			<div class="cart box_1">
				<a href="checkout.html">
				<h3> <div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
					<img src="cart1.png" alt=""/></h3>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
				<div class="clearfix"> </div>
			</div>				 
		</div>
		<div class="clearfix"></div>	
	</div>
</div>
<!-- //logo-cart -->
<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.html">Home</a></li>
			<li class="grid"><a class="color1" href="#">jewelry</a>
				
			</li>
				
            <li><a class="color1" href="#">Log In</a>
				
			</li>			
            <li><a class="color1" href="#">About</a>
				
			</li>		
		</ul> 
			<div class="search">
				 <form>
					<input type="text" value="" placeholder="Search...">
					<input type="submit" value="">
					</form>
			</div>
			<div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!---->
<!-- banner -->
	<div class="banner">
		<div class="container">
<!-- Slider-starts-Here -->
				<script src="responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					
					
					
				</ul>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- cate -->
	<div class="cate">
		<div class="container">
			<div class="cate-left">
				<h3>Katalog</h3>
			</div>
			<div class="cate-right">
				<!-- slider -->
				<ul id="flexiselDemo1">			
					<li>
						<div class="sliderfig-grid">
							<img src="a.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="sliderfig-grid">
							<img src="b.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="sliderfig-grid">
							<img src="c.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="sliderfig-grid">
							<img src="d.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
                    <li>
						<div class="sliderfig-grid">
							<img src="6-.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
                    <li>
						<div class="sliderfig-grid">
							<img src="7-.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
                    <li>
						<div class="sliderfig-grid">
							<img src="5-.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
                    <li>
						<div class="sliderfig-grid">
							<img src="9.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
                    <li>
						<div class="sliderfig-grid">
							<img src="9-.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
					</ul>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 500,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 3
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:4
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="jquery.flexisel.js"></script>
			</div>
<!-- //slider -->
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //cate -->
<!-- cate-bottom -->
	<div class="cate-bottom">
		<div class="container">
			
			</div>
		</div>
	</div>
<!-- //cate-bottom -->
<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="welcome-info">
				<h3>Welcome To My Store!</h3>
				<div class="buy wel">
					<a href="single.html">Read More</a>
				</div>
			</div>
		</div>
	</div>
<!-- //welcome -->
<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="container">
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 banner-bottom1-grid">
					<div class="banner-bottom1-grid1">
						<img src="6.jpg" alt=" " class="img-responsive" />
						<div class="head-para">
							<h3>Kamyen jewellery</h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom1-grid">
					<div class="banner-bottom1-grid1">
						<img src="5.jpg" alt=" " class="img-responsive" />
						<div class="head-para">
							<h3>Alloy Diamante Floral </h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom1-grid">
					<div class="banner-bottom1-grid1">
						<img src="7.jpg" alt=" " class="img-responsive" />
						<div class="head-para">
							<h3>Crystal Zinc Alloy</h3>
							
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom1 -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
        <div class="kata">
        <p>Catalog</p>
        </div>
        <?php 
				$koneksi= new mysqli("localhost", "agnessimarmata", "agnes1998", "pendent");
				$select="SELECT * FROM produk";
				$hasil=$koneksi->query($select);
				while ($row=$hasil->fetch_assoc()):
					?>
			<div class="product-one">
				<div class="col-md-2 product-left"> 
					<div class="p-one simpleCart_shelfItem jwe">							
							<a href="single.php?id= <?php echo $row['ID'];?>">
								<img src="<?php echo $row['Gambar'];?>" alt="" class="img-responsive1" />
								<div class="mask">
									<span>DETAIL</span>
								</div>
							</a>
                            
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $row['Harga'];?></span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
                <?php endwhile;?>
				

<!-- //footer -->
</body>
</html>
