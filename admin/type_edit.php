<?php
include "header.php";
include "slider.php";
include "class/type_class.php";
?>
<?php
$type = new type;
// lấy dữ liệu
if(!isset($_GET['type_id']) || $_GET['type_id']==NULL){
    echo "<script>window.location = 'type_show.php' </script>";
}
else{
    $type_id = $_GET['type_id'];
}

$get_type = $type -> get_type($type_id);
if($get_type){
    $resultA = $get_type -> fetch_assoc();
}

//update dữ liệu 
if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_id=$_POST['cartegory_id'];
    $type_name = $_POST['type_name'];
    $update_type = $type->update_type($cartegory_id, $type_name, $type_id);
}
?>
<style>
    select {
        height: 35px;
        width: 200px;
        margin-top: 10px;
    }
</style>
<div class="col-sm-12 col-md-9 col-lg-9 admin-content-right" style=" width: 80%;">
                        <div class="admin-content-right-cartegory">
                                <h2>Sửa loại sản phẩm</h2>
                                <form action="" method="POST">
                                    <select name="cartegory_id" id="">
                                        <option value="#">--Chọn danh mục</option>
                                        <?php
                                                $show_pr = $type -> show_pr();
                                                if($show_pr){
                                                    while($result = $show_pr -> fetch_assoc()){
                                                   
                                        ?>
                                            <option <?php if($resultA['cartegory_id']==$result['cartegory_id']){echo "SELECTED";} ?> value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                                        <?php
                                                        }
                                                 }
                                        ?>
                                    </select><br>
                                    <input require name="type_name" type="text" placeholder="Nhập loại sản phẩm" 
                                    value="<?php echo $resultA['type_name'] ?>">
                                    <button type="submit">Sửa</button>
                                </form>
                        </div>
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>


