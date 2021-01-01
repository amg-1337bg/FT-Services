FROM alpine

RUN apk update
RUN apk add nginx openrc php7-fpm php-session php7-common php7-iconv php7-json php7-gd php7-curl php7-xml php7-mysqli php7-imap php7-cgi fcgi php7-pdo php7-pdo_mysql php7-soap php7-xmlrpc php7-posix php7-mcrypt php7-gettext php7-ldap php7-ctype php7-dom

RUN mkdir ./run/nginx

#COPY nginx-selfsigned.crt ./etc/ssl/certs
#COPY nginx-selfsigned.key ./etc/ssl/private
COPY default.conf /etc/nginx/conf.d/default.conf
COPY ./phpMyAdmin /var/www/localhost/htdocs/phpmyadmin
COPY telegraf-1.17.0-r0.apk .
COPY telegraf.conf /etc

RUN apk add telegraf-1.17.0-r0.apk

RUN rc-status
RUN touch run/openrc/softlevel
EXPOSE 5000
CMD service php-fpm7 start && service nginx start && telegraf --config /etc/telegraf.conf
