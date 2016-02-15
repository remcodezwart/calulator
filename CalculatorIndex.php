<!DOCTYPE html>

<?php
$number1 = "0";
$number2 = "0";
$operator = "+" ;
$answer = "0";
$error = "";
if($_SERVER['REQUEST_METHOD'] == 'POST')
			// logic
			if(isset($_POST['Firstnumber'])){
			$number1 = $_POST['Firstnumber'];
			}
			if(isset($_POST['secondnumber'])){
			$number2 = $_POST['secondnumber'];
			}
			if(is_numeric($number1) && is_numeric($number2)){
			if(isset($_POST['operator'])){
			$operator = $_POST['operator'];
			}
			else{
			$operator = "+" ;
			}
			if($operator == "+"){
			 $answer = $number1+$number2;
			}
			elseif($operator == "-"){
			 $answer = $number1-$number2;
			}
			elseif($operator == "x"){
			 $answer = $number1*$number2;
			}
			elseif($operator == "/" && $number1 !="0"&& $number2 !="0"){
			 $answer = $number1/$number2;
			}
			else{;
			 $error = "math error";
			}
			}
			else{
			$number1 = "0";
			$number2 = "0";
			$error = "math error";
			}
?>
<html>
<head>
<title>Calulator</title>
<link href="layout.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="calulator">
		<form action="#" method="post">
		<label>Eerste getal</label>
		<input class="margin" type="number" name="Firstnumber" maxlength="32" required>
		<label>Tweede getal</label>
		<input type="number" name="secondnumber" maxlength="32" required>
		<label>operator:+,-,x,/</label>
		<input type="text" name="operator" maxlength="1" required>
		 <label>&nbsp;</label>
				  <input type="submit" value="Versturen" />
		</form>
		<label class="output"><?php if($error != "math error"){
			echo $number1.' '.$operator.' '.$number2.' '.'='.' '.$answer;
		}
		else
			echo "math error"?>
</label>
</div>




</body>
</html>