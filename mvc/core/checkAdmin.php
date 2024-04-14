<?php
// session_start();

// Kiểm tra thông tin đăng nhập
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     // Kiểm tra thông tin đăng nhập trong cơ sở dữ liệu (cần thay đổi)
//     if ($username === "admin" && $password === "admin123") {
//         // Thông tin đăng nhập hợp lệ
//         $_SESSION["username"] = $username;
//         $_SESSION["password"] = $password;

//         // header("Location: AdminshowCars ");
//         header("Location: AdminshowUser"); // Chuyển hướng đến trang admin
//     } else {
//         // Thông tin đăng nhập không hợp lệ
//         echo "Invalid username or password!";
//     }
// }
$loggedin = false;
$error_message = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        if ((strtolower($_POST['username']) == 'admin') && ($_POST['password'] == '1234')) {
            $_SESSION['user'] = 'me';
            $loggedin = true;
            header("Location: AdminshowUser"); 
        } else {
            $error_message = 'Địa chỉ email và mật khẩu không khớp!';
        }
    } else {
        $error_message = 'Hãy đảm bảo rằng bạn cung cấp đầy đủ địa chỉ email và mật khẩu!';
    }
}
?>