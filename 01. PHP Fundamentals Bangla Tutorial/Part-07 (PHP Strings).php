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
			$x = "PHP Strings";
			$x = "PHP is nice";
			echo $x;
			echo "<br />";
			echo strlen($x);
			echo "<br />";
			echo str_word_count($x);
			echo "<br />";
			echo strrev($x);
			echo "<br />";
			echo strpos($x, "nice");
			echo "<br />";
			echo str_replace("PHP", "JAVA", $x);
		?>
		<br /><a href="Part-08 (PHP Constants).php">Part-08 (PHP Constants)</a>
		</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section>
		
	</div>
	
</body>
</html>