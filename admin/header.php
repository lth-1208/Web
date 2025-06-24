<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>ADMIN</title>
  <style>
    .header-buttons a {
      padding: 8px 16px;
      background-color: #f99cb7;
      color: black;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .header-buttons a:hover {
      background-color: #ec4f82;
      color: white;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <header style="text-align: center; margin-top: 30px; margin-bottom:30px; margin-right:10px; position: relative;">
    <h1>QUẢN LÍ SẢN PHẨM</h1>
    <div class="header-buttons" style="position: absolute; right: 20px; top: 100%; display: flex; gap: 10px;">
      <a href="../index_admin.php">Trang chủ</a>
      <a href="../logout.php">Đăng xuất</a>
    </div>
  </header>
</body>
</html>

