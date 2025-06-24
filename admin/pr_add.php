<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_name=$_POST['cartegory_name'];
    $insert_cartegory = $cartegory->insert_cartegory($cartegory_name);
}
?>
<div class="col-sm-12 col-md-9 col-lg-9 admin-content-right" style=" width: 80%;">
                        <div class="admin-content-right-cartegory">
                                <h2>Thêm danh mục</h2>
                                <form action="" method="POST">
                                    <input required name="cartegory_name" type="text" placeholder="Nhập tên danh mục">
                                    <button type="submit">Thêm</button>
                                </form>
                        </div>
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>