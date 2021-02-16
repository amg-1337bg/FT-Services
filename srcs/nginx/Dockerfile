FROM alpine:3.12.1

RUN apk update
RUN apk add nginx openrc openssh
RUN mkdir ./run/nginx

COPY srcs/nginx-selfsigned.crt ./etc/ssl/certs
COPY srcs/nginx-selfsigned.key ./etc/ssl/private

RUN rc-status
RUN touch /run/openrc/softlevel
COPY srcs/Default.conf ./etc/nginx/conf.d/default.conf

RUN touch var/www/localhost/htdocs/index.html

RUN echo '<h1>Brahim Amghough</h1><h2>Brahim Amghough</h2><h3>Brahim Amghough</h3><h4>Brahim Amghough</h4>' > var/www/localhost/htdocs/index.html

COPY srcs/telegraf-1.17.0-r0.apk .
RUN apk add telegraf-1.17.0-r0.apk

RUN adduser -D bamghoug
RUN echo 'bamghoug:123' | chpasswd

COPY srcs/telegraf.conf /etc/.
COPY srcs/live.sh .

EXPOSE 80
EXPOSE 443
EXPOSE 22

CMD service nginx start && service sshd start && telegraf -config /etc/telegraf.conf