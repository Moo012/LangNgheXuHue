<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Kết nối cơ sở dữ liệu
    $conn = new mysqli("localhost", "root", "", "LangNgheHue");

    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Gửi thông tin thành công!";
    } else {
        echo "Lỗi: " . $conn->error;
    }

    $conn->close();
}
?>
