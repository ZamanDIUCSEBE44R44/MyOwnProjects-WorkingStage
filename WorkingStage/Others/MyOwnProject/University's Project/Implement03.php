<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Tutorial</title>
	

</head>
<body>
If, If else Statement in PHP
<hr />
<?php 
if(isset($_POST['username'])){
	$username= $_POST['username'];
	echo "Username is : ".$username;
	
}
?>
	<form action="" method="post" name="myform" id="myform">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required="1" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"/></td>
				<td><input type="reset" value="Clear"/></td>
			</tr>
		</table>	
	</form>

	
	<?php
 	if($username==5)
	{
		echo "Yes This is equal to 5";
	}
	else
	{
		echo "Yes This is not equal to 5";
	}
	?>



	
	
<hr /><a href="E011P01Jun17.php">E011P01Jun17</a>
</body>
</html>