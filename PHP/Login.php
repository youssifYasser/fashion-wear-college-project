<?php
require_once("connection.php");
session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="icon" href="../IMAGE/Logo.PNG">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="../CSS/login.css">
</head>

<body>
    <form method="post" class="needs-validation" novalidate>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
		<a class="navbar-brand" href="index.php">FashionWear</a>

	  <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> HOME</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-phone"></i> Contact</a>
                </li> 
				<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbardrop" data-toggle="dropdown"><i class="fab fa-product-hunt"></i> Products</a>
					<div class="dropdown-menu">
					  <a class="dropdown-item" href="../PHP/men.php">Men Section</a>
						<div class="dropdown-divider"></div>
					  <a class="dropdown-item active" href="../PHP/women.php">Women Section</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="../PHP/child.php">Children Section</a>
					</div>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle active" id="navbardrop" href="#" data-toggle="dropdown"><i class="fas fa-user"></i> <span ><?php if(!empty($_SESSION["username"])) echo($_SESSION["username"]); else echo "Account" ; ?></span></a>
					  <div class="dropdown-menu">
					  	<a class="dropdown-item" href="Login.php">Customer</a>
						  <div class="dropdown-divider"></div>
						<a class="dropdown-item" href="AdmnLogn.php">Admin</a>
					  </div>
                  </li>
              </ul>
          </div>

	</nav><br><br>
	<h1 class="head1">Login</h1>
	<div class="row main">
    <div class="col-md-12 order-md-1">
      
        <div class="col-md-12 mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
		<div class="col-md-12 mb-3">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="pass" name="pass">
        </div>
        
        <button class="btn btn-success btn-group-lg btn-block" type="submit" id="login" name="login" onClick="login()">Login</button>
		<hr class="mb-4">
		<p>New Customer ?</p>
		<a  href="Registration.php" class="btn btn-warning btn-group-lg btn-block" id="regst" role="button">Register</a>  
 
    </div>
  </div>
		
    </form>
	<script>
		function login(){
		var pass = document.getElementById("pass").value;
		var email = document.getElementById("email").value;
		if(pass !="" && email !=""){
		var i=<?php
						if(isset($_POST['login'])){
							$name=strval($_POST['email']);
							$pass=strval($_POST['pass']);
							$stm = $conn->query("SELECT * FROM customer WHERE email='$name' and pass='$pass'");
							if($row = $stm->fetch(PDO::FETCH_ASSOC))
							{
								header("Location: index.php");
								$_SESSION["userID"]=$row['id'];
								$_SESSION["username"]=$row['fname']." ".$row['lname'];
								$_SESSION["userPhone"]=$row['phone'];
								$_SESSION["userEmail"]=$row['email'];
								$_SESSION["userAddress"]=$row['Address'];
								
							}
							
						}
			
				?>
			document.write(i);
			
		}
			else{window.alert("Please Insert Email and Password");}
		}
	</script>
    
</body>
</html>