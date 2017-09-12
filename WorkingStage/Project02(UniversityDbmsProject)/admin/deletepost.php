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
if (!isset($_GET['delpostid']) || $_GET['delpostid'] == NULL) {
	header("Location:postlist.php");
}else{
	$postid = $_GET['delpostid'];
	$query = "SELECT * FROM tbl_post WHERE id ='$postid'";
	$getData = $db->select($query);
	if ($getData) {
		while ($delImg = $getData->fetch_assoc()) {
			$dellink = $delImg['image'];
			unlink($dellink);
		}
	}

	$delquery = "DELETE FROM tbl_post WHERE id = '$postid'";
	$delData = $db->delete($delquery);
	if ($delData) {
		echo "<span class='success'>Data Deleted Successfully</span>";
		header("Location:postlist.php");
	}else{
		echo "<span class='success'>Data Not Deleted</span>";
		header("Location:postlist.php");
	}
}


?>