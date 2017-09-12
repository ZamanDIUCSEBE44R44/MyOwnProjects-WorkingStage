<?php 
include '../lib/session.php';
Session::checkSession();
?>

<?php include '../config/config.php';?>
<?php include '../lib/Database.php';?>

<?php
$db = new Database();
?>
<?php
if (!isset($_GET['delpageid']) || $_GET['delpageid'] == NULL) {
	header("Location:index.php");
}else{
	$pageid = $_GET['delpageid'];
	$delquery = "DELETE FROM tbl_page WHERE id='$pageid'";
	$deletePage = $db->delete($delquery);
	if ($deletePage) {
		echo "<span class='success'>Page Deleted Successfully</span>";
		header("Location:index.php");
	}else{
		echo "<span class='success'>Data Not Deleted</span>";
		header("Location:index.php");
	}
}


?>