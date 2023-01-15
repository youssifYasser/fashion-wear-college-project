<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Add Employee</title>
	<link rel="icon" href="../IMAGE/Logo.PNG">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="../CSS/NewEmp.css">
</head>

<body>
	<div class="row main">
		<div class="col-md-12 order-md-1">
		  <form class="needs-validation" method="post" >
			  <div class="mb-3">
				<label for="firstName">Name</label>
				<input type="text" class="form-control" id="Name" name="Name" placeholder="" value=""  required>
				<div class="invalid-feedback">
				  Valid Name is required.
				</div>
			  </div> 
			<hr class="mb-4">
			<div class="mb-3">
			  <label for="phone">Phone Number</label>
			  <input type="text" class="form-control" id="phone" name="phone" required>
			  <div class="invalid-feedback">
				Please enter a valid Phone Number for shipping updates.
			  </div>
			</div>  
			<hr class="mb-4">
			<div class="mb-3">
			  <label for="Address">Address</label>
			  <input type="text" class="form-control" id="Address" placeholder="1234 Main St" name="Address" required>
			  <div class="invalid-feedback">
				Please enter your shipping address.
			  </div>
			</div>
			  <hr class="mb-4">
			<div class="mb-4">
				<label for="branch_id">Select Branch : </label>
				<select class="custom-select-sm" id="branch_id" name="branch_id">
					<option value="1">Nasr City</option>
					<option value="2">El Dokki</option>
					<option value="3">El Maadi</option>
					<option value="4">Heliopolis</option>
					<option value="5">Giza</option>
				</select>		
			</div> 
			<button class="btn btn-info btn-lg btn-block" type="submit" name="add" onClick="ValidateEmp()">Add Employee</button>
		</form>
		</div>
	</div>
	
	<script type="text/javascript">
		function ValidateEmp(){
			var name=document.getElementById("Name").value;
			var phone=document.getElementById("phone").value;
			var address=document.getElementById("Address").value;
			var branch_id=document.getElementById("branch_id").value;
			if(name != "" && phone != "" && address != "" && branch_id != "0"){
				var i = <?php
							require_once("connection.php");
							if(!empty($_POST['branch_id']) && !empty($_POST['Name']) && !empty($_POST['Address']) && !empty($_POST['phone'])){
								$branchID=strval($_POST['branch_id']);
								$name=strval($_POST['Name']);
								$address=strval($_POST['Address']);
								$phone=strval($_POST['phone']);
								$sql="INSERT INTO emp(Name, Address, phone, branchID) VALUES(:name,:add,:phone,:branch)";
								$stmt=$conn->prepare($sql);
								$stmt->execute(array(
									':name'=>$name,
									':add'=>$address,
									':phone'=>$phone,
									':branch'=>$branchID));
							} else{
								return;
							}
						?>
					document.write(i);
			}
			else{
				alert("please insert all information");
			}
		}
	</script>
	
	

</body>
</html>
