
<!DOCTYPE html>
<html>
<?php 
require_once '1.connection.php';
//query to select data from category table
$sql = "SELECT * FROM xces ORDER BY id desc";
//execute query and get result object
$result = $connection->query($sql);
$data = [];


if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		array_push($data, $row);
	}
}

?>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">


	<script src="https://kit.fontawesome.com/13830254b4.js" crossorigin="anonymous"></script>



	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./css/swiper.min.css">
	<link href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css">
	<!-- <link rel="stylesheet" href="./assets/produ"> -->
	<link href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>
	<div class="headerSection">
		<div class="container-fluid">
			<div class="top">

				<nav class="navbar navbar-expand-lg">
					<a href="index1.php"><div class="logo"><img src="./assets/logo22.png"></div></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></span>
					</button>
				  
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					  <ul class="navbar-nav">
						<li class="nav-item"><a class="nav-item nav-link active text-uppercase" a
							href="index1.php">Home</a></li>
						
						<li class="nav-item dropdown">
						  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							PRODUCT
						  </a>
						  <?php 
								foreach($data as $key => $value){}
		
								?>
						  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<ul>
								<li class="dropdown-item"><a
										class="nav-item nav-link active text-uppercase"
										href="artandcraft.php">Arts
										and craft</a></li>
								<li class="dropdown-item"><a
										class="nav-item nav-link active text-uppercase"
										href="games.php">Games</a>
								</li>
								<li class="dropdown-item"><a
										class="nav-item nav-link active text-uppercase"
										href="school.php">School
										Supplies</a></li>
								<li class="dropdown-item"><a
										class="nav-item nav-link active text-uppercase"
										href="office.php">Office
										Supplies</a></li>
							</ul>
						  </div>
						</li>
						<li>
						<section class="review">
						<a class="nav-item nav-link text-uppercase"
							href="#testimonials">Testimonials</a>
						</section>
						</li>
						<li>
							<section class="section1">
							<a class="nav-item nav-link text-uppercase"
								href="#container-5" class="Services">Services</a>
								</section>
							</li>
							<li class="nav-item-1"><a class="nav-item-1 nav-link  text-uppercase" a
								href="index1.html">contact</a></li>


					</div>
				  </nav>
			
			</div>





		</div>
	</div>

	<!--ad section starts-->
	<div class="sliderSection">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-lg-7 col-md-7">
							<div class="slide-text">
								<h6>N E W &emsp; C O L L E C T I O N</h6>
								<h2>NEW REXEL &emsp; <br>PAPER SHREDDER</h2>
								<p>Large enough to shred the contents of a ring binder in one load. Shreds up to 300
									sheets
									automatically</p>
								<div class="categories">
									<select>
										<option class="middle" value="">
											<p>QNT</p>
										</option>
										<option value="qnt1">1</option>
										<option value="qnt2">2</option>
										<option value="qnt3">3</option>
									</select>
									<select>
										<option value="">SIZE</option>
										<option value="ssmall">Small</option>
										<option value="smedium">Medium</option>
										<option value="slarge">Large</option>
									</select>
									<a href="#">Rs.10500</a>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-lg-5 imageSlider">
							<img class="d-block"src="./assets/shredders.png" alt="First slide">
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-lg-7 col-md-7">
							<div class="slide-text">
								<h6> N E W&emsp; C O L L E C T I O N</h6>
								<h2>NEW WEIERKEN SCHOOL BAG</h2>
								<p>Most Popular Large Capacity High Quality Laptop Bag Stylish School Bag Trolley Travel
								</p>
								<div class="categories">
									<select>
										<option value="">COLOR</option>
										<option value="qnt1">Black</option>
										<option value="qnt2">Grey</option>
										<option value="qnt3">Blue</option>
									</select>
									<select>
										<option value="">SIZE</option>
										<option value="ssmall">Small</option>
										<option value="smedium">Medium</option>
										<option value="slarge">Large</option>
									</select>
									<a href="#">Rs.1550</a>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-lg-5 imageSlider-1">
							<img class="d-block" src="./assets/bag.png" alt="First slide">
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-lg-7 col-md-7">
							<div class="slide-text">
								<h6>N E W &emsp; C O L L E C T I O N</h6>
								<h2>EL-501X2BWH <h2 style="text-align: left;">SCIENTIFIC CALCULATOR</h2>
								</h2>
								<p> This white calculator performs 146 essential scientific, math, and statistic
									functions which includes protective hard case and operates on a battery source.</p>
								<div class="categories">
									<select>
										<option value="">QNT</option>
										<option value="qnt1">1</option>
										<option value="qnt2">2</option>
										<option value="qnt3">3</option>
									</select>

									<a href="#">Rs.1220</a>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-lg-5 imageSlider-2">
							<img class="d-block" src="./assets/calcu.png" alt="First slide">
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>




	<!-- header section end -->
	<!-- services section starts-->
	<div id="container-5">
		<h1 class="topic">OUR SERVICES</h1>
		<div class="container-6">
			<div class="row">
				<div class="col-sm-12 col-lg-4">
					<div class="main">
						<div class="service">
							<div class="service-logo">
								<img src="./assets/commu.png" alt="">
							</div>
							<h4 style="font-size: 1.43rem;">Communication</h4>
							<p>We deal honestly with people and situations. We work in close collaboration with our
								clients. We foster friendly and longterm business relationships. </p>
						</div>
						<div class="shadowOne"></div>
						<div class="shadowTwo"></div>
						
					</div>

				</div>
				<div class="col-sm-12 col-lg-4">
					<div class="main">
						<div class="service">
							<div class="service-logo1">
								<img src="./assets/fast.png" alt="">
							</div>
							<h4 style="font-size: 1.43rem;">Fast Delivery</h4>
							<p>We deliver every products within 24 hours of the purchase of the goods without any delay.  </p>
						</div>
						<div class="shadowOne"></div>
						<div class="shadowTwo"></div>
					</div>
				</div>
				<div class="col-sm-12 col-lg-4">
					<div class="main">
						<div class="service">
							<div class="service-logo2">		
								<img src="./assets/commu.png" alt="">
							</div>
							<h4 style="font-size: 1.43rem;">Fulfillment</h4>
							<p>Our team ensures that the orders are being picked, packed on time and that no matter what option the customer chooses, our team can handle the fulfillment. </p>
						</div>
						<div class="shadowOne"></div>
						<div class="shadowTwo"></div>
					</div>
				</div>

			</div>
		</div>

	</div>
	<!-- category section starts -->
	<div id="categorySection">
		<div class="container-2">
			<h3 class="heading text-uppercase p-5">Product Category</h3>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-lg-3">
					<div class="categorylist category-1">
					<a href="details.php?ptype=arts"><img class="img-fluid" src="./assets/art.jpeg" alt=""></a>	
						<a href="details.php?ptype=arts"><button class="categoryname">Art and Craft</button></a>
					</div>  
				</div>
				<div class="col-xs-6 col-sm-6 col-lg-3">
					<div class="categorylist category-2">
						<a href="details.php?ptype=games"><img class="img-fluid" src="./assets/games.jpeg" alt=""></a>
						<a href="details.php?ptype=games"><button class="categoryname">Games</button></a>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-lg-3">
					<div class="categorylist category-3">
						<a href="details.php?ptype=office"><img class="img-fluid" src="./assets/office_basics.jpg" alt=""></a>
						<a href="details.php?ptype=office"><button class="categoryname">Office Supplies</button></a>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-lg-3">
					<div class="categorylist category-4">
					<a href="details.php?ptype=school"><img class="img-fluid" src="./assets/school.jpeg" alt=""></a>
						<a href="details.php?ptype=school"><button class="categoryname">School Supplies</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- category section ends -->
	<!-- product section starts -->
	<div class="productSection" style="margin-top: 7rem;">

		<div class="owl-carousel owl-theme">
			<div class="item">
				<img src="./assets/tt.jpeg" class="rounded-circle" alt="12">
				<p class="info">Double Fish Set T.Tracket Set </p>
				<p class="price">Rs 450</p>
			</div>
			<div class="item">
				<img src="assets/chess.jpeg" class="rounded-circle" alt="12">
				<p class="info">Chess Board foldable </p>
				<p class="price">Rs. 700</p>
			</div>
			<div class="item">
				<img src="assets/bags.jpeg" class="rounded-circle" alt="12">
				<p class="info">Naruto Bag </p>
				<p class="price">Rs. 2100</p>
			</div>
			<div class="item">
				<img src="assets/pen.jpeg" class="rounded-circle" alt="12">
				<p class="info">Parker Classic Stainless Steel Gt Ball Pen </p>
				<p class="price">Rs. 400</p>
			</div>
			<div class="item">
				<img src="assets/cal.jpeg" class="rounded-circle" alt="12">
				<p class="info">Casio Scientific Calculator </p>
				<p class="price">Rs. 800</p>
			</div>
			<div class="item">
				<img src="assets/notebooks.jpg" class="rounded-circle" alt="12">
				<p class="info">Bhav Note Books(set of 4) </p>
				<p class="price">Rs.950</p>
			</div>
			<div class="item">
				<img src="assets/castel.jpeg" class="rounded-circle" alt="12">
				<p class="info">Faber Castell Acrylic 12 Colours </p>
				<p class="price">Rs 1200</p>
			</div>
			<div class="item">
				<img src="assets/cheque.jpeg" class="rounded-circle" alt="12">
				<p class="info">Pidanlu Cheque Book Holder </p>
				<p class="price">Rs. 850</p>
			</div>
		</div>
	</div>
	<!-- product section ends -->
	</div>
