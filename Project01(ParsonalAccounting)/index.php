<?php
//Connect to Database
$connection=mysqli_connect("localhost","root","","money");
	if(!$connection)
	{
		die("database connection error");
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Money Manager Website</title>
	<link rel="stylesheet" href="css/style.css" />
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
						<p>Investing Date:(তারিখ) <br /> <input type="date" name="investing_date" id="" /> </p>
						<p>Fittings:(জিনিসপত্র) <br /> <input type="text" name="fittings" id="" /> </p>
						<p>Amount Of Money: (টাকার পরিমান) <br /> <input type="text" name="amount_of_money" id="" /> </p>
						<input type="submit" value="submit" name="submit"/>
	
		</form>
		<?php 
		//Insert Form Data Into MYSQL Database Using PHP
		if(isset($_POST['submit'])){
			
				$investing_date= $_POST['investing_date'];
				$fittings= $_POST['fittings'];
				$amount_of_money= $_POST['amount_of_money'];
				//echo $investing_date;
				//echo $fittings;
				//echo $amount_of_money;
				$insert="insert into maintenance(investing_date,fittings,amount_of_money)values('".$investing_date."','".$fittings."','".$amount_of_money."')";
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
