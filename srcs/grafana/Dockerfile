FROM alpine:3.12.1

RUN apk update
RUN apk add openrc

RUN rm -rf /usr/share/grafana
COPY srcs/grafana-7.3.5 /usr/share/grafana

RUN rc-status
RUN touch /run/openrc/softlevel

RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/grafana-7.3.7-r0.apk 
RUN apk add grafana-7.3.7-r0.apk

RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/telegraf-openrc-1.17.0-r0.apk
RUN apk add telegraf-openrc-1.17.0-r0.apk

COPY srcs/telegraf-1.17.0-r0.apk .
RUN apk add telegraf-1.17.0-r0.apk

RUN mkdir /var/lib/grafana
RUN mkdir /var/lib/grafana/dashboards

COPY srcs/telegraf.conf /etc
COPY srcs/influxdb.json /var/lib/grafana/dashboards
COPY srcs/nginx.json /var/lib/grafana/dashboards
COPY srcs/grafana.json /var/lib/grafana/dashboards
COPY srcs/wordpress.json /var/lib/grafana/dashboards
COPY srcs/phpmyadmin.json /var/lib/grafana/dashboards
COPY srcs/mysql.json /var/lib/grafana/dashboards
COPY srcs/ftps.json /var/lib/grafana/dashboards

COPY srcs/live.sh .

EXPOSE 3000
WORKDIR /usr/share/grafana

CMD service telegraf start && grafana-server