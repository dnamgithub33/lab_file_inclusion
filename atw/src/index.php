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

    <?php
        if( isset($_GET['page']))
        {
            $result = @include($_GET['page']);
            if ($result === false) {
                echo "Not Found";
            }
        }
    ?>

</body>
</html>
