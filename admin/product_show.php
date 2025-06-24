<?php
include "header.php";
include "slider.php";
include "class/product_class.php";

$product = new product;
$show_product = $product->show_product(); // phương thức hiển thị danh sách sản phẩm
?>

<style>
.admin-content-right-product-show {
    background-color: #fef0f5; 
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    margin-top: 20px;
}

.admin-content-right-product-show h2 {
    color: black;
    margin-bottom: 20px;
}

.admin-content-right-product-show table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
}

.admin-content-right-product-show th,
.admin-content-right-product-show td {
    padding: 14px;
    text-align: center;
    font-weight: 500;
    border: 1px solid #ffc0cb;
    font-size: 18px;
}

.admin-content-right-product-show th {
    background-color: #ffb6c1;
    color: black;
    font-weight: bold;
}

 .btn-edit {
  display: inline-block;
  width: 80px;
    padding: 8px 16px;
    margin-top: 5px;
    margin-bottom: 5px;
    background-color: #FFC0CB;
    color: black;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    text-decoration: none;
    transition: background-color 0.3s ease;
    cursor: pointer;
}

 .btn-edit:hover {
  background-color: #ec4f82;
    color: white;
}

.btn-delete {
  display: inline-block;
    padding: 8px 16px;
    width: 80px;
    margin-top: 5px;
    margin-bottom: 5px;
  background-color: #dddddd;
  color: black; 
  border: none;
    border-radius: 5px;
    font-weight: bold;
    text-decoration: none;
    transition: background-color 0.3s ease;
    cursor: pointer;
}
 .btn-delete:hover {
  background-color: black;
   color: white;
}
</style>

<div class="col-sm-12 col-md-9 col-lg-9 admin-content-right" style="width: 80%;">
    <div class="admin-content-right-product-show">
        <h2>Danh sách sản phẩm</h2>
        <table>
            <tr>
                <th>Stt</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Loại sản phẩm</th>
                <th>Giá</th>
                <th>Giá sale</th>
                <th>Mô tả</th>
                <th>Ảnh</th>
                <th>Sửa/Xóa</th>
            </tr>
            <?php
            if ($show_product) {
                $i = 0;
                while ($result = $show_product->fetch_assoc()) {
                    $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['product_name'] ?></td>
                <td><?php echo $result['cartegory_name'] ?></td>
                <td><?php echo $result['type_name'] ?></td>
                <td><?php echo $result['product_price'] ?></td>
                <td><?php echo $result['product_sale'] ?></td>
                <td><?php echo $result['product_desc'] ?></td>
                <td><img src="uploads/<?php echo $result['product_img'] ?>" alt="" width="80"></td>
                <td>
                    <a href="product_edit.php?product_id=<?php echo $result['product_id'] ?>" class="btn-edit">Sửa</a>
                    <a href="product_delete.php?product_id=<?php echo $result['product_id'] ?>" class="btn-delete">Xóa</a>
                </td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>
