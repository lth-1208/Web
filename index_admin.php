<?php
include "admin/class/product_class.php";
$product = new product();
$all_products = $product->show_all_product();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Beauty Shop</title>
    <!--Viết TV-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/all.css">


</head>

<body>
    <header class="header-main">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <span>
                            <img src="img/logos.png" alt="logo">
                        </span> Beauty Shop
                    </a>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="search" id="keyword" name="keyword" class="form-control" placeholder="Search">
                        </div>
                        <input type="submit" class="btn btn-default" value="Search">
                        <a href="#">
                            <span class="glyphicon glyphicon-shopping-cart"><span class="badge">0</span></span>
                        </a>
                    </form>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Trang chủ
                            </a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Sản phẩm <span
                                    class="caret"></span></a>
                            <ul class="megamenu dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="item col-sm-12 col-md-3 megamenuthumnail">
                                            <img src="img/trangdiemmat.png" class="img-responsive"
                                                alt="face thumbnail" />
                                            <p>
                                            <h4><a href="#" class="title">Trang điểm mặt</a></h4>
                                            </p>
                                            <p class="menu-item"><a href="#">Che khuyết điểm</a></p>
                                            <p class="menu-item"><a href="#">Cushion</a></p>
                                            <p class="menu-item"><a href="#">Kem nền</a></p>
                                            <p class="menu-item"><a href="#">Phấn phủ</a></p>
                                        </div>

                                        <div class="item col-sm-12 col-md-3 megamenuthumnail">
                                            <img src="img/trangdiemeyes.png" class="img-responsive"
                                                alt="eyes thumbnail" />
                                            <p>
                                            <h4><a href="#" class="title">Trang điểm mắt</a></h4>
                                            </p>
                                            <p class="menu-item"><a href="#">Eyeliner</a></p>
                                            <p class="menu-item"><a href="#">Mascara</a></p>
                                            <p class="menu-item"><a href="#">Kẻ chân mày</a></p>
                                            <p class="menu-item"><a href="#">Phấn mắt</a></p>
                                        </div>

                                        <div class="item col-sm-12 col-md-3 megamenuthumnail">
                                            <img src="img/trangdiemmoi.png" class="img-responsive"
                                                alt="lip thumbnail" />
                                            <p>
                                            <h4><a href="#" class="title">Trang điểm môi</a></h4>
                                            </p>
                                            <p class="menu-item"><a href="#">Son dưỡng</a></p>
                                            <p class="menu-item"><a href="#">Son thỏi</a></p>
                                            <p class="menu-item"><a href="#">Son kem-tint</a></p>
                                            <p class="menu-item"><a href="#">Mặt nạ môi</a></p>
                                        </div>

                                        <div class="item col-sm-12 col-md-3 megamenuthumnail">
                                            <img src="img/duongda1.png" class="img-responsive" alt="skin thumbnail" />
                                            <p>
                                            <h4><a href="#" class="title">Dưỡng da</a></h4>
                                            </p>
                                            <p class="menu-item"><a href="#">Kem chống nắng</a></p>
                                            <p class="menu-item"><a href="#">Serum</a></p>
                                            <p class="menu-item"><a href="#">Mặt nạ</a></p>
                                            <p class="menu-item"><a href="#">Toner</a></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="admin/pr_add.php">ADMIN</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="section-showcase">
        <div class="container">
            <div class="row">
                <!-- danh mục sản phẩm -->
                <div class="col-md-3 col-lg-3">
                    <nav class="main-nav">
                        <h4>Danh mục sản phẩm</h4>
                        <ul class="main-nav-ul">
                            <li class="has-sub">
                                <a href="#">Trang điểm mặt <span class="sub-arrow"></span></a>
                                <ul>
                                    <li><a href="#">Che khuyết điểm</a></li>
                                    <li><a href="#">Kem nền</a></li>
                                    <li><a href="#">Cushion</a></li>
                                    <li><a href="#">Phấn phủ</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">Trang điểm mắt <span class="sub-arrow"></span></a>
                                <ul>
                                    <li><a href="#">Eyeliner</a></li>
                                    <li><a href="#">Mascara</a></li>
                                    <li><a href="#">Kẻ chân mày</a></li>
                                    <li><a href="#">Phấn mắt</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">Trang điểm môi <span class="sub-arrow"></span></a>
                                <ul>
                                    <li><a href="#">Son dưỡng</a></li>
                                    <li><a href="#">Son thỏi</a></li>
                                    <li><a href="#">Son kem-tint</a></li>
                                    <li><a href="#">Mặt nạ môi</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">Dưỡng da <span class="sub-arrow"></span></a>
                                <ul>
                                    <li><a href="#">Kem chống nắng</a></li>
                                    <li><a href="#">Serum</a></li>
                                    <li><a href="#">Mặt nạ</a></li>
                                    <li><a href="#">Toner</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">Làm sạch <span class="sub-arrow"></span></a>
                                <ul>
                                    <li><a href="#">Sữa rửa mặt</a></li>
                                    <li><a href="#">Tẩy tế bào chết</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Mặt nạ</a></li>
                            <li><a href="#">Phụ kiện trang điểm</a></li>
                            <li><a href="#">Khuyến mại</a></li>
                            <li><a href="#">Best seller</a></li>
                            <li><a href="#">Most viewed</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- slide -->
                <div class="col-sm-12 col-md-9 col-lg-9 block-main-slider">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/slide0.png" alt="Banner 0">
                            </div>
                            <div class="item">
                                <img src="img/slide1.png" alt="Banner 1">

                            </div>
                            <div class="item">
                                <img src="img/slide2.png" alt="Banner 2">

                            </div>
                            <div class="item">
                                <img src="img/slide3.png" alt="Banner 3">
                            </div>
                            <div class="item">
                                <img src="img/slide4.png" alt="Banner 4">
                            </div>
                            <div class="item">
                                <img src="img/slide5.png" alt="Banner 5">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service -->
    <section class="section-services">
        <div clas="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 service-item">
                    <div class="icon">
                        <img src="img/shipment.png">
                    </div>
                    <div class="info">
                        <a href="#">
                            <h4>Miễn phí vận chuyển</h4>
                        </a>
                        <span>Cho đơn hàng <p>500.000<sup>VNĐ</sup></p></span>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 service-item">
                    <div class="icon">
                        <img src="img/doitra.png">
                    </div>
                    <div class="info">
                        <a href="#">
                            <h4>Đổi trả hàng trong 7 ngày</h4>
                        </a>
                        <span>Cho sản phẩm lỗi</span>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 service-item">
                    <div class="icon">
                        <img src="img/phone.png">
                    </div>
                    <div class="info">
                        <a href="#">
                            <h4>Liên hệ 24/7</h4>
                        </a>
                        <span>Tư vấn trực tuyến</span>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 service-item">
                    <div class="icon">
                        <img src="img/safe.png">
                    </div>
                    <div class="info">
                        <a href="#">
                            <h4>Mua sắm an toàn</h4>
                        </a>
                        <span>An tâm người tiêu dùng</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-menu-second">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav id="navigation" class="navbar navbar-default">
                        <div id="myNavbar2">
                            <ul class="nav nav-tabs">
                                <li><a data-toggle="tab" href="#home">Tất cả sản phẩm</a></li>
                                <li><a data-toggle="tab" href="#menu1">Sản phẩm mới</a></li>
                                <li><a data-toggle="tab" href="#menu2">Khuyến mại Hot</a></li>
                                <li><a data-toggle="tab" href="#menu1">Được quan tâm</a></li>
                                <li><a data-toggle="tab" href="#menu1">Mỹ phẩm</a></li>
                                <li><a data-toggle="tab" href="#menu1">Phụ kiện</a></li>
                                <li><a data-toggle="tab" href="#menu1">Thương hiệu</a></li>
                                <li><a data-toggle="tab" href="#menu1">Mã giảm giá</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="section-render-body">
        <div class="tab-content">


