<?php
	require_once("connection.php");
	$w=0;
	$id_price = $conn->query( "SELECT * FROM model");
	echo("<center>");
	echo("<table border='1px' class='t t3'>");
	echo("<tr><td> ID Model</td><td>Price</td></tr>");
	while($row = $id_price->fetch(PDO::FETCH_ASSOC))
	{ 
		echo("<tr class='t2'><td class='t2' colpan='3'>");
		echo($row['idmodel']);
		echo("</td><td class='t2' colspan='3'>");
		echo($row['price']);
		echo("</td></tr>");
	
	}
	echo("</table>");


	$count = $conn->query("SELECT COUNT(idmodel) FROM model");
	$c=$count->fetch(PDO::FETCH_ASSOC);

	for($i=1 ; $i<=$c['COUNT(idmodel)'] ; $i++){
		$infc[]=$conn->query("SELECT DISTINCT color_color FROM model_has_info WHERE model_idmodel=$i");
		$infs[]=$conn->query("SELECT DISTINCT size_size FROM model_has_info WHERE model_idmodel=$i");
		$infqs[]=$conn->query("SELECT SUM(quantity_quantity) FROM model_has_info WHERE model_idmodel =$i AND size_size = 'sm'");
		$infql[]=$conn->query("SELECT SUM(quantity_quantity) FROM model_has_info WHERE model_idmodel =$i AND size_size = 'lg'");
		$infqm[]=$conn->query("SELECT SUM(quantity_quantity) FROM model_has_info WHERE model_idmodel =$i AND size_size = 'md'");
		$infqx[]=$conn->query("SELECT SUM(quantity_quantity) FROM model_has_info WHERE model_idmodel =$i AND size_size = 'xl'");
		
	}

echo("<table border='1px' class='t t4'>");
echo("<tr><td> <center>COLORS</center></td><td> <center>Size</center></td><td> <center>Quantity</center></td></tr>");
	for($t=0;$t<$c['COUNT(idmodel)'];$t++)
		{
			echo("<tr><td>");
		while($color= $infc[$t]->fetch(PDO::FETCH_ASSOC))
		{
			 echo($color['color_color']);
			echo (" , ");
			
		}
		echo("</td>");
			echo("<td>");
		while($size= $infs[$t]->fetch(PDO::FETCH_ASSOC))
		{
			 echo($size['size_size']);
			echo("<br>------------<br>");
			
		}
		echo("</td>");
			echo("<td>");
		while($qs= $infqs[$t]->fetch(PDO::FETCH_ASSOC))
		{
			 echo($qs['SUM(quantity_quantity)']);
			echo("<br>------------<br>");
			
		}
		
		while($ql= $infql[$t]->fetch(PDO::FETCH_ASSOC))
		{
			 echo($ql['SUM(quantity_quantity)']);
			echo("<br>------------<br>");
			
		}
		
		while($qm= $infqm[$t]->fetch(PDO::FETCH_ASSOC))
		{
			 echo($qm['SUM(quantity_quantity)']);
			echo("<br>------------<br>");
			
		}
		
		while($qx= $infqx[$t]->fetch(PDO::FETCH_ASSOC))
		{
			 echo($qx['SUM(quantity_quantity)']);
			echo("<br>------------<br>");
			
		}
		echo("</td></tr>");
		}
echo("</table>");

echo("</center>");
						 
					
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show Model</title>
	<link rel="stylesheet" href="../CSS/showmodel.css">
</head>

<body>
</body>
</html>
