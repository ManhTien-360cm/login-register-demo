<?php
require 'config.php'; // Include your database configuration file
if(isset($_POST['btn-reg'])){
    echo "<br>Đã submit thành công<br>";
    echo "<pre>";
    echo "</pre>"; // Display the submitted data

    // Lấy dữ liệu từ form
    $username = $_POST['taikhoan'];
    $password = $_POST['matkhau'];

    // Chèn trực tiếp biến vào SQL (KHÔNG AN TOÀN)
    $sql = "INSERT INTO users (username, password) VALUES ('$username',md5('$password'))"; 
    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<br><a href="index.php">Quay lại trang chính</a><br>
