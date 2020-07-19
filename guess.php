<!DOCTYPE html>
<html lang="en">
<head>
	<title>Guessing game!</title>
	<meta charset="utf-8">
</head>
<body style="background-color: thistle;">
<div  style="box-sizing: border-box;width: 60%;
height: 60%;background-color: #08ede5;align-self: center;">
  <h1>welcome! to my gussing game:</h1>
<h2>
	<em>lets checkout your <b>luck!</b></em>
</h2>
<h3>guess any no. from 11 to 99</h3>
<?php
$goodtext = "";
$guess = "";
$code = "";
$no = range(11 , 99);
$no1 = array_rand($no,1);
$guess = $no[$no1];
if (isset($_GET['code'])) {
  $code = $_GET['code'];
}
$gue = abs( $guess -$code);
if ($guess==$code) {
  $goodtext = "wow! you made a perfect guess.";
}
elseif ($gue <= 5) {
$goodtext = "ooops! you guessed to close but not correct.";
}
elseif ($gue <= 10) {
  $goodtext = "close! but not too close.";
}
elseif ($gue <= 20) {
$goodtext = "your guess is too far";
}
elseif ($gue <= 100) {
$goodtext = "take a another change to test your luck!";
}
else {
  $goodtext = "please! select only 2 digit numeric value.";
}
 ?>

<h1 style="color: red;">result:<?= htmlentities($goodtext);?></h1>
<h2 style="color: #ed9508;">guessed no.:<?= htmlentities($guess);?></h2>
<h2 style="color: #ed9508;">you gussed:<?= htmlentities($code);?></h2>
<form>
	<input type="text" name="code" size="40">
	<input type="submit" name="submit">
	<input type="reset" name="reset">
</form>
</div>
</body>
</html>
