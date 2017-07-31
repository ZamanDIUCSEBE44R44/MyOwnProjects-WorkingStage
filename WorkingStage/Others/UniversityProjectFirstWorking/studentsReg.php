<?php 
$connection=mysqli_connect("localhost","root","","students_register");
	if(!$connection)
	{
		die("database connection error");
	}
	
if(isset($_POST['submit'])){
	
		$student_name = $_POST['student_name'];
		$roll_name = $_POST['roll_name'];
		$reg_no = $_POST['reg_no'];
		$batch_name = $_POST['batch_name'];
		$semester_name = $_POST['semester_name'];
		$department_name = $_POST['department_name'];
		$fathers_name = $_POST['fathers_name'];
		$mothers_name = $_POST['mothers_name'];
		$gender = $_POST['gender'];
		$blood_group = $_POST['blood_group'];
		$phone_no = $_POST['phone_no'];
		
		echo $student_name;
		echo $fathers_name;
		echo $mothers_name;
		echo $gender;
		$insert="insert into students_data(student_name,roll_name,reg_no,batch_name,semester_name,department_name,fathers_name,mothers_name,gender,blood_group,phone_no)values('".$student_name."','".$fathers_name."','".$mothers_name."','".$gender."','".$department_name."','".$semester_name."','".$batch_name."','".$roll_name."','".$reg_no."','".$blood_group."','".$phone_no."')";
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
	<title></title>
</head>
<body>
		<h1 align="center">Students Register.</h1><hr />
	
		<form action="" method="post">
		<p>
			Student Name: <input type="text" name="student_name" required="1" />
			Roll No:  <input type="text" name="roll_name" required="1" />
		</p>
		<p>
			Reg. No: <input type="text" name="reg_no" required="1" />
			Batch Name: <input type="text" name="batch_name" required="1" />
		</p>		
		<p>
			Semester Name:  <input type="text" name="semester_name" required="1" />
			Department Name: <input type="text" name="department_name" required="1" />
		</p>
		<p>
			
			Father’s Name:  <input type="text" name="fathers_name" required="1" />
			Mother’s Name: <input type="text" name="mothers_name" required="1" />
		</p>
		<p>
			Gender:  <input type="text" name="gender" required="1" /> 			
			Blood Group:  <input type="text" name="blood_group" required="1" /> 
		</p>
		<p>
			Student Phone No: <br /> <input type="number" name="phone_no" required="1" /> </p>
		<input type="submit" value="submit" name="submit"/>
		
		</form>
	<hr />
</body>
</html>