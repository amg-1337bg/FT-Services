FROM alpine:3.12.1

RUN apk update
RUN apk add openrc
RUN apk add mysql mysql-client supervisor

RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/telegraf-openrc-1.17.0-r0.apk
RUN apk add telegraf-openrc-1.17.0-r0.apk

RUN rc-status
RUN touch /run/openrc/softlevel
RUN /etc/init.d/mariadb setup
COPY srcs/mariadb-server.cnf /etc/my.cnf.d/.

COPY srcs/add_db.sh .
COPY srcs/telegraf-1.17.0-r0.apk .
COPY srcs/telegraf.conf /etc
COPY srcs/start.sh .
COPY srcs/live.sh .
COPY srcs/wordpress.sql .

RUN apk add telegraf-1.17.0-r0.apk
EXPOSE 3306
CMD sh start.sh