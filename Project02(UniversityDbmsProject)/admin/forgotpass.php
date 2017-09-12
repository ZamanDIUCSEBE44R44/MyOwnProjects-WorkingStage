<?php 
include '../lib/session.php';
Session::checkLogin(); 
?>

<?php include '../config/config.php';?>
<?php include '../lib/Database.php';?>
<?php include '../helpers/Format.php';?>

<?php
$db = new Database();
$fm = new Format();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Password Recovery</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">	
	<section id="content">
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$email = $fm->validation($_POST['email']);
			$email = mysqli_real_escape_string($db->link,$email);

			if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
				echo "<span class='error'> Invalid Email Address.</span>";
			}else{

				$mailquery = "SELECT * FROM tbl_user WHERE email='$email' LIMIT 1";
                $mailCheck = $db->select($mailquery);
				if ($mailCheck != false) {
					while ($value = $mailCheck->fetch_assoc()) {
						$userid = $value['id'];
						$username = $value['username'];
					}
					$text = substr($email, 0,3);
					$rand = rand(1000, 99999);
					$newpass = "$text$rand";
					$password = md5($newpass);
					$query = "UPDATE tbl_user SET password='$password' WHERE id='$userid'";
					$updated_row = $db->update($query);

					$to 	 = "$email";
					$from 	 = "liveproject@gmail.com";
					$headers = "From: $from\n";
					$headers .= 'MIME-Version: 1.0'."\r\n";
					$headers .= 'Content-type: text/html; charset=iso-885901'."\r\n";
					$subject = "Your Password";
					$message = "Your username is ".$username." and password is ".$newpass."Please website to login.";

					$sendmail = mail($to, $subject, $message, $headers);
					if ($sendmail) {
						echo "<span class='success'> Please Check Your Email for New Password.</span>";
					}else{
						echo "<span class='error'> Email not Send.</span>";
					}

				}else{
					echo "<span style='color:red; font-size:18px;'>Email Not Exist !!</span>";
				}
			}
		}
	?>
		<form action="" method="post">
			<h1>Password Recovery</h1>
			<div>
				<input type="text" name="email" placeholder="Enter valid Email..." required="" />
			</div>
			<div>
				<input type="submit" value="Send Mail" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="login.php">Login !</a>
		</div><!-- button -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>