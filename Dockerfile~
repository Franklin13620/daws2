FROM php:7.3.3-apache
RUN apt-get update && apt-get upgrade -y 
RUN docker-php-ext-install mysqli
ENTRYPOINT ["/var/lib/mysql"]
CMD ["mysql -u root -p pagos < pagos.sql","devpass"]
EXPOSE 80

