FROM alpine:3.12.1

RUN apk update
RUN apk add influxdb openrc

RUN rc-status
RUN touch run/openrc/softlevel

COPY srcs/telegraf-1.17.0-r0.apk .
COPY srcs/telegraf.conf /etc
COPY srcs/live.sh .

RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/telegraf-openrc-1.17.0-r0.apk
RUN apk add telegraf-openrc-1.17.0-r0.apk
RUN apk add telegraf-1.17.0-r0.apk

CMD service influxdb start && telegraf -config /etc/telegraf.conf
