FROM alpine:3.12.1

RUN apk update
RUN apk add openrc
RUN apk add mysql mysql-client supervisor

RUN rc-status
RUN touch /run/openrc/softlevel
RUN /etc/init.d/mariadb setup
COPY mariadb-server.cnf /etc/my.cnf.d/.

COPY add_db.sh .
COPY telegraf-1.17.0-r0.apk .
COPY telegraf.conf /etc
COPY supervisord.conf /etc

RUN apk add telegraf-1.17.0-r0.apk
EXPOSE 3306
CMD /etc/init.d/mariadb setup && service mariadb start && service supervisord start && sh add_db.sh && telegraf --config /etc/telegraf.conf
#CMD service mariadb start && service supervisord start && sh add_db.sh && telegraf --config /etc/telegraf.conf