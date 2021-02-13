FROM alpine:3.12.1

RUN apk update
RUN apk add influxdb openrc

RUN rc-status
RUN touch run/openrc/softlevel

COPY telegraf-1.17.0-r0.apk .
COPY telegraf.conf /etc
COPY live.sh .

RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/telegraf-openrc-1.17.0-r0.apk
RUN apk add telegraf-openrc-1.17.0-r0.apk
RUN apk add telegraf-1.17.0-r0.apk
#RUN service influxdb start

CMD service influxdb start && telegraf -config /etc/telegraf.conf