<!--all products starts-->
<h3 class="heading text-uppercase p-5">top products</h3>
<div class="allProducts">
	<div class="row">
	<div class="col-lg-3 col-sm-6">
		<div class="product-grid">
			<div class="product-image">
				<a href="#">
					<img class="pic-1"
						src="assets/anc.png">
					<img class="pic-2"
						src="assets/anc1.png">
				</a>

				<ul class="social">
					<li><a href="arts/aquick1.php"
							data-tip="Quick View"> <i class="fa fa-search"></i></a></li>
							<li><a href="#" data-tip="Add to Cart"> <i class="fa fa-shopping-cart"></i></a></li>

				</ul>

				<span class="product-new-label">Crayons</span>
				<ul class="rating">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>


				</ul>

			</div>

			<div class="product-content">
				<h3 class="title"><a
						href="arts/aquick1.php">Crayons</a>
				</h3>
				<div class="price">Rs.150</div>

			</div>

		</div>
	</div>

	<div class="col-lg-3 col-sm-6">
		<div class="product-grid">
			<div class="product-image">
				<a href="#">
					<img class="pic-1"
						src="assets/canvas.png">
					<img class="pic-2"
						src="assets/canvas1.png">
				</a>

				<ul class="social">
					<li><a href="arts/aquick2.php"
							data-tip="Quick View"> <i class="fa fa-search"></i></a></li>
							<li><a href="#" data-tip="Add to Cart"> <i class="fa fa-shopping-cart"></i></a></li>

				</ul>

				<span class="product-new-label">Canvas</span>


			</div>

			<ul class="rating">
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star-o"></li>
			</ul>

			<div class="product-content">
				<h3 class="title"><a
						href="arts/aquick2.php">Handmade Art canvas</a>
				</h3>
				<div class="price">Rs.1500</div>

			</div>

		</div>
	</div>

	<div class="col-lg-3 col-sm-6">
		<div class="product-grid">
			<div class="product-image">
				<a href="#">
					<img class="pic-1"
						src="assets/brush.png">
					<img class="pic-2"
						src="assets/brush1.png">
				</a>

				<ul class="social">
					<li><a href="arts/aquick3.php"
							data-tip="Quick View"> <i class="fa fa-search"></i></a></li>
							<li><a href="#" data-tip="Add to Cart"> <i class="fa fa-shopping-cart"></i></a></li>

				</ul>

				<span class="product-new-label">Brush</span>


			</div>

			<ul class="rating">
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star-half-o"></li>
			</ul>

			<div class="product-content">
				<h3 class="title"><a
						href="arts/aquick3.php">Paint Brush Set</a>
				</h3>
				<div class="price">Rs.1000</div>

			</div>

		</div>
	</div>
	<div class="col-lg-3 col-sm-6">
		<div class="product-grid">
			<div class="product-image">
				<a href="#">
					<img class="pic-1"
						src="assets/game.jpeg">
					<img class="pic-2"
						src="assets/game1.jpeg">
				</a>

				<ul class="social">
					<li><a href="Games/gquick.php"
							data-tip="Quick View"> <i class="fa fa-search"></i></a></li>
							<li><a href="#" data-tip="Add to Cart"> <i class="fa fa-shopping-cart"></i></a></li>

				</ul>

				<span class="product-new-label">Ball</span>
				<ul class="rating">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>


				</ul>

			</div>

			<div class="product-content">
				<h3 class="title"><a
						href="Games/gquick.php">Cricket-Ball</a>
				</h3>
				<div class="price">Rs.700</div>

			</div>

		</div>
	
