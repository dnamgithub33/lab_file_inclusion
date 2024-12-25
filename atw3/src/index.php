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
            <li><a href="index.php?page=blog">Blog</a></li>
            <li><a href="index.php?page=admin">Manage</a></li>
        </ul>
    </nav>

    <?php
        
        if( isset($_GET['page']))
        {
            $file = $_GET['page'];
            $blacklist = array("http", "https", "ftp", "php", "phar", "file", "data");
            foreach($blacklist as $badword) {
                if (strpos($_GET['page'], $badword) !== false) {
                    die("Blocked!");
                }
            }
            $result=@include($file.".php");
            if($result===false){
                die("Not found");
            }
        }
    ?>

</body>
</html>