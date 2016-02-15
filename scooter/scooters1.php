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
// Alles in PHP-mode. Met uitsluitend enkele aanhalingstekens (') rondom letterlijke tekst, 
// verder mag je gebruiken: de collator (.) en chr() voor tabs en new-lines
 } ?>
	</table>
</body>
</html>