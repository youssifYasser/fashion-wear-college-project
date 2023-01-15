<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Access</title>
	<link rel="icon" href="../IMAGE/Logo.PNG">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="../CSS/admin.css">
<title>admin access</title>

</head>

<body>
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
                      <a class="nav-link dropdown-toggle active" id="navbardrop" href="#" data-toggle="dropdown"><i class="fas fa-user"></i> <span ><?php if(!empty($_SESSION["adminname"])) echo($_SESSION["adminname"]); else echo "Account" ; ?></span></a>
					  <div class="dropdown-menu">
					  	<a class="dropdown-item" href="Login.php">Customer</a>
						  <div class="dropdown-divider"></div>
						<a class="dropdown-item" href="AdmnLogn.php">Admin</a>
					  </div>
                  </li>
              </ul>
          </div>

	</nav><br><br>
<ul class="manual">
  <li class="manu"><a href="AddEmp.php" target="display" id="1" onClick="ch('1')" name="1">Add Employee</a></li>
  <li class="manu"><a href="editEmp.php" onClick="ch('2')" id="2" name="2" target="display">Edit Employee</a></li>
  <li class="manu"><a href="showmodel.php" onClick="ch('3')" id="3" name="3" target="display">Show Models</a></li>
  <li class="manu"><a href="showCustomer.php" onClick="ch('4')" id="4" name="4" target="display">Show Customer Info</a></li>
</ul>

  <iframe name="display" class="frame"></iframe>

<script>
		function ch(q)
		{    
			document.getElementById(q).classList.toggle("active");
			var flag=q-1;
			for(var i=1 ;i<q ; i++)
				document.getElementById(i).className = "";
		}
	
</script>
		
	
</body>
</html>
