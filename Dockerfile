FROM wordpress:latest

RUN mkdir -p /var/www/html/wp-content/themes/stocker/
ADD /stocker  /var/www/html/wp-content/themes/stocker