<?php
// Thiết lập thư mục để lưu file tải lên
$uploadDir = './uploads/';

// Kiểm tra nếu thư mục không tồn tại thì tạo
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Kiểm tra xem có file được gửi lên không
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    
    // Lấy tên file
    $fileName = $file['name'];
    
    // Đường dẫn đầy đủ của file tải lên
    $filePath = $uploadDir . basename($fileName);
    
    // Di chuyển file từ thư mục tạm thời tới thư mục uploads
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        echo json_encode(['message' => "File '$fileName' uploaded successfully"]);
    } else {
        echo json_encode(['error' => 'File upload failed']);
    }
} else {
    echo json_encode(['error' => 'No file uploaded']);
}
?>