<!-- tất cả sản phẩm -->
<div id="home" class="tab-pane fade">
    <section class="section-all-product">
        <div class="container">
            <h3 class="text-center">Tất cả sản phẩm</h3> <br>
            <div class="row">
                <?php if ($all_products) {
                    while ($item = $all_products->fetch_assoc()) { ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="thumbnail">
                                <img src="admin/uploads/<?php echo htmlspecialchars($item['product_img']); ?>" 
                                     title="<?php echo htmlspecialchars($item['product_name']); ?>" 
                                     alt="<?php echo htmlspecialchars($item['product_name']); ?>">
                                <div class="caption">
                                    <div class="proName"><?php echo htmlspecialchars($item['product_name']); ?></div>
                                    
                                    <?php
                                    // Chuyển đổi và làm sạch dữ liệu giá
                                    $price = floatval(str_replace([',', '.', ' '], '', $item['product_price']));
                                    $sale = floatval(str_replace([',', '.', ' '], '', $item['product_sale']));
                                    
                                    // Kiểm tra xem có giá sale không và giá sale phải nhỏ hơn giá gốc
                                    if ($sale > 0 && $sale < $price) {
                                        // Tính phần trăm giảm giá
                                        $discountPercent = round((($price - $sale) / $price) * 100);
                                        ?>
                                        <div class="prodPrice">
                                            <span class="proOfPrice">
                                                <s><?php echo number_format($price, 0, ',', '.'); ?>₫</s>
                                            </span>
                                            <span class="proSale">
                                                <?php echo number_format($sale, 0, ',', '.'); ?>₫
                                            </span>
                                            <span class="proPriceDiscount">
                                                (Sale <?php echo $discountPercent; ?>%)
                                            </span>
                                        </div>
                                        <?php
                                    } else {
                                        // Hiển thị giá bình thường (ưu tiên giá gốc nếu không có sale)
                                        $displayPrice = ($price > 0) ? $price : $sale;
                                        ?>
                                        <div class="prodPrice">
                                            <span class="proSale">
                                                <?php echo number_format($displayPrice, 0, ',', '.'); ?>₫
                                            </span>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    
                                    <button class="add-to-cart-btn" data-product-id="<?php echo $item['product_id']; ?>">
                                        Thêm vào giỏ hàng
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <div class="col-12">
                        <p class="text-center">Không có sản phẩm nào được tìm thấy.</p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>


              <!-- sản phẩm sale -->
            <div id="menu2" class="tab-pane fade">
                <section class="section-sale-product">
                    <div class="container">
                        <h3 class="text-center">Sản phẩm khuyến mại</h3> <br>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

                            <div class="thumbnail">
                                <img src="img/elnclub.png" title="EYELINE CLUB CLIO">
                                <div class="caption">
                                    <div class="proName">EYELINE CLUB CLIO</div>
                                    <div class="prodPrice">
                                        <span class="proOfPrice">420.000</span> 299.999VNĐ
                                        <span class="proPriceDiscount">(Sale 28%)</span>
                                    </div>
                                    <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
                                    <span class="isale"></span>
                                </div>
                            </div>

                        </div>
        </div>
    </section>
</div>            
        </div>
    </section>

    <section class="section-list-brand">
        <div class="container">
            <h3 class="like text-center"> Các thương hiệu hợp tác </h3>
            <ul id="flexiselBrand">
                <div class="col-sm-4 col-md-2 col-lg-2">
                    <li><a href="#"><img src="img/blaroche.png" alt=""></a></li>
                </div>
                <div class="col-sm-4 col-md-2 col-lg-2">
                    <li><a href="#"><img src="img/bsimple.png" alt=""></a></li>
                </div>
                <div class="col-sm-4 col-md-2 col-lg-2">
                    <li><a href="#"><img src="img/blemon.png" alt=""></a></li>
                </div>
                <div class="col-sm-4 col-md-2 col-lg-2">
                    <li><a href="#"><img src="img/bclub.png" alt=""></a></li>
                </div>
                <div class="col-sm-4 col-md-2 col-lg-2">
                    <li><a href="#"><img src="img/bmaybelline.png" alt=""></a></li>
                </div>
                <div class="col-sm-4 col-md-2 col-lg-2">
                    <li><a href="#"><img src="img/bcocoon.png" alt=""></a></li>
                </div>
            </ul>
        </div>
    </section>


    <!-- footer -->
    <section class="section-footer">
        <div id="divsubcribe" class="news-letter">
            <div class="container">
                <div class="join">
                    <h6>TƯ VẤN QUA EMAIL</h6>
                    <div class="sub-left-right">
                        <form action="">
                            <input type="text" value="Nhập email tại đây" onfocus="this.value='';"
                                onblur="if(this.value=='') {this.value='Nhập email tại đây';}">
                            <input type="submit" value="YÊU CẦU">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="divFooter" class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3 block-footer">
                    <h3>TIN TỨC & SỰ KIỆN</h3>
                    <div class="footer-detail">
                        <h4>Black Friday</h4>
                        <hr>
                        <img src="img/bfd.jpg" alt="img-responsive">
                        <p>
                            🔥BLACK FRIDAY RỰC CHÁY TẠI BEAUTY SHOP SALE KHÔNG PHANH ĐẾN 70%!🔥
                        <p>🎉 Sự kiện được mong chờ nhất năm đã chính thức khởi động tại Beauty Shop!</p>
                        <a href="#" class="pull-right"> Read More</a>
                        </p>
                        <div class="post-meta">
                            <a><i class="fa-solid fa-clock"></i></a> April 7, 2025
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 block-footer">
                    <h3>CHÍNH SÁCH MUA HÀNG</h3>
                    <div class="footer-detail">
                        <ul class="list-feature">
                            <li><i class="fa-solid fa-check"></i><a href="#"> Chính sách bảo mật thông tin</a></li>
                            <li><i class="fa-solid fa-check"></i><a href="#"> Chính sách điều khoản sử dụng</a></li>
                            <li><i class="fa-solid fa-check"></i><a href="#"> Chính sách đảm bảo chất lượng</a></li>
                            <li><i class="fa-solid fa-check"></i><a href="#"> Chính sách đổi trả</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 block-footer">
                    <h3>THEO DÕI SHOP</h3>
                    <div class="footer-detail">
                        <a href="#" class="facebook"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="#" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 block-footer">
                    <h3>LIÊN HỆ SHOP</h3>
                    <div class="footer-detail">
                        <table>
                            <tr>
                                <td>Địa chỉ </td>
                                <td> : </td>
                                <td> 96A Đ.Trần Phú, P.Mộ Lao, Hà Đông, Hà Nội</td>
                            </tr>
                            <tr>
                                <td>SĐT </td>
                                <td> : </td>
                                <td> +(123)-456-789</td>
                            </tr>
                            <tr>
                                <td>Fax </td>
                                <td> : </td>
                                <td> +(84) 29 309 035</td>
                            </tr>
                            <tr>
                                <td>Web </td>
                                <td> : </td>
                                <td> BeautyShop.com</td>
                            </tr>
                            <tr>
                                <td>Email </td>
                                <td> : </td>
                                <td> beautyshop@gmail.com</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <hr>
                    <p>BeautyShop &middot;
                        <a href="#">Contact</a> &middot;
                    </p>
                    <p class="pull-right"><a href="#">Back to Top</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>
</body>

</html>