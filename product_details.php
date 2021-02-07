<?php 

$id = $_GET['id'];
require_once '1.connection.php';

//query to delete data into table
$sql = "SELECT * FROM xces WHERE id='$id'";

$result = $connection->query($sql);

$row = $result->fetch_assoc();

$types = $row['ptype'];
?>

<?php 

require_once '1.connection.php';
//query to select data from category table
$sql = "SELECT * FROM xces";
//execute query and get result object
$result = $connection->query($sql);
$data = [];

if ($result->num_rows > 0) {
    while ($row1 = $result->fetch_assoc()) {
        array_push($data, $row1);
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/13830254b4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                    <a href="../index1.php">
                        <div class="logoInnerIn"><img src="assets/logo22.png"></div>
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
                                                href="../artandcraft.php">Arts
                                                and craft</a></li>
                                        <li class="dropdown-item"><a class="nav-item nav-link active text-uppercase"
                                                href="../games.php">Games</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-item nav-link active text-uppercase"
                                                href="../school.php">School
                                                Supplies</a></li>
                                        <li class="dropdown-item"><a class="nav-item nav-link active text-uppercase"
                                                href="../office.php">Office
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
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active"> <img  style="height: 400px; width: auto;" class="d-block w-100"
                                src="<?php echo $row['image1'] ?>"
                                alt="">
                        </div>
                        <div class="carousel-item"> <img  style="height: 400px; width: auto;" class="d-block w-100"
                                src="<?php echo $row['image2'] ?>"
                                alt=" "> </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span
                            class="sr-only">Previous</span> </a> <a class="carousel-control-next"
                        href="#carouselExampleControls" role="button" data-slide="next"> <span
                            class="carousel-control-next-icon" aria-hidden="true"></span> <span
                            class="sr-only">Next</span> </a>
                    <div class="card">
                        <p><button>Add to Cart</button></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 information">
                <div class="row">
	
                    <h1 style="padding-right: 20%;"><?php echo $row['pname'] ?></h1>
                    &nbsp; &nbsp;
                    &nbsp; &nbsp;
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <h2>&#8360;<?php echo $row['rs'] ?></h2>
                    </div>
                    <div class="row">
                        <h3 class="text-warning">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star disable" aria-hidden="true"></i>
                        </h3>
                        &nbsp; &nbsp;
                        <h5>5 stars rating</h5>
                    </div>

                    <div class="row mt-4">
                        <h3 class="text-info"><i class="fa fa-map-marker" aria-hidden="true"></i></h3>
                        <p style="font-size: 20px"> &nbsp;Cash on Delivery&nbsp;
                    </div>

                    <div class="row mt-4">
                        <h4>Colors Available: &nbsp; &nbsp; </h4>

                        <?php if($row['color1']!='NULL')
                                {
                                    ?><label  style="color :black; background-color:<?php echo $row['color1'];?> ; border-radius: 9px;    ">&nbsp;Red&nbsp;</label><br><?php
                                }
                                ?>
                        <?php if($row['color2']!='NULL')
                                {
                                    ?><label  style="color :black; background-color:<?php echo $row['color2'];?> ; border-radius: 9px;    ">&nbsp;Orange&nbsp;</label><br><?php
                                }
                                ?>
                        <?php if($row['color3']!='NULL')
                                {
                                    ?><label  style="color :black; background-color:<?php echo $row['color3'];?> ; border-radius: 9px;    ">&nbsp;Yellow&nbsp;</label><br><?php
                                }
                                ?>
                        <?php if($row['color4']!='NULL')
                                {
                                    ?><label  style="color :black; background-color:<?php echo $row['color4'];?> ; border-radius: 9px;    ">&nbsp;Green&nbsp;</label><br><?php
                                }
                                ?>
                        <?php if($row['color5']!='NULL')
                                {
                                    ?><label  style="color :black; background-color:<?php echo $row['color5'];?> ; border-radius: 9px;    ">&nbsp;Blue&nbsp;</label><br><?php
                                }
                                ?>
                        <?php if($row['color6']!='NULL')
                                {
                                    ?><label  style="color :black; background-color:<?php echo $row['color6'];?> ; border-radius: 9px;    ">&nbsp;Indego&nbsp;</label><br><?php
                                }
                                ?>
                        <?php if($row['color7']!='NULL')
                                {
                                    ?><label  style="color :black; background-color:<?php echo $row['color7'];?> ; border-radius: 9px;    ">&nbsp;Voliet&nbsp;</label><br><?php
                                }
                                ?>
                        <?php if($row['color8']!='NULL')
                                {
                                    ?><label  style="color :white ; background-color:<?php echo $row['color8'];?> ; border-radius: 9px;    ">&nbsp;Black&nbsp;</label><br><?php
                                }
                                ?>
                        <?php if($row['color9']!='NULL')
                                {
                                    ?><label  style="color :black; background-color:<?php echo $row['color9'];?> ; border-radius: 9px;    ">&nbsp;White&nbsp;</label><br><?php
                                }
                                ?>

                    </div>

                    <div class="row mt-4">
                        <h4>Seller: <?php echo $row['sname'] ?> &nbsp; &nbsp;</h4>
                        <p style="font-size: 18px"> </p>
                    </div>


                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0">Description<br>
                        <h6><?php echo $row['discription'] ?>
                        </h6>
                    </h5>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-5">
                <h2>Similar Products</h2>
            </div>
            <div class="row mt-5">
                  <?php 
                    foreach($data as $key => $value){
                    if($types==$value['ptype']){
?> 
                <div class="col-lg-3 col-md-12">                      
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="<?php echo $value['image2'];?>">
                        <div class="card-title">
                            <h4><?php echo $value['pname'];?></h4>
                        </div>
                        <div class="card-text">
                            Size: 9 inch diameter<br>
                            TOTALLY BLANK<br>
                            DURABLE
                            <br /><br />
                            <div class="product-content">
                                <div class="price">Rs.650</div>

                            </div>
                        </div>

                    </div>

                </div>
<?php
}}
?>

            </div>


        </div>
    </div>

    <!-- Footer section starts-->
    <div class="footerSection">
        <div class="container-4">
            <div class="row">
                <div class="col-md-4">
                    <img src="../assets/logo22.png" alt="">
                    <p class="footerPara pt-3">Xcesstationery is a store that sells office supplies, paper,
                        bags,pens,letter writing materials,& similar paper-based products.</p>
                </div>
                <div class="col-md-4">
                    <div class="middleFooter">
                        <h5 class="pb-3">ABOUT</h5>
                        <a href="../index1.html">
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







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>