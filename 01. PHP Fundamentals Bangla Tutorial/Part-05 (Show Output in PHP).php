<?php 
$font = "verdana";
$bgcolor = "#444";//E06C1D
$fontcolor = "#F0C969"; 
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
	<style type="text/css">
	body{font-family:<?php echo $font;?>}
	.phpcoding{width:900px; margin:0 auto; background:<?php echo "#ddd";?>; }
	.headeroption, .footeroption{background:<?php echo $bgcolor;?>; color:<?php echo $fontcolor;?>;text-align:center; padding:20px;}
	.headeroption h2, .footeroption h2{margin:0px}
	.maincontent{min-height:400px; padding:20px}
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamental Training";?></h2>
		</section>
		<section class="maincontent">
		<?php
			/*echo "PHP"," Nice";
			echo "<br />";
			print "PHP is Nice";
			echo "<br />";*/
			$a = "Syed Zaman Mostafiz";
			var_dump($a);
			echo "<br />";
			$a = print("Syed Zaman Mostafiz");
			var_dump($a);
			
		?>
		<br /><a href="Part-06.1 (PHP Data Types).php">Part-06.1 (PHP Data Types)</a>
		</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section>
		
	</div>
	
</body>
</html>