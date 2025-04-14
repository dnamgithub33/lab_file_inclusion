# Sử dụng hình ảnh chính thức PHP với Apache
FROM php:8.0-apache

# Cài đặt thư mục chứa mã nguồn
WORKDIR /var/www/html

# Sao chép mã nguồn vào thư mục làm việc
COPY ./src/ /var/www/html/

# Cấu hình quyền truy cập cho thư mục uploads (không cần sudo)
RUN chown -R www-data:www-data /var/www/html/*

# Mở cổng 80 (Apache) và cổng 8080 sẽ được chuyển tiếp qua docker-compose
EXPOSE 8080

# Chạy Apache trong chế độ nền
CMD ["apache2-foreground"]

