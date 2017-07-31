<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Project</title>
</head>
<body>
	

<script type="text/javascript">
function fromFunction(){
	var name= document.myform.username.value;
	var showData = "Username"+name;
	document.getElementById('output').innerHTML = showData;
}

</script>

<div id="output"></div>




	<form action="" method="post" name="myform" id="myform"  onsubmit="fromFunction(); return false;">
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







</body>
</html>