</div>
</div>
</div>
<div class="allProducts-1">
	<div class="row">
	<div class="col-lg-3 col-sm-6">
		<div class="product-grid">
			<div class="product-image">
				<a href="#">
					<img class="pic-1"
						src="assets/ga5.jpeg">
					<img class="pic-2"
						src="assets/ga6.jpeg">
				</a>

				<ul class="social">
					<li><a href="Games/gquick5.php"
							data-tip="Quick View"> <i class="fa fa-search"></i></a></li>
							<li><a href="#" data-tip="Add to Cart"> <i class="fa fa-shopping-cart"></i></a></li>

				</ul>

				<span class="product-new-label">Board</span>

				<ul class="rating">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
				</ul>

			</div>

			<div class="product-content">
				<h3 class="title"><a
						href="Games/gquick5.php">Electronic-Dartboard</a>
				</h3>
				<div class="price">Rs.2850</div>

			</div>

		</div>
	</div>

	<div class="col-lg-3 col-sm-6">
		<div class="product-grid">
			<div class="product-image">
				<a href="#">
					<img class="pic-1"
						src="assets/ga8.jpeg">
					<img class="pic-2"
						src="assets/ga9.jpeg">
				</a>

				<ul class="social">
					<li><a href="Games/gquick6.php"
							data-tip="Quick View"> <i class="fa fa-search"></i></a></li>
							<li><a href="#" data-tip="Add to Cart"> <i class="fa fa-shopping-cart"></i></a></li>

				</ul>

				<span class="product-new-label">Racket</span>


			</div>

			<ul class="rating">
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star disable"></li>
			</ul>

			<div class="product-content">
				<h3 class="title"><a
						href="Games/gquick6.php">Badminton</a>
				</h3>
				<div class="price">Rs.1800</div>

			</div>

		</div>
	</div>
	<div class="col-lg-3 col-sm-6">
		<div class="product-grid">
			<div class="product-image">
				<a href="#">
					<img class="pic-1"
						src="assets/pic6.jpeg">
					<img class="pic-2"
						src="assets/pic7.jpeg">
				</a>

				<ul class="social">
					<li><a href="offices/oquick5.php" data-tip="Quick View"> <i class="fa fa-search"></i></a>
					</li>

					<li><a href="#" data-tip="Add to Cart"> <i class="fa fa-shopping-cart"></i></a></li>
				</ul>

				<span class="product-new-label">Stapler</span>

				<ul class="rating">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
				</ul>

			</div>

			<div class="product-content">
				<h3 class="title"><a href="offices/oquick5.php">Duty Standard Stapler</a>
				</h3>
				<div class="price">Rs.750</div>

			</div>

		</div>
	</div>

	<div class="col-lg-3 col-sm-6">
		<div class="product-grid">
			<div class="product-image">
				<a href="#">
					<img class="pic-1"
						src="assets/pic8.jpeg">
					<img class="pic-2"
						src="assets/pic9.jpeg">
				</a>

				<ul class="social">
					<li><a href="offices/oquick6.php" data-tip="Quick View"> <i class="fa fa-search"></i></a>
					</li>
					<li><a href="#" data-tip="Add to Cart"> <i class="fa fa-shopping-cart"></i></a></li>

				</ul>

				<span class="product-new-label">Board</span>


			</div>

			<ul class="rating">
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star"></li>
				<li class="fa fa-star disable"></li>
			</ul>

			<div class="product-content">
				<h3 class="title"><a href="offices/oquick6.php">Quartet Dry-Erase Board</a>
				</h3>
				<div class="price">Rs.2200</div>

			</div>

		</div>
	</div>
