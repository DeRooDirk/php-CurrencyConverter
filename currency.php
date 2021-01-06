<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>currency</title>
</head>
<body>
	<div class="container">
		<div>
		<img src="./pngwing.com.png" alt="">
		</div>
		<form  action="currency.php" method="GET">
			<h1>  Currency Converter</h1>
			<h2>Enter Currency : <input type="text" name="input"></h2>
			<h2>Select Currency:<select name= "dropdown"></h2>
				<option value="usd">Us Dollars</option>
				<option value="yen">Yen</option>
				<option value="gdp">British Pounds</option>
			</select>
			<div class="btndiv">
			<input  class="btn "type="submit" name="sbmt" value="convert to euro's">
			</div>
			<?php
if (isset($_GET['sbmt']))
{
	$input = $_GET['input'];
	$dd_dropdown =$_GET['dropdown'];
	if($dd_dropdown=='usd'){
		$dd_output =$input * 0.81;
		echo "<h3>$input dollars converts to $dd_output  euro</h3>";
		
	}
	else if($dd_dropdown =='yen'){
		$dd_output =$input * 0.0079;
		echo "<h3>$input yen converts to $dd_output  euro</h3>";
	}
	else if ($dd_dropdown=='gdp'){
		$dd_output =$input * 1.1;
		echo "<h3>$input pounds converts to $dd_output  euro</h3>";
	}	
}
?>
	</div>

</body>
</html>

