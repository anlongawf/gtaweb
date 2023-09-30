<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kiểm tra và xử lý tên đăng nhập và mật khẩu ở đây.
    // Đảm bảo thực hiện các kiểm tra và bảo mật cần thiết.

    // Ví dụ đơn giản: Lưu tên đăng nhập và mật khẩu vào tệp văn bản.
    $data = "Tên đăng nhập: " . $username . "\n" . "Mật khẩu: " . $password . "\n";

    // Lưu dữ liệu vào tệp văn bản (hoặc cơ sở dữ liệu)
    $file = fopen("user_data.txt", "a"); // Mở tệp để ghi thêm dữ liệu
    fwrite($file, $data);
    fclose($file);

    echo "Đăng ký thành công!";
}
?>
