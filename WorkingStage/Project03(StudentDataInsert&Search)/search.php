<?php 
$output= NULL;

	if(isset($_POST['submit']))
	{
		//Connect to Database
		$mysqli= NEW MySQLi("localhost","root","","student_info");
		$search = $mysqli->real_escape_string($_POST['search']);
		
		//Query the database
		$resultset = $mysqli->query("SELECT * FROM accounting WHERE username LIKE '$search%' ");
		if($resultset->num_rows > 0)
		{
			while($rows = $resultset->fetch_assoc())
			{				
				$username = $rows['username'];
				$password =  $rows['password'];
				$name = $rows['name'];

				$output .= "Username is: $username<br />Password is: $password <br />Name is: $name <br />";
			}
		}
		else
		{
			$output=  "No Result";
		}
	}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>ZamanWebEducation</title>
	<style type="text/css">
	.phpcoding{ width:900px; margin: 0 auto; background:<?php echo "#ddd";?>;  min-height:400px; }
	.headeroption, .footeroption{background:#444; color:#fff; text-align:center;padding:20px}
	.headeroption h2, .footeroption h2{margin:0}
	.maincontent{min-height: 400px; padding:20px;}
	</style>	
</head>
	<body>
		<div class="phpcoding">
			<Section class="headeroption">
				<h2><?php echo "This is My Own First Creative Project.<br />Data Search Program.";?></h2>
			</section>
			<section class="maincontent">
				<form method="POST">
					<input type="TEXT" name="search" />
					<input type="submit" name="submit" value="Search" />
				</form>
				<?php echo $output;?>
				
				
			</section>
			<section class="footeroption">
				<h2><?php echo "ZamanIT.com"?></h2>
				<h2><a href="P04PHPVariables.php">Next Exercise is P04PHPVariables.php</a></h2>
			</section>
		</div>	
	</body>
</html>
