<?php include 'inc/header.php'; ?>

<?php
if (!isset($_GET['category']) || $_GET['category']==NULL) {
	header("Location:404.php");
}else{
	$cat_id = $_GET['category'];
}
?>

<div class="contentsection contemplete clear">
	<div class="maincontent clear">
	<?php 
		$query = "SELECT * FROM tbl_post WHERE cat='$cat_id'";
		$cat_post = $db->select($query);
		if ($cat_post) {
		while ($result = $cat_post->fetch_assoc()) {
	 ?>
		<div class="samepost clear">
			<h2><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h2>
			<h4><?php echo $fm->formatDate($result['date']); ?>, By <a href="author.php"><?php echo $result['author']; ?></a></h4>
			 <a href="#"><img src="admin/<?php echo $result['image']; ?>" alt="post image"/></a>
				<p><?php echo $fm->textShorten($result['body']); ?></p>
			<div class="readmore clear">
				<a href="post.php?id=<?php echo $result['id']; ?>">Read More</a>
			</div>
		</div>
	<?php
		}  } else { ?>
			<p>No post available in this category.</p>
		<?php }
	?>
	</div>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/footer.php'; ?>