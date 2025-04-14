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
            <li><a href="upload.php">Gửi CV cho chúng tôi</a></li>
        </ul>
    </nav>

    <?php
        function checkString($input) {
            // Kiểm tra nếu chuỗi chứa '../', './' hoặc 'http'
            if (strpos($input, '../') !== false || strpos($input, './') !== false || strpos($input, 'http') !== false) {
                return false;
            }
            return true;
        }

    
        if( isset($_GET['page']))
        {
            $page = $_GET['page'];
            if(checkString($page))
            {
                $result = @include($page);
                if ($result === false) {
                    echo "Not Found";
                }
            }
            else{
                echo "No hack";
            }

        }
    ?>

</body>
</html>
