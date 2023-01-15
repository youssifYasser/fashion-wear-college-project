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
		<title>Women Section</title>
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

	</nav>

	<div class="main">
			  
		<div class="row">
			<div class="col"></div>
		  <div class="col">
			  <form method="post"> 
				<div class="card">
				  <a target="_blank" href="..\IMAGE\8.25.16-Five-Facts-About-Women-Wearing-Hijab.jpg">
					  <img src="..\IMAGE\8.25.16-Five-Facts-About-Women-Wearing-Hijab.jpg" alt="Jane" class="m" ></a>
				  <div class="container">
					  <input type="text" name="id" id="id" hidden="true" value="1">
					<h2><?php $sql="SELECT Name FROM model WHERE idmodel=1";
						$stmt=$conn->query($sql);
						$row=$stmt->fetch(PDO::FETCH_ASSOC);
						echo($row['Name']); ?></h2>
					  <label>Choose Color :</label>
					  <select name="color" class="custom-select-sm">
						  <?php

						  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=1";
						  $stmt = $conn->query($sql);
						  $count=1;
						  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
							   echo("<option value=\"$count\">");
							  echo($row['color_color']);
							  echo("</option>");
							  $count++;
						  }
						  echo '</select>';
						  ?>
					  <br>
					  <label>Choose Size :</label>
					  <select name="size" class="custom-select-sm">
						  <?php
						  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=1";
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
					  $sql="SELECT price FROM model WHERE idmodel=1";
					  $stmt=$conn->query($sql);
					  $row=$stmt->fetch(PDO::FETCH_ASSOC);
					  echo($row['price']."$");
					?>
					<p><input type="submit" value="Buy" name="buy" class="btn btn-danger"></p>

				  </div>
				</div>
			  </form>
		  </div>
		  <div class="col">
			  <form method="post">
				<div class="card">
				  <a target="_blank" href="..\IMAGE\326-8.jpg">
					  <img src="..\IMAGE\326-8.jpg" alt="Mike" class="m"></a>
				  <div class="container">
					  <input type="text" name="id" id="id" hidden="true" value="2">
					<h2><?php $sql="SELECT Name FROM model WHERE idmodel=2";
						$stmt=$conn->query($sql);
						$row=$stmt->fetch(PDO::FETCH_ASSOC);
						echo($row['Name']); ?></h2>
					<label>Choose Color :</label>
					  <select name="color" class="custom-select-sm">
						  <?php
						  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=2";
						  $stmt = $conn->query($sql);
						  $count=1;
						  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
							  echo("<option value=\"$count\">");
							  echo($row['color_color']);
							  echo("</option>");
							  $count++;
						  }
						  ?>
					  </select><br>
					  <label>Choose Size :</label>
					  <select name="size" class="custom-select-sm">
						  <?php
						  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=2";
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
					  $sql="SELECT price FROM model WHERE idmodel=2";
					  $stmt=$conn->query($sql);
					  $row=$stmt->fetch(PDO::FETCH_ASSOC);
					  echo($row['price']."$");
					?>
					<p><input type="submit" value="Buy" name="buy" class="btn btn-danger"></p>
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
					<a target="_blank" href="..\IMAGE\evening-dress-lace-detailed-navy-blue-hijab-dress-8015l-evening-dresses-neva-style-48228-10-B.jpg">
						<img src="..\IMAGE\evening-dress-lace-detailed-navy-blue-hijab-dress-8015l-evening-dresses-neva-style-48228-10-B.jpg" alt="John" class="m" ></a>
				  <div class="container">
					  <input type="text" name="id" id="id" hidden="true" value="3">
					<h2><?php $sql="SELECT Name FROM model WHERE idmodel=3";
						$stmt=$conn->query($sql);
						$row=$stmt->fetch(PDO::FETCH_ASSOC);
						echo($row['Name']); ?></h2>
					<label>Choose Color :</label>
					  <select name="color" class="custom-select-sm">
						  <?php
						  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=3";
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
						  require_once("connection.php");
						  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=3";
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
					  $sql="SELECT price FROM model WHERE idmodel=3";
					  $stmt=$conn->query($sql);
					  $row=$stmt->fetch(PDO::FETCH_ASSOC);
					  echo($row['price']."$");
					?>
					<p><input type="submit" value="Buy" name="buy" class="btn btn-danger"></p>
				  </div>
				</div>
			  </form>
		  </div>

			 <div class="col">
				 <form method="post">
				<div class="card">
				  <a target="_blank" href="..\IMAGE\dugmeli-kot-tunik-ms3280-acik-mavi-tunk-tesettr-dnyas-32399-62-B-620x945.jpg">
					  <img src="..\IMAGE\dugmeli-kot-tunik-ms3280-acik-mavi-tunk-tesettr-dnyas-32399-62-B-620x945.jpg" alt="Mike" class="m"></a>
				  <div class="container">
					  <input type="text" name="id" id="id" hidden="true" value="4">
					<h2><?php $sql="SELECT Name FROM model WHERE idmodel=4";
						$stmt=$conn->query($sql);
						$row=$stmt->fetch(PDO::FETCH_ASSOC);
						echo($row['Name']); ?></h2>
					<label>Choose Color :</label>
					  <select name="color" class="custom-select-sm">
						  <?php
						  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=4";
						  $stmt = $conn->query($sql);
						  $count=1;
						  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
							  echo("<option value=\"$count\">");
							  echo($row['color_color']);
							  echo("</option>");
							  $count++;
						  }
						  ?>
					  </select><br>
					  <label>Choose Size :</label>
					  <select name="size" class="custom-select-sm">
						  <?php
						  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=4";
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
					  $sql="SELECT price FROM model WHERE idmodel=4";
					  $stmt=$conn->query($sql);
					  $row=$stmt->fetch(PDO::FETCH_ASSOC);
					  echo($row['price']."$");
					?>
					<p><input type="submit" value="Buy" name="buy" class="btn btn-danger"></p>
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
				  <a target="_blank" href="..\IMAGE\5cf90fd10e3f14181ab1e2a940c8a812.jpg">
					  <img src="..\IMAGE\5cf90fd10e3f14181ab1e2a940c8a812.jpg" alt="Mike" class="m"></a>
				  <div class="container">
						  <input type="text" name="id" id="id" hidden="true" value="5">
					<h2><?php $sql="SELECT Name FROM model WHERE idmodel=5";
						$stmt=$conn->query($sql);
						$row=$stmt->fetch(PDO::FETCH_ASSOC);
						echo($row['Name']); ?></h2>
				   <label>Choose Color :</label>
					  <select name="color" class="custom-select-sm">
						  <?php
						  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=5";
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
						  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=5";
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
					  $sql="SELECT price FROM model WHERE idmodel=5";
					  $stmt=$conn->query($sql);
					  $row=$stmt->fetch(PDO::FETCH_ASSOC);
					  echo($row['price']."$");
					?>
					<p><input type="submit" value="Buy" name="buy" class="btn btn-danger"></p>
				  </div>
				</div>
				 </form>
		  </div>

			 <div class="col">
				 <form method="post">
					<div class="card">
					  <a target="_blank" href="..\IMAGE\fall-winter-formal-fashion-black-blazer-women.jpg">
						  <img src="..\IMAGE\fall-winter-formal-fashion-black-blazer-women.jpg" alt="Mike" class="m"></a>
					  <div class="container">
							  <input type="text" name="id" id="id" hidden="true" value="6">
						<h2><?php $sql="SELECT Name FROM model WHERE idmodel=6";
							$stmt=$conn->query($sql);
							$row=$stmt->fetch(PDO::FETCH_ASSOC);
							echo($row['Name']); ?></h2>
						<label>Choose Color :</label>
						  <select name="color" class="custom-select-sm">
							  <?php
							  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=6";
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
							  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=6";
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
						  $sql="SELECT price FROM model WHERE idmodel=6";
						  $stmt=$conn->query($sql);
						  $row=$stmt->fetch(PDO::FETCH_ASSOC);
						  echo($row['price']."$");
						?>
						<p><input type="submit" value="Buy" name="buy" class="btn btn-danger"></p>
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
					  <a target="_blank" href="..\IMAGE\n-inci-detayli-elbise--lacivert--insirah-434325-434325-1.jpg">
						  <img src="..\IMAGE\n-inci-detayli-elbise--lacivert--insirah-434325-434325-1.jpg" alt="Mike" class="m"></a>
					  <div class="container">
							  <input type="text" name="id" id="id" hidden="true" value="7">
						<h2><?php $sql="SELECT Name FROM model WHERE idmodel=7";
							$stmt=$conn->query($sql);
							$row=$stmt->fetch(PDO::FETCH_ASSOC);
							echo($row['Name']); ?></h2>
					   <label>Choose Color :</label>
						  <select name="color" class="custom-select-sm">
							  <?php
							  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=7";
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
							  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=7";
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
						  $sql="SELECT price FROM model WHERE idmodel=7";
						  $stmt=$conn->query($sql);
						  $row=$stmt->fetch(PDO::FETCH_ASSOC);
						  echo($row['price']."$");
						?>
						<p><input type="submit" value="Buy" name="buy" class="btn btn-danger"></p>
					  </div>
					</div>
				 </form>
		  </div>

			 <div class="col">
				 <form method="post">
					<div class="card">
					  <a target="_blank" href="..\IMAGE\c90cc3b8be9ab6707043aba62e07b279.jpg">
						  <img src="..\IMAGE\c90cc3b8be9ab6707043aba62e07b279.jpg" alt="Mike" class="m"></a>
					  <div class="container">
							  <input type="text" name="id" id="id" hidden="true" value="8">
						<h2><?php $sql="SELECT Name FROM model WHERE idmodel=8";
							$stmt=$conn->query($sql);
							$row=$stmt->fetch(PDO::FETCH_ASSOC);
							echo($row['Name']); ?></h2>
						<label>Choose Color :</label>
						  <select name="color" class="custom-select-sm">
							  <?php
							  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=8";
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
							  require_once("connection.php");
							  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=8";
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
						  $sql="SELECT price FROM model WHERE idmodel=8";
						  $stmt=$conn->query($sql);
						  $row=$stmt->fetch(PDO::FETCH_ASSOC);
						  echo($row['price']."$");
						?>
						<p><input type="submit" value="Buy" name="buy" class="btn btn-danger"></p>
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
					  <a target="_blank" href="..\IMAGE\1cb9b8b680e51d011bd37de9a50d82f7.jpg">
						  <img src="..\IMAGE\1cb9b8b680e51d011bd37de9a50d82f7.jpg" alt="Mike" class="m"></a>
					  <div class="container">
							  <input type="text" name="id" id="id" hidden="true" value="9">
						<h2><?php $sql="SELECT Name FROM model WHERE idmodel=9";
							$stmt=$conn->query($sql);
							$row=$stmt->fetch(PDO::FETCH_ASSOC);
							echo($row['Name']); ?></h2>
						<label>Choose Color :</label>
						  <select name="color" class="custom-select-sm">
							  <?php
							  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=9";
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
							  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=9";
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
						  $sql="SELECT price FROM model WHERE idmodel=9";
						  $stmt=$conn->query($sql);
						  $row=$stmt->fetch(PDO::FETCH_ASSOC);
						  echo($row['price']."$");
						?>
						<p><input type="submit" value="Buy" name="buy" class="btn btn-danger"></p>
					  </div>
					</div>
				 </form>
		  </div>

			 <div class="col">
				 <form method="post">
					<div class="card">
					  <a target="_blank" href="..\IMAGE\fashion-veiled-turkish-2019-4.jpg">
						  <img src="..\IMAGE\fashion-veiled-turkish-2019-4.jpg" alt="Mike" class="m"></a>
					  <div class="container">
							  <input type="text" name="id" id="id" hidden="true" value="10">
						<h2><?php $sql="SELECT Name FROM model WHERE idmodel=10";
							$stmt=$conn->query($sql);
							$row=$stmt->fetch(PDO::FETCH_ASSOC);
							echo($row['Name']); ?></h2>
						<label>Choose Color :</label>
						  <select name="color" class="custom-select-sm">
							  <?php
							  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=10";
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
							  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=10";
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
						  $sql="SELECT price FROM model WHERE idmodel=10";
						  $stmt=$conn->query($sql);
						  $row=$stmt->fetch(PDO::FETCH_ASSOC);
						  echo($row['price']."$");
						?>
						<p><input type="submit" value="Buy" name="buy" class="btn btn-danger"></p>
					  </div>
					</div>
				 </form>
		  </div>
				<div class="col"></div>
			</div>
			
	
	</div>
</body>
</html>