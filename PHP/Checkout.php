<?php
require_once("connection.php");
session_start();
$itemId=!empty($_SESSION["Itemid"]) ? $_SESSION["Itemid"]:"";
$itemColor=!empty($_SESSION["itemColor"]) ? $_SESSION["itemColor"]:"";
$itemSize=!empty($_SESSION["itemSize"]) ? $_SESSION["itemSize"]:"";
$stm =$conn->query("SELECT color FROM color WHERE colorID='$itemColor'");
if($row = $stm->fetch(PDO::FETCH_ASSOC)){
	$_SESSION["itemColor"]=$row['color'];
}
$stm =$conn->query("SELECT size FROM size WHERE sizeID='$itemSize'");
if($row = $stm->fetch(PDO::FETCH_ASSOC)){
	$_SESSION["itemSize"]=$row['size'];
}
$stm = $conn->query("SELECT Name, price FROM model WHERE idmodel= '$itemId'");
if($row = $stm->fetch(PDO::FETCH_ASSOC)){
	$_SESSION["itemName"]=$row['Name'];
	$_SESSION["itemPrice"]=$row['price'];
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Checkout</title>
	<link rel="icon" href="../IMAGE/Logo.PNG">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="../CSS/login.css">
	
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
	<div class="main">
		<form method="post">
			<h2 class="ml-3">Account Info : </h2>
			<div class="col-md-12 mb-3">
				<label for="name">User Name : </label>
				<input type="text" id="name" class="form-control" value='<?php if(!empty($_SESSION["username"])) echo($_SESSION["username"]); else echo(" "); ?>' disabled>
			</div>
			
			<div class="col-md-12 mb-3">
				<label for="email">Email : </label>
				<input type="text" id="email" class="form-control"  value='<?php if(!empty($_SESSION["userEmail"])) echo($_SESSION["userEmail"]); else echo(" "); ?>' disabled>
			</div>

			<div class="col-md-12 mb-3">	
				<label for="phone">Phone Number : </label>
				<input type="text" id="phone" class="form-control"  value='<?php if(!empty($_SESSION["userPhone"])) echo($_SESSION["userPhone"]); else echo(" "); ?>' disabled>
			</div>
			
			<div class="col-md-12 mb-3">	
				<label for="phone">Address : </label>
				<input type="text" id="address" class="form-control"  value='<?php if(!empty($_SESSION["userAddress"])) echo($_SESSION["userAddress"]); else echo(" "); ?>' disabled>
			</div>
			
			<hr class="mb-3 ml-5 mr-5">
			
			<h2 class="ml-3">Model Info : </h2>	
			<div class="col-md-12 mb-3">
				<label for="modelName">Model Name : </label>
				<input type="text" id="modelName" class="form-control"  value='<?php if(!empty($_SESSION["itemName"])) echo($_SESSION["itemName"]); else echo(" "); ?>' disabled>
			</div>
				
			<div class="col-md-12 mb-3">
				<label for="color">Color : </label>
				<input type="text" id="color" class="form-control"  value='<?php if(!empty($_SESSION["itemColor"])) echo($_SESSION["itemColor"]); else echo(" "); ?>' disabled>
			</div>

			<div class="col-md-12 mb-3">
				<label for="size">Size : </label>
				<input type="text" id="size" class="form-control"  value='<?php if(!empty($_SESSION["itemSize"])) echo($_SESSION["itemSize"]); else echo(" "); ?>' disabled>
			</div>
			
			<div class="col-md-12 mb-3">
				<label for="price">Price : </label>
				<input type="text" id="price" class="form-control"  value='<?php if(!empty($_SESSION["itemPrice"])) echo($_SESSION["itemPrice"]); else echo(" "); ?>' disabled>
			</div>
			
			<div class="col-md-12 mb-3">
				<input type="submit" id="checkout" name="checkout" class="btn btn-primary btn-block btn-lg" value="Checkout!!">
			</div>
		</form>
	</div>
	
</body>
<?php
$flag=0;
if(isset($_POST['checkout'])){
	$color=!empty($_SESSION["itemColor"]) ? $_SESSION["itemColor"] : "";
	$size=!empty($_SESSION["itemSize"]) ? $_SESSION["itemSize"]:"";
	global $flag;
	$stmt=$conn->query("SELECT quantity_quantity FROM model_has_info WHERE color_color='$color' AND size_size='$size' AND model_idmodel='$itemId'");
	if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		if($row['quantity_quantity']==0){
			$flag=1;
		}
		else{
			$quantity=strval(intval($row['quantity_quantity'])-1);
			$stmt=$conn->query("UPDATE model_has_info SET quantity_quantity='$quantity' WHERE color_color='$color' AND size_size='$size' AND model_idmodel='$itemId'");
			$flag=2;
			}
		}
	}
	
?>
	<script type="text/javascript">
		var flag = "<?php echo $flag ?>";
		if(flag ==1){
			alert("sorry item with this specs is OUT OF STOCK");
		}
		else if(flag==2){
			alert("CONGRATULATIONS!!");
		}
	</script>
</html>	