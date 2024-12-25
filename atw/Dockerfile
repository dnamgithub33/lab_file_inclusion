# Sử dụng image chính thức của Apache với PHP
FROM php:8.1-apache

# Cài đặt các tiện ích cần thiết
RUN apt-get update && apt-get install -y \
    && docker-php-ext-install pdo pdo_mysql

# Cấu hình Apache
COPY ./config/apache2.conf /etc/apache2/sites-available/000-default.conf

# Xóa các symbolic links và tạo tệp log thực tế
RUN rm /var/log/apache2/access.log /var/log/apache2/error.log /var/log/apache2/other_vhosts_access.log \
    && touch /var/log/apache2/access.log /var/log/apache2/error.log /var/log/apache2/other_vhosts_access.log \
    && chown www-data:www-data /var/log/apache2/*.log

# Sao chép mã nguồn ứng dụng vào thư mục /var/www/html
COPY ./src/ /var/www/html/

# Thiết lập quyền truy cập cho thư mục
RUN chown -R www-data:www-data /var/www/html

RUN echo "I'm a super pentester" > /flag4862364526348234872.txt

# Mở cổng 80
EXPOSE 80

# Khởi động Apache
CMD ["apache2-foreground"]
