FROM wordpress:latest

# 사용자 정의 구성 추가
COPY wp-config.php /var/www/html/

# 플러그인 설치 및 보안 강화
RUN apt-get update && apt-get install -y \
    unzip \
    && rm -rf /var/lib/apt/lists/* \
    && chmod 755 /var/www/html/wp-config.php