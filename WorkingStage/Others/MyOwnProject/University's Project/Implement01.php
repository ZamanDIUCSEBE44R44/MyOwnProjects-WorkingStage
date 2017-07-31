<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Project</title>
</head>
<body>
GET VALUE FROM A TEXT BOX IN PHP 
<hr />
<?php 
if(isset($_POST['username'])){
	echo "Username is : ".$_POST['username'];
	
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






<br /><a href="Implement02.php" target="_blank">Implement02</a>
</body>
</html>