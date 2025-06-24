<?php
include "header.php";
include "slider.php";
include "class/product_class.php";

$product = new product;
$show_top_products = $product->show_top_sale_products(); // Show 3 sp hot sale
?>


<div class="col-sm-12 col-md-9 col-lg-9 admin-content-right" style="width: 80%;">
    <div class="admin-content-right-product-show">
        <h2>Top 3 Sản phẩm Sale Hot</h2>
        <table>
            <tr>
                <th>Stt</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Loại sản phẩm</th>
                <th>Giá</th>
                <th>Giá sale</th>
                <th>Phần trăm sale</th>
                <th>Mô tả</th>
                <th>Ảnh</th>
            </tr>
            <?php
            if ($show_top_products) {
                $i = 0;
                while ($result = $show_top_products->fetch_assoc()) {
                    $i++;
                    $price = floatval($result['product_price']);
                    $sale_price = floatval($result['product_sale']);
                    $discount_percentage = $price > 0 ? round((($price - $sale_price) / $price) * 100, 2) : 0;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['product_name'] ?></td>
                <td><?php echo $result['cartegory_name'] ?></td>
                <td><?php echo $result['type_name'] ?></td>
                <td><?php echo $result['product_price'] ?></td>
                <td><?php echo $result['product_sale'] ?></td>
                <td><?php echo $discount_percentage ?>%</td>
                <td><?php echo $result['product_desc'] ?></td>
                <td><img src="uploads/<?php echo $result['product_img'] ?>" alt=""></td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='9'>Không có sản phẩm nào.</td></tr>";
            }
            ?>
        </table>
    </div>
</div>
</body>
























<!-- Load Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
.admin-content-right-product-show {
    background: linear-gradient(135deg, #fff5f7, #ffebee); /* Gradient từ hồng nhạt sang đỏ nhạt */
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    width: 100%; /* Tận dụng hết không gian của content-right */
}

.admin-content-right-product-show h2 {
    color: black; /* Hồng đậm hơn cho tiêu đề */
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    margin-bottom: 30px;
    text-align: center;
    text-transform: uppercase;
    font-size: 28px; /* Tăng kích thước tiêu đề */
}

.admin-content-right-product-show table {
    width: 100%; /* Bảng chiếm toàn bộ chiều rộng */
    border-collapse: separate;
    border-spacing: 0;
    background-color: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.admin-content-right-product-show th,
.admin-content-right-product-show td {
    padding: 20px; 
    text-align: center;
    font-weight: 500;
    border-bottom: 1px solid #f5e6ea;
    font-size: 18px; /* Tăng kích thước chữ */
    transition: background-color 0.3s ease;
}
.admin-content-right-product-show th:nth-child(1),
.admin-content-right-product-show td:nth-child(1) { /* STT */
    width: 5%;
}

.admin-content-right-product-show th:nth-child(2),
.admin-content-right-product-show td:nth-child(2) { /* Tên sản phẩm */
    width: 15%;
}

.admin-content-right-product-show th:nth-child(3),
.admin-content-right-product-show td:nth-child(3) { /* Danh mục */
    width: 10%;
}

.admin-content-right-product-show th:nth-child(4),
.admin-content-right-product-show td:nth-child(4) { /* Loại sản phẩm */
    width: 10%;
}

.admin-content-right-product-show th:nth-child(5),
.admin-content-right-product-show td:nth-child(5) { /* Giá */
    width: 10%;
}

.admin-content-right-product-show th:nth-child(6),
.admin-content-right-product-show td:nth-child(6) { /* Giá sale */
    width: 10%;
}

.admin-content-right-product-show th:nth-child(7),
.admin-content-right-product-show td:nth-child(7) { /* Phần trăm sale */
    width: 10%;
}

.admin-content-right-product-show th:nth-child(8),
.admin-content-right-product-show td:nth-child(8) { /* Mô tả */
    width: 20%;
}

.admin-content-right-product-show th:nth-child(9),
.admin-content-right-product-show td:nth-child(9) { /* Ảnh */
    width: 10%;
}

.admin-content-right-product-show th {
    background: linear-gradient(90deg, #f8bbd0, #f48fb1); /* Gradient cho header */
    color: black;
    font-weight: 650;
    text-transform: uppercase;
}

.admin-content-right-product-show tr:hover td {
    background-color: #fff3f5; /* Hiệu ứng hover trên hàng */
    transition: background-color 0.3s ease;
}

.admin-content-right-product-show img {
    border-radius: 8px;
    object-fit: cover;
    transition: transform 0.3s ease;
    width: 120px; /* Tăng kích thước ảnh */
    height: 120px; /* Đặt chiều cao cố định để ảnh không bị méo */
}

.admin-content-right-product-show img:hover {
    transform: scale(1.1); /* Phóng to ảnh khi hover */
}

.admin-content-right-product-show tr:last-child td {
    border-bottom: none; /* Loại bỏ viền dưới cho hàng cuối */
}
</style>
</html>