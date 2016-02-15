
<?php
$error = false;

$answer = null;

foreach ($_GET as $value) {
	$answer += $value;
}

if (! is_numeric($value)) {
	$error=$value;
}




?>
<!DOCTYPE html>
<html>
<head>
<style>

div{
	width: 300px;
	height: 300px;
	background-color: gray;
	border:5px black solid;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 5px;
}

p{
	margin: 10px;
}
</style>
	<title></title>
</head>
<body>
<div class="count">
<p><?php echo  $answer; ?></p>
</div>

<div class="count">

<p>Couldn't count the following</p>
<p><?php
echo $error;
?></p>
</div>
</body>
</html>



