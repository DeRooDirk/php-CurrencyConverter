<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>currency</title>
</head>
<body>
<form  action="currency.php" method="GET">
Enter Currency : <input type="text" name="input">
Select Currency:<select name= "dropdown">
<option value="usd">Us Dollars</option>
<option value="yen">Yen</option>
<option value="gdp">British Pounds</option>
</select>
<input type="submit" name="sbmt" value="convert">

</body>
</html>

<?php
if (isset($_GET['sbmt']))
{
	$input = $_GET['input'];
	$dd_dropdown =$_GET['dropdown'];
	if($dd_dropdown=='usd'){
		$dd_output =$input * 1.5;
		echo  $dd_output ;
	}
	else if($dd_dropdown =='yen'){
		$dd_output =$input * 2;
		echo  $dd_output ;
	}
	else if ($dd_dropdown=='gdp'){
		$dd_output =$input * 2.5;
		echo  $dd_output ;
	}

	
}

?>