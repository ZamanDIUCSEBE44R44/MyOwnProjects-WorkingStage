<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>
<?php
if (!Session::get('userRole') == '0') {
    header("Location:index.php");
}
?>
        <div class="grid_10">		
            <div class="box round first grid">
                <h2>Add New User</h2>
               <div class="block copyblock">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $username = $fm->validation($_POST['username']);
                    $password = $fm->validation(md5($_POST['password']));
                    $email    = $fm->validation($_POST['email']);
                    $role     = $fm->validation($_POST['role']);

                    $username = mysqli_real_escape_string($db->link, $username);
                    $password = mysqli_real_escape_string($db->link, $password);
                    $email    = mysqli_real_escape_string($db->link, $email);
                    $role     = mysqli_real_escape_string($db->link, $role);

                    if (empty($username) || empty($password) || empty($email) || empty($role)) {
                        echo "<span class='error'> Field Must not be empty !..</span>";
                    }else{
                        $mailquery = "SELECT * FROM tbl_user WHERE email='$email' LIMIT 1";
                        $mailCheck = $db->select($mailquery);
                        if ($mailCheck != false) {
                            echo "<span class='error'> Email already Exist!..</span>";
                        } else {
                        $query = "INSERT INTO tbl_user (username, password, email, role) VALUES('$username', '$password', '$email', '$role')";
                        $usrinsert = $db->insert($query);
                        if ($usrinsert) {
                            echo "<span class='success'> User Created Successfully.</span>";
                        }else{
                            echo "<span class='error'> User Not Created !</span>";
                        }
                    }
                    }
                    

                    
                }
            ?> 
                 <form action="" method="POST">
                    <table class="form">	               
                        <tr>
                            <td><label>Username</label></td>
                            <td><input type="text" name="username" placeholder="Enter username" class="medium" /></td>
                        </tr>             
                        <tr>
                            <td><label>Password</label></td>
                            <td><input type="password" name="password" placeholder="Enter password" class="medium" /></td>
                        </tr>	          
                        <tr>
                            <td><label>Email</label></td>
                            <td><input type="text" name="email" placeholder="Enter Valid Email Address.." class="medium" /></td>
                        </tr>			
                        <tr>
                            <td><label>User Role</label></td>
                            <td>
                                <select name="role" id="select">
                                    <option>Select user role</option>
                                    <option value="0">Admin</option>
                                    <option value="1">Author</option>
                                    <option value="2">Editor</option>
                                </select>
                            </td>
                        </tr>
						<tr> 
                            <td><input type="submit" name="submit" Value="Create" /></td>
                        </tr>
                    </table>
                 </form>
                </div>
            </div>
        </div>
<?php include'inc/footer.php'; ?>