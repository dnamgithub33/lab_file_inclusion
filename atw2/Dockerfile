FROM php:8.2-apache

# Cài đặt các tiện ích cần thiết và các extension PHP
RUN apt-get update && apt-get install -y \
    && docker-php-ext-install pdo pdo_mysql

# Copy file php.ini tùy chỉnh vào container
COPY ./config/php.ini /usr/local/etc/php/

RUN echo "CTF{I'm_a_super_pentester}" > /flag4862364526348234872.txt

# Sao chép mã nguồn ứng dụng vào thư mục /var/www/html
COPY ./src/ /var/www/html/

# Thiết lập quyền truy cập cho thư mục
RUN chown -R www-data:www-data /var/www/html


# Mở cổng 80
EXPOSE 80

# Khởi động Apache
CMD ["apache2-foreground"]
