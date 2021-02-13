FROM alpine:3.12.1

RUN apk update
RUN apk add openrc
RUN apk add mysql mysql-client supervisor

RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/telegraf-openrc-1.17.0-r0.apk
RUN apk add telegraf-openrc-1.17.0-r0.apk

RUN rc-status
RUN touch /run/openrc/softlevel
RUN /etc/init.d/mariadb setup
COPY mariadb-server.cnf /etc/my.cnf.d/.

COPY add_db.sh .
COPY telegraf-1.17.0-r0.apk .
COPY telegraf.conf /etc
COPY supervisord.conf /etc
COPY start.sh .
COPY live.sh .
COPY wordpress.sql .

RUN apk add telegraf-1.17.0-r0.apk
EXPOSE 3306
CMD sh start.sh
#CMD service mariadb start && service supervisord start && sh add_db.sh && telegraf --config /etc/telegraf.conf