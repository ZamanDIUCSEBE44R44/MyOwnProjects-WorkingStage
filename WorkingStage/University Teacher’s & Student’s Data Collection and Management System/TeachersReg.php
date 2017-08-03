<?php 
$connection=mysqli_connect("localhost","root","","teachers");
	if(!$connection)
	{
		die("database connection error");
	}
	
if(isset($_POST['submit'])){
	
		$teachers_name = $_POST['teachers_name'];
		$edu_quali = $_POST['edu_quali'];
		$mobile_no = $_POST['mobile_no'];
		$email = $_POST['email'];
		echo $teachers_name;
		
		$insert="insert into teachers_data(teachers_name,edu_quali,mobile_no,email)values('".$teachers_name."','".$edu_quali."','".$mobile_no."','".$email."')";
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
	<title>Data Management System</title>
</head>
<body>
	<h1 align="center">Teachers Register.</h1><hr />
		<form action="" method="post">
		<p>Teacher Name: <br /> <input type="text" name="teachers_name" id="" required="1" /> </p>
		<p>Education Qualification: <br /> <input type="text" name="edu_quali" required="1" /> </p>
		<p>Mobile No: <br /> <input type="number" name="mobile_no" required="1" /> </p>
		<p>E-Mail: <br /> <input type="text" name="email" required="1" /> </p>
		<input type="submit" value="submit" name="submit"/>
		
		</form>
	<hr />
	
	
	
	

</body>
</html>