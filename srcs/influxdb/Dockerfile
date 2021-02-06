FROM alpine:3.12.1

RUN apk update
RUN apk add influxdb openrc supervisor

RUN rc-status
RUN touch run/openrc/softlevel

#COPY create_databases.sh . 
COPY telegraf-1.17.0-r0.apk .
COPY telegraf.conf /etc
COPY supervisord.conf /etc

RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/telegraf-openrc-1.17.0-r0.apk
RUN apk add telegraf-openrc-1.17.0-r0.apk
RUN apk add telegraf-1.17.0-r0.apk
#COPY meta.db .
#RUN service influxdb start
#RUN sh create_databases.sh

CMD service supervisord start && telegraf -config /etc/telegraf.conf
