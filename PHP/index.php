<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Fashion Wear</title>
	<link rel="icon" href="../IMAGE/Logo.PNG">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="../CSS/Home.css">
</head>

<body>
	<div class="main jumbotron jumbotron-fluid">
		<div class="main2 container">
			<img src="../IMAGE/Logo2.PNG" alt="Fashion Wear" class="logo img-fluid rounded">
		</div>
		<div class="container">
			<h1 class="display-4">Welcome to The Home of FASHION</h1>
		</div>
	</div>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
		<a class="navbar-brand" href="index.php">FashionWear</a>

	  <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html"><i class="fas fa-home"></i> HOME</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-phone"></i> Contact</a>
                </li> 
				<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fab fa-product-hunt"></i> Products</a>
					<div class="dropdown-menu">
					  <a class="dropdown-item" href="../PHP/men.php">Men Section</a>
						<div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="../PHP/women.php">Women Section</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="../PHP/child.php">Children Section</a>
					</div>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown"><i class="fas fa-user"></i> <span ><?php if(!empty($_SESSION["username"])) echo($_SESSION["username"]); else echo "Account" ; ?></span></a>
					  <div class="dropdown-menu">
					  	<a class="dropdown-item" href="Login.php">Customer</a>
						  <div class="dropdown-divider"></div>
						<a class="dropdown-item" href="AdmnLogn.php">Admin</a>
					  </div>
                  </li>
              </ul>
          </div>

	</nav>

<div class="mr-5 ml-5">	
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleFade" data-slide-to="1"></li>
            <li data-target="#carouselExampleFade" data-slide-to="2"></li>
            <li data-target="#carouselExampleFade" data-slide-to="3"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../IMAGE/07eae515f195bd3a491bf3145e7a6fa4.jpg" alt="img not found">
            </div>
            <div class="carousel-item">
              <img src="../IMAGE/1cb9b8b680e51d011bd37de9a50d82f7.jpg" alt="img not found">
            </div>
            <div class="carousel-item">
              <img src="../IMAGE/03.jpg" alt="img not found">
			  </div>
            <div class="carousel-item">
              <img src="../IMAGE/n-inci-detayli-elbise--lacivert--insirah-434325-434325-1.jpg" alt="img not found">
            </div>               
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#carouselExampleFade" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" data-slide="next">
            <span class="carousel-control-next-icon dark"></span>
          </a>
	</div>
	
	<div class="row about ml-4 mr-5">
          <div class="col-md-4 col-lg-4 col-xs-12 first">
            <div class="icon mr-4">
              <span class="fas fa-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Shipping</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-xs-12 second">
            <div class="icon mr-4">
              <span class="fas fa-redo"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Returns</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-xs-12 third">
            <div class="icon mr-4">
              <span class="fas fa-question-circle"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
        </div>
	
	<div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a class="block-2-item" href="women.php">
              <figure class="image">
                <img src="../IMAGE/5cf90fd10e3f14181ab1e2a940c8a812.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Women</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="child.php">
              <figure class="image">
                <img src="../IMAGE/02+(2).jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Children</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="men.php">
              <figure class="image">
                <img src="../IMAGE/Milo Ventimiglia-0717-GQ-FAMV08-01-alt.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Men</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
		
	
</div>
	<script type="text/javascript">
		var i='<?php isset($_SESSION["username"]) ? $_SESSION["username"]:" your account" ; ?>'
		document.getElementById("account").innerHTML=i;
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>
