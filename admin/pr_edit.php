<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
if(!isset($_GET['cartegory_id']) || $_GET['cartegory_id']==NULL){
    echo "<script>window.location = 'pr_show.php' </script>";
}
else{
    $cartegory_id = $_GET['cartegory_id'];
}
$get_cartegory = $cartegory -> get_cartegory($cartegory_id);
if($get_cartegory){
    $result = $get_cartegory -> fetch_assoc();
}
?>

<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_name=$_POST['cartegory_name'];
    $update_cartegory = $cartegory->update_cartegory($cartegory_name, $cartegory_id);
}
?>
<div class="col-sm-12 col-md-9 col-lg-9 admin-content-right" style=" width: 80%;">
                        <div class="admin-content-right-cartegory">
                                <h2>Sửa danh mục</h2>
                                <form action="" method="POST">
                                    <input require name="cartegory_name" type="text" placeholder="Nhập tên danh mục" 
                                    value="<?php echo $result['cartegory_name'] ?>">
                                    <button type="submit">Sửa</button>
                                </form>
                        </div>
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>