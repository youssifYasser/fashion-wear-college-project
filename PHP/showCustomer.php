<?php
require_once("connection.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show Customer</title>
	<link rel="stylesheet" href="../CSS/showmodel.css">
</head>

<body>
	<?php
	$stmt = $conn->query("SELECT * FROM customer");
	echo("<center>");
	echo "<table border='2px' class='t'>";
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	# code...
	echo "<tr><td>";
	echo ($row['id']);
	echo "</td><td>";
	echo ($row['fname']);
	echo"</td><td>";
	echo ($row['lname']);
	echo"</td><td>";
	echo($row['email']);
	echo"</td><td>";
	echo($row['phone']);
	echo('</td></tr>');
	}
	echo "</table>";
	echo("</center>");
	?>
</body>
</html>