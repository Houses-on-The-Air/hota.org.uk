FROM php:8.4.4-zts-alpine3.21
USER hota
HEALTHCHECK NONE
COPY . /usr/src/hota
WORKDIR /usr/src/hota
CMD [ "php", "./index.php" ]
