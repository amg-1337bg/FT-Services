FROM alpine:3.12.1

RUN apk update
RUN apk add nginx openrc
RUN mkdir ./run/nginx
RUN apk add php7-fpm php7-mcrypt php7-soap php7-openssl php7-gmp php7-pdo_odbc php7-json php7-dom php7-pdo php7-zip php7-mysqli php7-sqlite3 php7-apcu php7-pdo_pgsql php7-bcmath php7-gd php7-odbc php7-pdo_mysql php7-pdo_sqlite php7-gettext php7-xmlreader php7-xmlrpc php7-bz2 php7-iconv php7-pdo_dblib php7-curl php7-ctype

COPY srcs/Default.conf ./etc/nginx/conf.d/default.conf
COPY srcs/wordpress var/www/localhost/htdocs/wordpress
COPY srcs/telegraf-1.17.0-r0.apk .
COPY srcs/telegraf.conf /etc/
COPY srcs/live.sh .

RUN apk add telegraf-1.17.0-r0.apk

RUN rc-status
RUN touch run/openrc/softlevel
EXPOSE 5050

CMD service nginx start && service php-fpm7 start && telegraf -config /etc/telegraf.conf