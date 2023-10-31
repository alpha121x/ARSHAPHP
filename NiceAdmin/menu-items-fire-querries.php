<?php require('config.php'); ?>
<?php
//create query 
  if(isset($_POST['add-link'])){
      $link_text = $_POST['link_name'];
      $link_url = $_POST['link_url'];
 
	
//insert query
$add_menu_query = mysqli_query($cn,"INSERT INTO menu_links (link_text,url)
VALUES('$link_text','$link_url')");

if($add_menu_query){
    header("Location:add-menu-items.php");
}
else{
	echo mysqli_error($cn);	
}
}
?>

