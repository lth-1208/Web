<?php
include "header.php";
include "slider.php";
include "class/type_class.php";
?>
<?php
$type = new type;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_id=$_POST['cartegory_id'];
    $type_name = $_POST['type_name'];
    $insert_type = $type->insert_type($cartegory_id, $type_name);
}
?>



<div class="col-sm-12 col-md-9 col-lg-9 admin-content-right" style=" width: 80%;">
                        <div class="admin-content-right-cartegory">
                                <h2>Thêm loại sản phẩm</h2>
                                <form action="" method="POST">
                                    <select name="cartegory_id" id="">
                                        <option value="#">--Chọn danh mục</option>
                                        <?php
                                                $show_pr = $type -> show_pr();
                                                if($show_pr){
                                                    while($result = $show_pr -> fetch_assoc()){
                                                   
                                        ?>
                                            <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                                        <?php
                                                        }
                                                 }
                                        ?>
                                        </select><br>

                                    <input required name="type_name" type="text" placeholder="Nhập loại sản phẩm"> 
                                    <button type="submit">Thêm</button>
                                </form>
                        </div>
                </div>
            </div>
        </div>
    </section>















    <style>
    .admin-content-right-cartegory {
    background-color: #fef0f5; 
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

.admin-content-right-cartegory h2 {
    color: black; 
    margin-bottom: 20px;
}

.admin-content-right-cartegory select,
.admin-content-right-cartegory input[type="text"] {
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 15px;
    border: 1px solid #ffc0cb;
    border-radius: 5px;
    font-size: 16px;
    background-color: #fff;
}

.admin-content-right-cartegory button {
    background-color: #ffc0cb;
    color: black;
    border: none;
    padding: 10px 30px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.admin-content-right-cartegory button:hover {
    background-color: #ec4f82;
    color: white;
}

</style>
    
</body>
</html>