</div>
</div>
<!--allProducts End-->
	<section id="testimonials">
		<div class="container">
			<div class="container-3">
				<div class="title">
					<h1 class="review">Reviews</h1>
				</div>
				<div class="slider">
					<div class="slide active">
						<p> Excesstaionery provides best stationery items .Product as described and perfect for my
							requirements. All exactly as it should be. Top quality product well packed</p><br>
						<div class="client-info">

							<h3>Maria</h3>
							<span>Web Developer</span>
						</div>
					</div>

					<div class="slide">
						<p>Had a good response to a problem on the chat line, and was sorted out very quickly and in my
							favour.
							Great products, reasonable prices Thank you</p><br>
						<div class="client-info">
							<h3>Ravi </h3>
							<span>Co Founder</span>

						</div>
					</div>

					<div class="slide">
						<p> Wide selection of stationery, souvenirs as well as back packs. Super helpful service in a
							very
							central location.Items ordered very good quality and competitively priced.</p><br>
						<div class="client-info">
							<h3>John </h3>
							<span>Software Developer</span>

						</div>
					</div>

					<div class="slider-indicator">
						<img src="./assets/img.jpeg" alt="img" class="active" data-id="0">
						<img src="./assets/img1.jpeg" alt="img" data-id="1">
						<img src="./assets/img2.jpeg" alt="img" data-id="2">
					</div>
				</div>
			</div>

		</div>

	</section>
	<!-- Footer section starts-->
	<div class="footerSection-1">
		<div class="container-4 ">
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<img src="./assets/logo22.png" alt="">
					<p class="footerPara pt-3">Xcesstationery is a store that sells office supplies, paper,
						bags,pens,letter writing materials,& similar paper-based products.</p>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="middleFooter">
						<h5 class="pb-3">ABOUT</h5>
						<a href="index1.php">
							<li>Home</li>
						</a>
						<a href="#">
							<li>Contact Us
								<div class="contact-address">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Address: Lalitpur,Nepal
								</div>
								<div class="phone">
									<i class="fa fa-phone" aria-hidden="true"></i> phone-no: +977-4242121
								</div>
								<div class="contact-email">
									<i class="fa fa-envelope" aria-hidden="true"></i> Email: xcess@gmail.com
								</div>

							</li>
						</a>

					</div>
				</div>

				<div class="col-md-4 col-xs-12">
					<div class="rightContent">
						<h5 class="pb-3">INFORMATION</h5>
						<li>Terms of Service</li>
						<li>Privacy Policy</li>
					</div>
				</div>

			</div>
			<div class="bottomSection">
				<div class="copyright">
					<p>© 2020 Pasls, All right reserved</p>
				</div>
			</div>
				<div class="socialMedia">
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
					<i class="fa fa-envelope" aria-hidden="true"></i>

				</div>
			

		</div>
	</div>

	<!-- Footer section ends-->


	<script src="js/swiper.min.js"></script>
	<script src="js/script.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
		integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
		crossorigin="anonymous"></script>

	<script type="text/javascript" src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
	<script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>

	<script type="text/javascript">
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 6,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 1000,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				788: {
					items: 6
				}
			}
		});
		$('.play').on('click', function () {
			owl.trigger('play.owl.autoplay', [1000])
		})
		$('.stop').on('click', function () {
			owl.trigger('stop.owl.autoplay')
		})
	</script>

</body>

</html>