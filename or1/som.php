<?php 

$getal1 = rand(1,100);
$getal2 = rand (1,100);
$operator='+';

$som =$getal1 .$operator. $getal2.'=';
?>

<!DOCTYPE html>
<html>
<head>
	<title>sommen oefenen</title>
<style>
	div{
		width: 500px;
		border:5px black solid;
		margin-left: auto;
		margin-right: auto;
	}

	input{
	margin: 5px;
	width: 120px;
	font-size: 20px;
	}

	label{
	font-size: 50px;	
	}

	h1{
		font-size: 50px;
	}
</style>
</head>
<body>
<div class="up">
	<h1><?php echo $som; ?></h1><br>

	<form action="val.php" method="POST">
		<label>Antwoord<input type="text" name="answer"></label><br>
		<input type="hidden" name="getal1" value="<?php echo $getal1;?>">
		<input type="hidden" name="getal2" value="<?php echo $getal2;?>">
		<input type="submit" name="submit">
	</form>
</div>

</body>
</html>


