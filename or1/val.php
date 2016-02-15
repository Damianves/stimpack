<?php
$operator='+';
$answer = $_POST['answer'];
$getal1 = $_POST['getal1'];
$getal2 = $_POST['getal2'];




$antwoord=false;

if ($operator == '+') {
	$antwoord=$getal1+$getal2;
}

if ($answer == $antwoord) {
	$gelukt = true;
}
else
{
	$gelukt = false;
}

if ($gelukt == true) {
	$text ='goedzo';
}
else 
{
	$text='jammer';
}

$som =$getal1 .$operator. $getal2.'='.$antwoord;
?>



<!DOCTYPE html>
<html>
<head>
	<title>antwoord</title>
<style>
	div{
	width: 500px;
	border:5px black solid;
	margin-left: auto;
	margin-right: auto;
	}
	h1{
		font-size: 20px;
	}

	p{
		margin: 5px;
	}
</style>
</head>
<body>
	<div class="up">
		<p><?php echo $text;?></p><br>
		<p><?php echo $som;?></p>
		<h1><a href="http://localhost/sp/or1/som.php">klik voor een nieuwe som </h1>
	</div>
</body>
</html>