<?php
 // Met onderstaande script bouw je een HTML-pagina op, zoals voorbeeld scooters.html. 
	require "scooters.model.php";
?>
<!doctype html>
<html>
<head>
	<title>Scooters index</title>
	<style> td,th{border:1px black solid; padding:3px;} table{border-collapse: collapse;} </style>
</head>
<body>
	<h1>Scooters</h1>
	<table>
		<tr>
			<th>View</th>
			<th>index</th>
			<th>merk</th>
			<th>model</th>
		</tr>
<?php foreach($scooters as $index => $scooter){ 

// Bouw hier de table row (zie voorbeeld in scooters.html) op met de volgende eisen:
// Zoveel mogelijk in HTML-mode. Alleen waar echt noodzakelijk in PHP-mode.
 } ?>
 <tr>
 	<td><a href="scooter.view.php?index=1">Details</a></td>
 	<td>1</td>
 	<td>Vespa</td>
 	<td>Touring LX 50</td>
 </tr>
 <tr>
 	<td><a href="scooter.view.php?index=2">Details</a></td>
 	<td>2</td>
 	<td>Vespa</td>
 	<td>GTS SuperSport 125 ABS</td>
 </tr>
 <tr>
 	<td><a href="scooter.view.php?index=3">Details</a></td>
 	<td>3</td>
 	<td>Vespa</td>
 	<td>PX 125</td>
 </tr>

	</table>
</body>
</html>