<?php
include 'admin/database.php';
$db = new Database();
session_start();
// Nếu đã đăng nhập, chuyển hướng luôn
if (isset($_SESSION['email'])) {
    header("Location: admin/pr_add.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Truy vấn thông tin người dùng
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = $db->select($query);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if ($password === $user['password']) {
            $_SESSION['email'] = $user['email'];
            header("Location: admin/pr_show.php");
            exit;
        } else {
            echo "<script>alert('Sai email hoặc mật khẩu');</script>";
        }
    } else {
        echo "<script>alert('Sai email hoặc mật khẩu');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="scss/main.css">
  <link rel="stylesheet" href="scss/all.css">
</head>

<body class="login">

<div class="container">
  <h2>LOGIN FORM</h2>
  <form action="login.php" method="POST">
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">LOGIN</button>
  </form>
</div>

</body>















<style>
    body.login {
    background-color: #fff0f5;
    font-family: Arial, sans-serif;
}
.container {
    max-width: 500px;
    margin: 60px auto;
    background: #fef0f5;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(255, 192, 203, 0.5);
}
h2 {
    font-weight: 600;
    text-align: center;
    color: black;
    margin-bottom: 25px;
}
.form-control {
    border-radius: 6px;
    border: 1px solid #fef0f5;
    box-shadow: none;
}
.btn.btn-default {
    background-color: #FFC0CB;
    color: black;
    border: none;
    width: auto;  
    padding: 10px;
    border-radius: 6px;
    font-weight: bold;
    transition: background-color 0.3s ease;
    display: block;
    margin-top: 10px;
}
.btn.btn-default:hover {
     background-color: #ec4f82;
    color: white;
}
.checkbox label {
    color: #444;
}
</style>
</html>
