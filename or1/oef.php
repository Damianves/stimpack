<?php
$operator = $_GET['operator'];
$invul = $_GET['answer'];

$good = false;
$false = false;
$antwoord = false;

$getal1 = rand(1,100);
$getal2 = rand (1,100);




if ($operator == '+'){
$result =  $getal1 + $getal2;
}
if ($operator == '-'){
$result =  $getal1 - $getal2;
}
if ($operator == '*'){
$result =  $getal1 * $getal2;
}
if ($operator == '/'){
$result =  $getal1 / $getal2;
}

$answer= $getal1 .$operator. $getal2 .'=';

if ($invul == $antwoord) {
	$good = 'Goedzo dit is het juiste antwoord';
} 
if ($invul !== $antwoord) {
	$false='jammer';
}




 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	input{
		margin-left: 10px;
	} 
	label{
		margin-bottom: 10px;
	}

	</style>
</head>
<body>
<form action="oef.php" method="GET">
<label>Operator(+ - * /)<input type="text" name="operator" maxlength="1" placeholder="operator invoeren"></label><br>
<label>Antwoord<input type="text" name="answer"></label><br>
<input type="submit" name="submit">
</form>





<?php 
$answer= $getal1 .$operator. $getal2 .'='.$antwoord;?>

<?php
echo $good;
echo $false;

echo $answer; ?>


<!-- rand 1,4
1= +
2= - 
3= *
4= /

-->


</body>
</html>