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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
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
					<img src="images/cart1.png" alt=""/></h3>
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
			<li><a class="color1" href="#">catalog</a>
				
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
				<script src="js/responsiveslides.min.js"></script>
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
<!---->
<!-- single-page -->
<div class="single">
<div class="container">
 <?php 
 				
				$koneksi= new mysqli("localhost", "agnessimarmata", "agnes1998", "pendent");
				$id=$_GET['id'];
				$select="SELECT * FROM produk where ID='$id'";
				$hasil=$koneksi->query($select);
				while ($row=$hasil->fetch_assoc()):
					?>
	<div class="single-page">					 
		<div class="flexslider details-lft-inf">
			<img src="images/<?php echo $row['Gambar']; ?>" class="img-responsive2" >
		</div>
        
			<!-- FlexSlider -->
			  <script defer src="js/jquery.flexslider.js"></script>
			<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

				
		<div class="details-left-info">
			<h3><?php echo $row['Nama'];?></h3>
				
			<div class="simpleCart_shelfItem">
				<p><span class="item_price qwe"><?php echo $row['Harga'];?></span> <a href="#">Click for offer</a></p>
				<div class="col-rad">
					<div class="col-rad-left">
						<select class="arrival">
							<option>Color</option>
							<option>Green</option>
							<option>Violet</option>
							<option>Pink</option>
						</select>
					</div>
					<div class="col-rad-right">
						<section>
							<div class="row">
								<div class="colr ert">
									<label class="radio"><input type="radio" name="radio" checked=""><i></i>14Kt</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="radio"><i></i>10Kt</label>
								</div>
							</div>						
						</section>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-rad tyy">
					<div class="col-rad-left">
						<p>Diamond</p>
					</div>
					<div class="col-rad-right">
						<section>
							<div class="row">
								<div class="colr ert">
									<label class="radio"><input type="radio" name="radio1" checked=""><i></i>SI GH</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="radio1"><i></i>VS GH</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="radio1"><i></i>VVS EF</label>
								</div>
							</div>						
						</section>
					</div>
					<div class="clearfix"> </div>
				</div>
				<p class="qty">Qty ::</p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
				<div class="single-but item_add">
					<input type="submit" value="add to cart">
				</div>
			</div>
			<div class="flower-type">
			
			
			</div>
			
		</div>
		<div class="clearfix"></div>				 	
	</div>
	
<!-- collapse -->
<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Description
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       <?php echo $row['Deskripsi'];?>
      </div>
    </div>
  </div>
</div>
<?php endwhile;?>
<!-- collapse -->
<!-- related products -->
	<div class="related-products">
		<h3>Related Products</h3>
		<div class="col-md-4 related products-grid">
			<img src="images/19.jpg" alt=" " class="img-responsive" />
			<div class="simpleCart_shelfItem rel">
				<p><span class="overline">$ 1000</span> <span class="item_price val">$ 729</span></p>
				<div class="single-but item_add">
					<input type="submit" value="add to cart">
				</div>
			</div>
		</div>
		<div class="col-md-4 related products-grid">
			<img src="images/18.jpg" alt=" " class="img-responsive" />
			<div class="simpleCart_shelfItem rel">
				<p><span class="overline">$ 1000</span> <span class="item_price val">$ 729</span></p>
				<div class="single-but item_add">
					<input type="submit" value="add to cart">
				</div>
			</div>
		</div>
		<div class="col-md-4 related products-grid">
			<img src="images/20.jpg" alt=" " class="img-responsive" />
			<div class="simpleCart_shelfItem rel">
				<p><span class="overline">$ 1000</span> <span class="item_price val">$ 729</span></p>
				<div class="single-but item_add">
					<input type="submit" value="add to cart">
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //related products -->
</div>
</div>
<!-- single -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-grid">
				<h6>About us</h6>
				<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
			</div>
			<div class="col-md-3 footer-grid">
				<h6>Information</h6>
				<ul>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Delivery Information</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms &amp; Conditions</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grid">
				<h6>My Account</h6>
				<ul>
					<li><a href="login.html">My Account</a></li>
					<li><a href="#">Order History</a></li>
					<li><a href="#">Wish List</a></li>
					<li><a href="#">Newsletter</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grid">
				<h6>Extras</h6>
				<ul>
					<li><a href="#">Brands</a></li>
					<li><a href="#">Gift Vouchers</a></li>
					<li><a href="#">Affiliates</a></li>
					<li><a href="#">Specials</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="footer-copy">
		<p>© 2015 Pendent Store. All rights reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>