<?php
require_once("connection.php");
if ( isset($_POST['delete'])) {
    $sql = "DELETE FROM emp WHERE id = :zip";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['del']));
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Employee</title>
	<link rel="stylesheet" href="../CSS/showmodel.css">
</head>

<body>
	<?php
	$stmt = $conn->query("SELECT * FROM emp");
	echo("<center>");
	echo "<table border='2px' class='t'>";
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	# code...
	echo "<tr><td>";
	echo ($row['id']);
	echo "</td><td>";
	echo ($row['Name']);
	echo"</td><td>";
	echo($row['Address']);
	echo"</td><td>";
	echo($row['phone']);
	echo('</td><td>');
	echo($row['branchID']);
	echo('</td><td>');
	//form to delete
	echo('<form method="post"><input type="hidden" ');
    echo('name="del" value="'.$row['id'].'">'."\n");
    echo('<input type="submit" value="Del" name="delete">');
    echo("\n</form>\n"); 
	//
	echo"</td></tr>";
	}
	echo "</table>";
	echo("</center>");
	?>
	
</body>
</html>