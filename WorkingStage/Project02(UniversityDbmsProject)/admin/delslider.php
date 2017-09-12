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
if (!isset($_GET['delsliderid']) || $_GET['delsliderid'] == NULL) {
	header("Location:sliderlist.php");
}else{
	$sliderid = $_GET['delsliderid'];
	$query = "SELECT * FROM tbl_slider WHERE id ='$sliderid'";
	$getSldier = $db->select($query);
	if ($getSldier) {
		while ($delImg = $getSldier->fetch_assoc()) {
			$dellink = $delImg['image'];
			unlink($dellink);
		}
	}

	$delquery = "DELETE FROM tbl_slider WHERE id = '$sliderid'";
	$delData = $db->delete($delquery);
	if ($delData) {
		echo "<span class='success'>Slider Deleted Successfully</span>";
		header("Location:sliderlist.php");
	}else{
		echo "<span class='success'>Slider Not Deleted</span>";
		header("Location:sliderlist.php");
	}
}


?>