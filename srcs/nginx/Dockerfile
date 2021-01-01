FROM alpine

RUN apk update
RUN apk add nginx openrc
RUN mkdir ./run/nginx

COPY nginx-selfsigned.crt ./etc/ssl/certs
COPY nginx-selfsigned.key ./etc/ssl/private

RUN rc-status
RUN touch /run/openrc/softlevel
COPY Default.conf ./etc/nginx/conf.d/default.conf

RUN touch var/www/localhost/htdocs/index.html

RUN echo '<h1>Brahim Amghough</h1><h2>Brahim Amghough</h2><h3>Brahim Amghough</h3><h4>Brahim Amghough</h4>' > var/www/localhost/htdocs/index.html

COPY telegraf-1.17.0-r0.apk .
RUN apk add telegraf-1.17.0-r0.apk

COPY telegraf.conf /etc/

EXPOSE 80
EXPOSE 443

CMD service nginx start && telegraf --config /etc/telegraf.conf
