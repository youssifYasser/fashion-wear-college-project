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
		<title>Children Section</title>
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
					  <a class="dropdown-item" href="../PHP/men.php">Men Section</a>
						<div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="../PHP/women.php">Women Section</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item active" href="../PHP/child.php">Children Section</a>
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
					  <a target="_blank" href="../IMAGE/02+(2).jpg">
						  <img src="../IMAGE/02+(2).jpg" alt="Ralph Lauren" class="m" ></a>
					  <div class="container">
						  <input type="text" name="id" id="id" hidden="true" value="21">
						<h2><?php $sql="SELECT Name FROM model WHERE idmodel=21";
							$stmt=$conn->query($sql);
							$row=$stmt->fetch(PDO::FETCH_ASSOC);
							echo($row['Name']); ?></h2>
						  <label>Choose Color :</label>
						  <select name="color" class="custom-select-sm">
							  <?php

							  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=21";
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

							  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=21";
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
						  $sql="SELECT price FROM model WHERE idmodel=21";
						  $stmt=$conn->query($sql);
						  $row=$stmt->fetch(PDO::FETCH_ASSOC);
						  echo($row['price']."$");
						?>
						<p><input type="submit" value="Buy" name="buy" class="btn btn-info"></p>

					  </div>
					</div>
			  </form>
		  </div>
		  <div class="col">
			  <form method="post">
					<div class="card">
					  <a target="_blank" href="../IMAGE/03.jpg">
						  <img src="../IMAGE/03.jpg" alt="Mike" class="m"></a>
					  <div class="container">
						  <input type="text" name="id" id="id" hidden="true" value="22">
						<h2><?php $sql="SELECT Name FROM model WHERE idmodel=22";
							$stmt=$conn->query($sql);
							$row=$stmt->fetch(PDO::FETCH_ASSOC);
							echo($row['Name']); ?></h2>
						<label>Choose Color :</label>
						  <select name="color" class="custom-select-sm">
							  <?php

							  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=22";
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

							  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=22";
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
						  $sql="SELECT price FROM model WHERE idmodel=22";
						  $stmt=$conn->query($sql);
						  $row=$stmt->fetch(PDO::FETCH_ASSOC);
						  echo($row['price']."$");
						?>
						<p><input type="submit" value="Buy" name="buy" class="btn btn-info"></p>
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
						<a target="_blank" href="../IMAGE/2255c9989bcd84974c4b65e4a47cd65e.jpg">
							<img src="../IMAGE/2255c9989bcd84974c4b65e4a47cd65e.jpg" alt="John" class="m" ></a>
					  <div class="container">
						  <input type="text" name="id" id="id" hidden="true" value="23">
						<h2><?php $sql="SELECT Name FROM model WHERE idmodel=23";
							$stmt=$conn->query($sql);
							$row=$stmt->fetch(PDO::FETCH_ASSOC);
							echo($row['Name']); ?></h2>
						<label>Choose Color :</label>
						  <select name="color" class="custom-select-sm">
							  <?php

							  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=23";
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

							  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=23";
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
						  $sql="SELECT price FROM model WHERE idmodel=23";
						  $stmt=$conn->query($sql);
						  $row=$stmt->fetch(PDO::FETCH_ASSOC);
						  echo($row['price']."$");
						?>
						<p><input type="submit" value="Buy" name="buy" class="btn btn-info"></p>
					  </div>
					</div>
			  </form>
		  </div>

			 <div class="col">
				 <form method="post">
					<div class="card">
					  <a target="_blank" href="../IMAGE/59704-5097780-_MG_9078.jpg">
						  <img src="../IMAGE/59704-5097780-_MG_9078.jpg" alt="Mike" class="m"></a>
					  <div class="container">
						  <input type="text" name="id" id="id" hidden="true" value="24">
						<h2><?php $sql="SELECT Name FROM model WHERE idmodel=24";
							$stmt=$conn->query($sql);
							$row=$stmt->fetch(PDO::FETCH_ASSOC);
							echo($row['Name']); ?></h2>
						<label>Choose Color :</label>
						  <select name="color" class="custom-select-sm">
							  <?php

							  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=24";
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

							  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=24";
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
						  $sql="SELECT price FROM model WHERE idmodel=24";
						  $stmt=$conn->query($sql);
						  $row=$stmt->fetch(PDO::FETCH_ASSOC);
						  echo($row['price']."$");
						?>
						<p><input type="submit" value="Buy" name="buy" class="btn btn-info"></p>
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
					  <a target="_blank" href="../IMAGE/boy-children-summer-sets-t-shirts-pants-clothes.jpg">
						  <img src="../IMAGE/boy-children-summer-sets-t-shirts-pants-clothes.jpg" alt="Mike" class="m"></a>
					  <div class="container">
						  <input type="text" name="id" id="id" hidden="true" value="25">
						<h2><?php $sql="SELECT Name FROM model WHERE idmodel=25";
							$stmt=$conn->query($sql);
							$row=$stmt->fetch(PDO::FETCH_ASSOC);
							echo($row['Name']); ?></h2>
					   <label>Choose Color :</label>
						  <select name="color" class="custom-select-sm">
							  <?php

							  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=25";
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

							  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=25";
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
						  $sql="SELECT price FROM model WHERE idmodel=25";
						  $stmt=$conn->query($sql);
						  $row=$stmt->fetch(PDO::FETCH_ASSOC);
						  echo($row['price']."$");
						?>
						<p><input type="submit" value="Buy" name="buy" class="btn btn-info"></p>
					  </div>
					</div>
				 </form>
		  </div>

			 <div class="col">
				 <form method="post">
					<div class="card">
						<a target="_blank" href="../IMAGE/fashion-boy-039-s-suit-toddler-kids-baby.jpg">
					  <img src="../IMAGE/fashion-boy-039-s-suit-toddler-kids-baby.jpg" alt="Mike" class="m"></a>
						<div class="container">
							<input type="text" name="id" id="id" hidden="true" value="26">
					<h2><?php $sql="SELECT Name FROM model WHERE idmodel=26";
						$stmt=$conn->query($sql);
						$row=$stmt->fetch(PDO::FETCH_ASSOC);
						echo($row['Name']); ?></h2>
					<label>Choose Color :</label>
					  <select name="color" class="custom-select-sm">
						  <?php

						  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=26";
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

						  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=26";
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
					  $sql="SELECT price FROM model WHERE idmodel=26";
					  $stmt=$conn->query($sql);
					  $row=$stmt->fetch(PDO::FETCH_ASSOC);
					  echo($row['price']."$");
					?>
					<p><input type="submit" value="Buy" name="buy" class="btn btn-info"></p>
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
			  <a target="_blank" href="../IMAGE/kids-cycle-image (1).jpg">
				  <img src="../IMAGE/kids-cycle-image (1).jpg" alt="Mike" class="m"></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="27">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=27";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
			   <label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php
					  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=27";
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
					  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=27";
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
				  $sql="SELECT price FROM model WHERE idmodel=27";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-info"></p>
			  </div>
			</div>
				 </form>
		  </div>

			 <div class="col">
				 <form method="post">
			<div class="card">
			  <a target="_blank" href="../IMAGE/Kids-Fashion-for-2017-5.jpg">
				  <img src="../IMAGE/Kids-Fashion-for-2017-5.jpg" alt="Mike" class="m"></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="28">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=28";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
				<label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php
					  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=28";
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
					  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=28";
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
				  $sql="SELECT price FROM model WHERE idmodel=28";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-info"></p>
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
			  <a target="_blank" href="../IMAGE/Nadja_Pollack_Kids_fashion_photographer_Amsterdam_girl_flowers_neck_2_.jpg">
				  <img src="../IMAGE/Nadja_Pollack_Kids_fashion_photographer_Amsterdam_girl_flowers_neck_2_.jpg" alt="Mike" class="m"></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="29">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=29";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
				<label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php
					  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=29";
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
					  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=29";
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
				  $sql="SELECT price FROM model WHERE idmodel=29";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-info"></p>
			  </div>
			</div>
				 </form>
		  </div>

			 <div class="col">
				 <form method="post">
			<div class="card">
			  <a target="_blank" href="../IMAGE/pwo.jpg">
				  <img src="../IMAGE/pwo.jpg" alt="Mike" class="m"></a>
			  <div class="container">
				  <input type="text" name="id" id="id" hidden="true" value="30">
				<h2><?php $sql="SELECT Name FROM model WHERE idmodel=30";
					$stmt=$conn->query($sql);
				  	$row=$stmt->fetch(PDO::FETCH_ASSOC);
				  	echo($row['Name']); ?></h2>
				<label>Choose Color :</label>
				  <select name="color" class="custom-select-sm">
					  <?php
					  
					  $sql="SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=30";
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
					  
					  $sql="SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=30";
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
				  $sql="SELECT price FROM model WHERE idmodel=30";
				  $stmt=$conn->query($sql);
				  $row=$stmt->fetch(PDO::FETCH_ASSOC);
				  echo($row['price']."$");
				?>
				<p><input type="submit" value="Buy" name="buy" class="btn btn-info"></p>
			  </div>
			</div>
				 </form>
		  </div>
				<div class="col"></div>
			</div>
			

	</div>

</body>
</html>

