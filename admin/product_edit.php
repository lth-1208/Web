<?php
include "header.php";
include "slider.php";
include "class/product_class.php";

$product = new product;

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $get_product = $product->get_product($product_id);
    if ($get_product) {
        $row = $get_product->fetch_assoc();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $update_product = $product->update_product($_POST, $_FILES, $product_id);
    echo "<script>alert('Cập nhật thành công'); window.location='product_show.php';</script>";
}
?>

<div class="col-sm-12 col-md-9 col-lg-9 admin-content-right" style=" width: 80%;">
    <div class="admin-content-right-product-add">
        <h2>Sửa sản phẩm</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <input required name="product_name" type="text" value="<?php echo $row['product_name']; ?>">

            <select name="cartegory_id" required>
                <option value="#">--Chọn danh mục</option>
                <?php
                $show_cartegory = $product->show_pr();
                if ($show_cartegory) {
                    while ($cat = $show_cartegory->fetch_assoc()) {
                        $selected = $cat['cartegory_id'] == $row['cartegory_id'] ? 'selected' : '';
                        echo "<option value='{$cat['cartegory_id']}' $selected>{$cat['cartegory_name']}</option>";
                    }
                }
                ?>
            </select>

            <select name="type_id" required>
                <option value="#">--Chọn loại sản phẩm</option>
                <?php
                $show_type = $product->show_type();
                if ($show_type) {
                    while ($type = $show_type->fetch_assoc()) {
                        $selected = $type['type_id'] == $row['type_id'] ? 'selected' : '';
                        echo "<option value='{$type['type_id']}' $selected>{$type['type_name']}</option>";
                    }
                }
                ?>
            </select>

            <input required name="product_price" type="text" value="<?php echo $row['product_price']; ?>">

            <input required name="product_sale" type="text" value="<?php echo $row['product_sale']; ?>">

            <textarea required name="product_desc" cols="30" rows="10"><?php echo $row['product_desc']; ?></textarea>

            <label>Ảnh sản phẩm hiện tại:</label><br><br>
            <img src="uploads/<?php echo $row['product_img']; ?>" width="100"><br><br>

            <label>Chọn ảnh khác (nếu muốn thay đổi):</label>
            <input name="product_img" type="file">

            <button type="submit">Cập nhật</button>
        </form>
    </div>
</div>

