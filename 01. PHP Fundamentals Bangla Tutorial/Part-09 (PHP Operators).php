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
		01. Arithmatic Operators
		02. Assignment Operators
		03. Comparisons Operators
		04. Increment/Decrement Operators
		05. Logical Operators
		06. String Operators
		07. Array Operators
		<hr />
		01. Arithmatic Operators
		<hr />
		<?php
			$x=5;
			$y=2;
			echo $x+$y;
			echo "<br />";
			echo $x-$y;
			echo "<br />";
			echo $x*$y;
			echo "<br />";
			echo $x/$y;
			echo "<br />";
			echo $x%$y;
		?>
		<br /><a href="Part-10 (Assignment Operators).php">Part-10 (Assignment Operators)</a>
		</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section>
		
	</div>
	
</body>
</html>