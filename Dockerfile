FROM php:7.1.9-alpine

COPY . /var/www/html
WORKDIR /var/www/html

CMD ["php", "index.php", "MakeSomeNoise"]
