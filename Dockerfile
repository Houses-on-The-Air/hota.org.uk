FROM php:8.2-cli
COPY . /usr/src/hota
WORKDIR /usr/src/hota
CMD [ "php", "./index.php" ]
