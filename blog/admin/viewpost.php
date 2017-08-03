<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>
<?php
if (!isset($_GET['viewpostid']) || $_GET['viewpostid'] == NULL) {
    header("Location:postlist.php");
}else{
    $postid = $_GET['viewpostid']; 
} 
?>
        <div class="grid_10">       
            <div class="box round first grid">
                <h2>View Post</h2>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                   header("Location:postlist.php");
                }
            ?>
                <div class="block">  
            <?php
            $query = "SELECT * FROM tbl_post WHERE id=$postid ";            
            $getpost = $db->select($query);
            if ($getpost) {
                while ($postresult = $getpost->fetch_assoc()) { ?>
                 <form action="" method="POST">                    
                    <table class="form">                       
                        <tr>
                            <td><label>Title</label></td>
                            <td><input type="text" readonly value="<?php echo $postresult['title']; ?>" class="medium" /></td>
                        </tr>                     
                        <tr>
                            <td><label>Category</label></td>
                            <td>
                                <select id="select" readonly >
                                    <option>Select Category</option>
                                    <?php
                                    $query = "SELECT * FROM tbl_category";
                                    $category = $db->select($query);
                                    if ($category) {
                                        while ($result = $category->fetch_assoc()) {  ?>
                                        
                                            <option
                                            <?php
                                                if ($postresult['cat'] == $result['id']) {
                                                   echo "selected";
                                                }
                                            ?>
                                             value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
                                       <?php }
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr> 
                        <tr>
                          <td><label>Uploaded Image</label></td>
                          <td><img src="<?php echo $postresult['image']; ?>" alt="" height="150px" width="250px" /></td>
                      </tr> 
                        <tr><td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td><textarea class="tinymce" name="body"><?php echo $postresult['body']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td><label>Tags</label></td>
                            <td><input type="text" readonly value="<?php echo $postresult['tags']; ?>" class="medium" /></td>
                        </tr>
                        <tr>
                            <td><label>Author</label></td>
                            <td>
                                <input type="text" readonly value="<?php echo $postresult['author']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" Value="Ok" /></td>
                        </tr>
                    </table>
                    </form>
            <?php
             }
            }
            ?>        
                </div>
            </div>
  
        


<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>

<?php include'inc/footer.php'; ?>



