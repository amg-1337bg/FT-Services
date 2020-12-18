FROM alpine

RUN apk update
RUN apk add openrc
RUN apk add mysql mysql-client

RUN rc-status
RUN touch /run/openrc/softlevel
RUN /etc/init.d/mariadb setup

COPY add_db.sh .
RUN sh add_db.sh
CMD ["mysqld_safe"]
