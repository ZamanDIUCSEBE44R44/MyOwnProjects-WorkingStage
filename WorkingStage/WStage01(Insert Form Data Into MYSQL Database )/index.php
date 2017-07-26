<?php 
//include_once('dbconnect.php');
$connection=mysqli_connect("localhost","root","","tutorial");
	if(!$connection)
	{
		die("database connection error");
	}
if(isset($_POST['submit'])){
	
		$Name= $_POST['name'];
		$Email= $_POST['email'];
		
		//echo $Name;
		//echo $Email;
		
		$insert="insert into person(name,email)values('".$Name."','".$Email."')";
			$query=mysqli_query($connection, $insert);
				if($query)
					{
						echo "Yes Data Send";
					}
				else
					{
						echo "Data Not Send !";
					}
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>MY Creativity</title>
	<style type="text/css">
	h1{
		color:blue;
	}
	</style>
</head>
<body>
<h1 align="center">Insert Form Data Into MYSQL Database </h1><hr />
<a href="">Search</a>
	<form action="" method="post">
	<p>Name: <br /> <input type="text" name="name" id="" /> </p>
	<p>Email: <br /> <input type="text" name="email" id="" /> </p>
	<input type="submit" value="submit" name="submit"/>
	
	</form>
	<hr />
	
</body>
</html>