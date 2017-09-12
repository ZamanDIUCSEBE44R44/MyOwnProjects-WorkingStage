<?php
//Connect to Database
$connection=mysqli_connect("localhost","root","","student_info");
	if(!$connection)
	{
		die("database connection error");
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>ZamanWebEducation</title>
	<style type="text/css">
	.phpcoding{ width:900px; margin: 0 auto; background:<?php echo "#ddd";?>;  min-height:400px; }
	.headeroption, .footeroption{background:#444; color:#ffff; text-align:center;padding:20px}
	.headeroption h2, .footeroption h2{margin:0}
	.maincontent{min-height: 400px; padding:20px;}
	</style>	
</head>
	<body>
		<div class="phpcoding">
			<Section class="headeroption">
				<h2><?php echo "This is My Own First Creative Project.</br>Data Insert Program";?></h2>
			</section>
			<section class="maincontent">
			For Search and display MySQL data on your PHP page cleck here <a href="search.php">Search</a>
			<hr />

					<form action="" method="post">
						<p>User Name: <br /> <input type="text" name="username" id="" /> </p>
						<p>Password: <br /> <input type="password" name="password" id="" /> </p>
						<p>Name: <br /> <input type="text" name="name" id="" /> </p>
						<input type="submit" value="submit" name="submit"/>
	
		</form>
		<?php 
		//Insert Form Data Into MYSQL Database Using PHP
		if(isset($_POST['submit'])){
			
				$username= $_POST['username'];
				$password= $_POST['password'];
				$name= $_POST['name'];
				//echo $investing_date;
				//echo $fittings;
				//echo $amount_of_money;
				$insert="insert into accounting(username,password,name)values('".$username."','".$password."','".$name."')";
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
	
			</section>
			<section class="footeroption">
				<h2><?php echo "ZamanIT.com"?></h2>
			</section>
		</div>	
	</body>
</html>
