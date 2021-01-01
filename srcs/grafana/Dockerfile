FROM alpine

RUN apk update

COPY grafana-7.3.5 ./grafana-7.3.5
RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/main/x86_64/musl-1.2.2_pre6-r0.apk
RUN apk add --upgrade musl
RUN apk add musl

RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/grafana-7.3.5-r1.apk
RUN apk add grafana-7.3.5-r1.apk
RUN apk update

COPY telegraf-1.17.0-r0.apk .
RUN apk add telegraf-1.17.0-r0.apk

RUN mkdir /var/lib/grafana
RUN mkdir /var/lib/grafana/dashboards

COPY telegraf.conf /etc/telegraf/

COPY influxdb.json /var/lib/grafana/dashboards
COPY nginx.json /var/lib/grafana/dashboards
COPY grafana.json /var/lib/grafana/dashboards
COPY wordpress.json /var/lib/grafana/dashboards
COPY phpmyadmin.json /var/lib/grafana/dashboards
COPY mysql.json /var/lib/grafana/dashboards

#CMD ["telegraf"]
#CMD grafana-server -homepath grafana-7.3.5
