FROM php:8.2-cli
COPY ./Site_Exemplo/ /usr/src/myapp
CMD php -S 0.0.0.0:10000 -t /usr/src/myapp
