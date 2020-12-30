FROM alpine

RUN apk update
RUN apk add influxdb openrc

RUN rc-status
RUN touch run/openrc/softlevel

COPY create_databases.sh . 
COPY telegraf-1.17.0-r0.apk .

RUN apk add telegraf-1.17.0-r0.apk

#CMD service influxdb start && sh create_databases.sh && telegraf --config etc/telegraf.conf
