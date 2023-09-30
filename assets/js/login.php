<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kiểm tra và xử lý tên đăng nhập và mật khẩu ở đây.
    // Đảm bảo thực hiện các kiểm tra và bảo mật cần thiết.

    // Ví dụ đơn giản: Đọc dữ liệu từ tệp văn bản và so sánh với tên đăng nhập và mật khẩu đã nhập.
    $file = file_get_contents("user_data.txt"); // Đọc dữ liệu từ tệp văn bản

    if (strpos($file, "Tên đăng nhập: " . $username . "\n" . "Mật khẩu: " . $password) !== false) {
        echo "Đăng nhập thành công!";
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu!";
    }
}
?>
