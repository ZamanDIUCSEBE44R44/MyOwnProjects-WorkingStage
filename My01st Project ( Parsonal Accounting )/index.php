<?php
//Connect to Database
$connection=mysqli_connect("localhost","root","","parsonal");
	if(!$connection)
	{
		die("database connection error");
	}
//Insert Form Data Into MYSQL Database Using PHP
if(isset($_POST['submit'])){
	
		$investing_date= $_POST['investing_date'];
		$fittings= $_POST['fittings'];
		$amount_of_money= $_POST['amount_of_money'];
		//echo $investing_date;
		//echo $fittings;
		//echo $amount_of_money;
		$insert="insert into accounting(investing_date,fittings,amount_of_money)values('".$investing_date."','".$fittings."','".$amount_of_money."')";
// Message show on web page to conform
			$query=mysqli_query($connection, $insert);
				if($query)
					{
						echo "Data Send";
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
<h1 align="center">This is My Own First Creative Project.</h1><hr />
	<form action="" method="post">
	<p>Investing Date: <br /> <input type="date" name="investing_date" id="" /> </p>
	<p>Fittings: <br /> <input type="text" name="fittings" id="" /> </p>
	<p>Amount Of Money: (Taka) <br /> <input type="text" name="amount_of_money" id="" /> </p>
	<input type="submit" value="submit" name="submit"/>
	
	</form>
	<hr />
	For Search and display MySQL data on your PHP page cleck here <a href="search.php">Search</a>
	
</body>
</html>