<?php require_once "share/initialize.php";?>
<?php

$post_id=$_GET['post_id'] ?? 1;




?>
<?php include INCLUDES."/header.php";?>
<?php include INCLUDES."/navigation.php";?>
   
<?php

if(isset($_GET['post_id'])){
    include INCLUDES."/single_post.php";
}else{
    include INCLUDES."/allpost.php";
}

?>

<?php include INCLUDES."/page_bottom.php";?>