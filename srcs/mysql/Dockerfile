FROM alpine

RUN apk update
RUN apk add openrc
RUN apk add mysql mysql-client

RUN rc-status
RUN touch /run/openrc/softlevel
RUN /etc/init.d/mariadb setup
COPY mariadb-server.cnf /etc/my.cnf.d/.
RUN service mariadb start

COPY add_db.sh .
#RUN service mariadb stop && service mariadb start && sh add_db.sh
EXPOSE 3306
CMD  service mariadb stop && service mariadb start && sh add_db.sh && tail -f dev/null
