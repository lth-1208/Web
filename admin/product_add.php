<?php
include "header.php";
include "slider.php";
include "class/product_class.php"
?>

<?php
$product = new product;
if($_SERVER['REQUEST_METHOD']==='POST'){
    
    $insert_product = $product->insert_product($_POST, $_FILES);
}

if (isset($_POST['cartegory_id'])) {
    $cartegory_id = $_POST['cartegory_id'];
    $types = $product->show_type_by_category($cartegory_id);

    $output = '<option value="#">--Chọn loại sản phẩm--</option>';
    if ($types) {
        while ($result = $types->fetch_assoc()) {
            $output .= '<option value="' . $result['type_id'] . '">' . $result['type_name'] . '</option>';
        }
    }
    echo $output;
    exit; // Dừng xử lý tiếp nếu là request AJAX
}
?>

<div class="col-sm-12 col-md-9 col-lg-9 admin-content-right" style=" width: 80%;">
                         <div class="admin-content-right-product-add">
                                <h2>Thêm sản phẩm</h2>
                                <form action="" method="POST" enctype="multipart/form-data">

                                    <input required name="product_name" type="text" placeholder="Nhập tên sản phẩm">
                                    <select name="cartegory_id" id="cartegory-select">
                                        <option value="#">--Chọn danh mục--</option>
                                        <?php
                                                $show_pr = $product->show_pr();
                                                if ($show_pr) {
                                                    while ($result = $show_pr->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                                        <?php
                                                     }
                                                }
                                         ?>
                                    </select>

                                    <select name="type_id" id="type-select">
                                            <option value="#">--Chọn loại sản phẩm--</option>
                                    </select>

                                    <input required name="product_price" type="text" placeholder="Giá sản phẩm">

                                    <input required name="product_sale" type="text" placeholder="Giá khuyến mại">

                                    <textarea required name="product_desc" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm"></textarea>

                                    <label for="">Ảnh sản phẩm (JPEG, PNG):</label>
                                    <input required name="product_img" type="file">
                                    <button type="submit">Thêm</button>
                                </form>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#cartegory-select').change(function () {
        var cartegory_id = $(this).val();
        $.ajax({
            url: "product_add.php",
            method: "POST",
            data: { cartegory_id: cartegory_id },
            success: function (data) {
                $('#type-select').html(data);
            }
        });
    });
</script>
</body>
</html>