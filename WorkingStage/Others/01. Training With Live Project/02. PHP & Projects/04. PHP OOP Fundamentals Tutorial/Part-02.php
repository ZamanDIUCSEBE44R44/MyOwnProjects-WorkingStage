<?php 
include 'function.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
		<form action="" method="post">
			<table>
				<tr>
					<td>Enter the first Number : </td>
					<td><input type="number" name="num1" /></td>
				</tr>
				
				<tr>
					<td>Enter the Second Number : </td>
					<td><input type="number" name="num2" /></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="calculation" value="Calculate" /></td>
				</tr>
			</table>
		</form>

</body>
</html>
<?php 
if(isset($_POST['calculation'])){
	$numOne = $_POST['num1'];
	$numTwo = $_POST['num2'];
	if(empty($numOne) or empty($numTwo)){
		echo "<span style='color:green'>Field must not be empty</span><br />";
	}else{
		echo "First Number is : ".$numOne." Second Number is : ".$numTwo."<br />";
		$cal= new Calculation;
		$cal->add($numOne,$numTwo);
		$cal->sub($numOne,$numTwo);
		$cal->mul($numOne,$numTwo);
		$cal->div($numOne,$numTwo);		
	}	
}


?>
