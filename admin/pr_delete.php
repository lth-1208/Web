<?php
include "class/cartegory_class.php";
$cartegory = new cartegory;
if(!isset($_GET['cartegory_id']) || $_GET['cartegory_id']==NULL){
    echo "<script>window.location = 'pr_show.php' </script>";
}
else{
    $cartegory_id = $_GET['cartegory_id'];
}
$delete_cartegory = $cartegory -> delete_cartegory($cartegory_id);

?>