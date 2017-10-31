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
		1. String.
		2. Integer.
		3. Float.
		4. boolean.
		5. Array.
		6. Object.
		7. Null.
		8. Resource.
		<br />
		<hr />
		6. Object.
		<hr />

		<?php
			class student{
				function department(){
					return "Physics";
				} 
				function details(){
					echo $this->department();
				}
			}
			$st = new student();
			$st->details();
			
		?>
		<br /><a href="Part-06.7 (PHP Data Types).php">Part-06.7 (PHP Data Types)</a>
		</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section>
		
	</div>
	
</body>
</html>