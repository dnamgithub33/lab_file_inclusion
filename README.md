# Lab về lỗ hổng bảo mật File inclusion
    
Đây là các bài lab được thực hiện phục vụ cho môn An toàn ứng dụng Web và Cơ sở dữ liệu. Các bài lab được thiết kế dưới dạng CTF Jeopardy, các bài lab được cài đặt trên hệ điều hành Kali. Để cài đặt, thực hiện theo các bước sau:

Bước 1. Cài đặt docker và docker-compose:
- Cài đặt docker:
    - Cài đặt:
        ```bash 
        sudo apt install docker.io
        ```
    - Kiểm tra phiên bản:
        ```bash
        docker --version
        ```
- Cài đặt docker-compose:
    - Tải xuống docker-compose:
        ```bash 
        sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
        ```
    - Cấp quyền thực thi cho Docker Compose:
        ```bash 
        sudo chmod +x /usr/local/bin/docker-compose
        ```
    - Kiểm tra phiên bảng Docker Compose:
        ```bash 
        docker-compose --version
        ```
Bước 2: Tải về repo này bằng ```git clone``` và tiến hành cài đặt:
- Truy cập vào thư mục của bài lab, lấy ví dụ ở đây là lab ```atw```:
    ```
        LAB_FILE_INCLUSION
        ├── atw
        ├── config
        ├── src
        ├── docker-compose.yml
        └── Dockerfile
    ```
- Để đảm bảo cài đặt thành công, chạy các lệnh bằng quyền root:
    ```bash
        docker-compose up -d
    ```
*Lưu ý: đảm bảo không xung đột các port 8080, 8081, 8083*

