<?php
require_once("connection.php");
session_start();
if(isset($_POST['buy'])){
	if(!empty($_SESSION["userID"])){
		header("Location: Checkout.php");
		$_SESSION["Itemid"]=$_POST['id'];
		$_SESSION["itemColor"]=!empty($_POST['color']) ? $_POST['color']:'';
		$_SESSION["itemSize"]=!empty($_POST['size']) ? $_POST['size']:'';
	}
	else{
		header("Location: Login.php");
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Men Section</title>
		<link rel="icon" href="../IMAGE/Logo.PNG">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="../CSS/women.css">
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
				<li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fab fa-product-hunt"></i> Products</a>
					<div class="dropdown-menu">
					  <a class="dropdown-item active" href="../PHP/men.php">Men Section</a>
						<div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="../PHP/women.php">Women Section</a>
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

	</nav>

	<div class="main">
		<div class="row">
			<div class="col"></div>
		  <div class="col">
			  <form method="post">
					<div class="card">
			  <a target="_blank" href="../IMAGE/07eae515f195bd3a491bf3145e7a6fa4.jpg">
				  <img src="../IMAGE/07eae515f195bd3a491bf3145e7a6fa4.jpg" alt="Ralph Lauren" class="m" ></a>
			  <div class="container">  
				  <input type="text" name="id" id="id" hidden="true" value="11">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=11";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
				  <label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=11";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['color_color']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				  </select><br>
				  <label>Choose Size :</label>
				  <select name="size" class="custom-select-sm">
					  <?php
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=11";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['size_size']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				</select><br>
				<label>Price =</label>
				<?php
				  $sql="SELECT price FROM model WHERE idmodel=11";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-dark"></p>

			  </div>
			</div>
			  </form>
		  </div>
		  <div class="col">
			  <form method="post">
					<div class="card">
			  <a target="_blank" href="../IMAGE/11505124411419-WROGN-Men-Blue-Skinny-Fit-Mid-Rise-Clean-Look-Stretchable-Jeans-3881505124411139-1.jpg">
				  <img src="../IMAGE/11505124411419-WROGN-Men-Blue-Skinny-Fit-Mid-Rise-Clean-Look-Stretchable-Jeans-3881505124411139-1.jpg" alt="Mike" class="m"></a>
			  <div class="container">  
				  <input type="text" name="id" id="id" hidden="true" value="12">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=12";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
				<label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php					  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=12";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['color_color']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				  </select><br>
				  <label>Choose Size :</label>
				  <select name="size" class="custom-select-sm">
					  <?php				  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=12";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['size_size']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				</select><br>
				<label>Price =</label>
				<?php
				  $sql="SELECT price FROM model WHERE idmodel=12";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-dark"></p>
			  </div>
			</div>
			  </form>
		  </div>
			<div class="col"></div>
		</div>
		<div class="row">
			<div class="col"></div>
		  <div class="col">
			  <form method="post">
					<div class="card">
				<a target="_blank" href="../IMAGE/BRS9VHjD8uw_1200x1200.jpg">
					<img src="../IMAGE/BRS9VHjD8uw_1200x1200.jpg" alt="John" class="m" ></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="13">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=13";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
				<label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php				  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=13";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['color_color']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				  </select><br>
				  <label>Choose Size :</label>
				  <select name="size" class="custom-select-sm">
					  <?php			  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=13";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['size_size']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				</select><br>
				<label>Price =</label>
				<?php
				  $sql="SELECT price FROM model WHERE idmodel=13";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-dark"></p>
			  </div>
			</div>
			  </form>
		  </div>

			 <div class="col">
				 <form method="post">
					<div class="card">
			  <a target="_blank" href="../IMAGE/maxresdefault (5).jpg">
				  <img src="../IMAGE/maxresdefault (5).jpg" alt="Mike" class="m"></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="14">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=14";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
				<label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php				  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=14";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['color_color']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				  </select><br>
				  <label>Choose Size :</label>
				  <select name="size" class="custom-select-sm">
					  <?php				  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=14";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['size_size']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				</select><br>
				<label>Price =</label>
				<?php
				  $sql="SELECT price FROM model WHERE idmodel=14";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-dark"></p>
			  </div>
			</div>
				 </form>
		  </div>
			<div class="col"></div>
			</div>  
		<div class="row">
				<div class="col"></div>
			 <div class="col">
				 <form method="post">
					<div class="card">
			  <a target="_blank" href="../IMAGE/maxresdefault (6).jpg">
				  <img src="../IMAGE/maxresdefault (6).jpg" alt="Mike" class="m"></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="15">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=15";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
			   <label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php			  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=15";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['color_color']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				  </select><br>
				  <label>Choose Size :</label>
				  <select name="size" class="custom-select-sm">
					  <?php				  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=15";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['size_size']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				</select><br>
				<label>Price =</label>
				<?php
				  $sql="SELECT price FROM model WHERE idmodel=15";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-dark"></p>
			  </div>
			</div>
				 </form>
		  </div>

			 <div class="col">
				 <form method="post">
					<div class="card">
			  <a target="_blank" href="../IMAGE/maxresdefault1.jpg">
				  <img src="../IMAGE/maxresdefault1.jpg" alt="Mike" class="m"></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="16">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=16";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
				<label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php				  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=16";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['color_color']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				  </select><br>
				  <label>Choose Size :</label>
				  <select name="size" class="custom-select-sm">
					  <?php
					  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=16";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['size_size']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				</select><br>
				<label>Price =</label>
				<?php
				  $sql="SELECT price FROM model WHERE idmodel=16";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-dark"></p>
			  </div>
			</div>
				 </form>
		  </div>
				<div class="col"></div>
			</div>
	 	<div class="row">
				 <div class="col"></div>
			 <div class="col">
				 <form method="post">
					<div class="card">
			  <a target="_blank" href="../IMAGE/maxresdefault2.jpg">
				  <img src="../IMAGE/maxresdefault2.jpg" alt="Mike" class="m"></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="17">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=17";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
			   <label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php			  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=17";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['color_color']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				  </select><br>
				  <label>Choose Size :</label>
				  <select name="size" class="custom-select-sm">
					  <?php				  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=17";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['size_size']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				</select><br>
				<label>Price =</label>
				<?php
				  $sql="SELECT price FROM model WHERE idmodel=17";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-dark"></p>
			  </div>
			</div>
				 </form>
		  </div>

			 <div class="col">
				 <form method="post">
					<div class="card">
			  <a target="_blank" href="../IMAGE/maxresdefault3.jpg">
				  <img src="../IMAGE/maxresdefault3.jpg" alt="Mike" class="m"></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="18">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=18";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
				<label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php		  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=18";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['color_color']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				  </select><br>
				  <label>Choose Size :</label>
				  <select name="size" class="custom-select-sm">
					  <?php			  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=18";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['size_size']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				</select><br>
				<label>Price =</label>
				<?php
				  $sql="SELECT price FROM model WHERE idmodel=18";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-dark"></p>
			  </div>
			</div>
				 </form>
		  </div>
				 <div class="col"></div>
			</div>
		<div class="row">
				<div class="col"></div>
			 <div class="col">
				 <form method="post">
					<div class="card">
			  <a target="_blank" href="../IMAGE/maxresdefault4.jpg">
				  <img src="../IMAGE/maxresdefault4.jpg" alt="Mike" class="m"></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="19">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=19";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
				<label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php			  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=19";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['color_color']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				  </select><br>
				  <label>Choose Size :</label>
				  <select name="size" class="custom-select-sm">
					  <?php				  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=19";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['size_size']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				</select><br>
				<label>Price =</label>
				<?php
				  $sql="SELECT price FROM model WHERE idmodel=19";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-dark"></p>
			  </div>
			</div>
				 </form>
		  </div>

			 <div class="col">
				 <form method="post">
					<div class="card">
			  <a target="_blank" href="../IMAGE/Milo Ventimiglia-0717-GQ-FAMV08-01-alt.jpg">
				  <img src="../IMAGE/Milo Ventimiglia-0717-GQ-FAMV08-01-alt.jpg" alt="Mike" class="m"></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="20">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=20";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
				<label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php		  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=20";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['color_color']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				  </select><br>
				  <label>Choose Size :</label>
				  <select name="size" class="custom-select-sm">
					  <?php				  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=20";
					  $stmt = $conn->query($sql);
					  $count=1;
					  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						  echo("<option value=\"$count\">");
						  echo($row['size_size']);
						  echo("</option>");
						  ++$count;
					  }
					  ?>
				</select><br>
				<label>Price =</label>
				<?php
				  $sql="SELECT price FROM model WHERE idmodel=20";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-dark"></p>
			  </div>
			</div>
				 </form>
		  </div>
				<div class="col"></div>
			</div>
			

	</div>

</body>
</html>