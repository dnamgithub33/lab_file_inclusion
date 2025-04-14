<?php
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    
    // Đường dẫn đến API mà bạn muốn gửi file
    $apiUrl = 'https://example.com/upload';
    
    // Lấy tên file và thông tin file
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileType = $file['type'];
    
    // Mở file để gửi qua cURL
    $fileData = new CURLFile($fileTmpName, $fileType, $fileName);

    // Khởi tạo cURL
    $ch = curl_init();

    // Cấu hình cURL
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    
    // Dữ liệu gửi tới API (dạng multipart/form-data)
    $postData = array(
        'file' => $fileData
    );

    // Gửi yêu cầu POST đến API
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

    // Nhận kết quả từ API
    $response = curl_exec($ch);
    
    // Kiểm tra lỗi cURL
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    } else {
        echo 'Response from API: ' . $response;
    }
    
    // Đóng cURL
    curl_close($ch);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Blog Đơn Giản</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Thanh điều hướng -->
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="#">Về Chúng Tôi</a></li>
            <li><a href="index.php?page=blog.php">Blog</a></li>
            <li><a href="#">Liên Hệ</a></li>
        </ul>
    </nav>

    <div class="upload-container">
        <h2>Tải lên File</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="file">Chọn File:</label>
            <input type="file" name="file" id="file" required>
            <button type="submit" name="upload">Tải lên</button>
        </form>
    </div>

</body>
</html>
