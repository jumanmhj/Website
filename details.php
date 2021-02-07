<?php 
$types = $_GET['ptype'];
$results_per_page = 10;

	
?>
<?php 

require_once '1.connection.php';
//query to select data from category table
$sql = "SELECT * FROM xces";
//execute query and get result object
$result = $connection->query($sql);
$data = [];

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		array_push($data, $row);
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
	<script src="https://kit.fontawesome.com/13830254b4.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css">
	<link href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
	<style>
		body {
			background-size: cover;
		}
	</style>
</head>

<body>


	<div class="headerSection">
		<div class="container-fluid">
			<div class="top">

				<nav class="navbar navbar-expand-lg">
					<a href="index1.php">
						<div class="logoInner"><img src="./assets/logo22.png"></div>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav NavInner">
							<li class="nav-item"><a class="nav-item nav-link active text-uppercase" a
									href="index1.php">Home</a></li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									PRODUCT
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<ul>
										<li class="dropdown-item"><a class="nav-item nav-link active text-uppercase"
												href="artandcraft.php">Arts
												and craft</a></li>
										<li class="dropdown-item"><a class="nav-item nav-link active text-uppercase"
												href="games.php">Games</a>
										</li>
										<li class="dropdown-item"><a class="nav-item nav-link active text-uppercase"
												href="school.php">School
												Supplies</a></li>
										<li class="dropdown-item"><a class="nav-item nav-link active text-uppercase"
												href="office.php">Office
												Supplies</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item-1"><a class="nav-item-1 nav-link  text-uppercase" a
									href="index1.php">contact</a></li>


					</div>
				</nav>

			</div>





		</div>
	</div>

	<br>
	<!--product section starts-->

	<div style="margin-top: 3rem;" class="container">
	<?php
		if($types=='arts'){
			?>
		<h3 class="h3">Art and Craft</h3>
		<div class="row">
	<?php
		}
	?>

	<?php
		if($types=='games'){
			?>
		<h3 class="h3">Games</h3>
		<div class="row">
	<?php
}
?>

	<?php
		if($types=='office'){
			?>
		<h3 class="h3">Office Supplies</h3>
		<div class="row">
	<?php
}
?>

	<?php
		if($types=='school'){
			?>
		<h3 class="h3">School Supplies</h3>
		<div class="row">
	<?php
}
?>




	<?php 
	foreach($data as $key => $value){
					if($types==$value['ptype']){

?>
<div class="col-lg-3 col-sm-6">
				<div class="product-grid">
					<div class="product-image">
						<a href="product_details.php?id=<?php echo$value['id'];?>">
							<img class="pic-1" style="height: 180px;" src="<?php echo$value['image1'];?>">
							<img class="pic-2" style="height: 180px;"  src="<?php echo$value['image2'];?>">
						</a>

						<ul class="social">
							<li><a href="product_details.php?id=<?php echo$value['id'];?>" data-tip="Quick View"> <i class="fa fa-search"></i></a></li>
							<li><a href="#" data-tip="Add to Cart"> <i class="fa fa-shopping-cart"></i></a></li>



						</ul>

						<span class="product-new-label"><?php echo$value['pname'];?></span>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>


						</ul>

					</div>

					<div class="product-content">
						<h3 class="title"><a href="arts/aquick1.php"><?php echo$value['pname'];?></a>
						</h3>
						<div class="price"><label>&#8360;.<?php echo$value['rs'];?></label></div>

					</div>

				</div>
			</div>
<?php

}
}
	?>

		</div>
</div>
		





	<!-- Footer section starts-->
	<div class="footerSection">
		<div class="container-4">
			<div class="row">
				<div class="col-md-4">
					<img src="./assets/logo22.png" alt="">
					<p class="footerPara pt-3">Xcesstationery is a store that sells office supplies, paper,
						bags,pens,letter writing materials,& similar paper-based products.</p>
				</div>
				<div class="col-md-4">
					<div class="middleFooter">
						<h5 class="pb-3">ABOUT</h5>
						<a href="./index1.php">
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

				<div class="col-md-4">
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
				<div class="socialMedia">
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
					<i class="fa fa-envelope" aria-hidden="true"></i>

				</div>
			</div>

		</div>
	</div>

	<!-- Footer section ends-->
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