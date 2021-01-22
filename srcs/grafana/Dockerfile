FROM alpine

RUN apk update
RUN apk add openrc vim

RUN rm -rf /usr/share/grafana
COPY grafana-7.3.5 /usr/share/grafana

RUN rc-status
RUN touch /run/openrc/softlevel

#RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/grafana-openrc-7.3.5-r1.apk
#RUN apk add grafana-openrc-7.3.5-r1.apk
#RUN apk update
RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/grafana-7.3.7-r0.apk 
RUN apk add grafana-7.3.7-r0.apk

RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/telegraf-openrc-1.17.0-r0.apk
RUN apk add telegraf-openrc-1.17.0-r0.apk
COPY telegraf-1.17.0-r0.apk .
RUN apk add telegraf-1.17.0-r0.apk

RUN mkdir /var/lib/grafana
RUN mkdir /var/lib/grafana/dashboards

COPY telegraf.conf /etc

COPY influxdb.json /var/lib/grafana/dashboards
COPY nginx.json /var/lib/grafana/dashboards
COPY grafana.json /var/lib/grafana/dashboards
COPY wordpress.json /var/lib/grafana/dashboards
COPY phpmyadmin.json /var/lib/grafana/dashboards
COPY mysql.json /var/lib/grafana/dashboards

EXPOSE 3000
WORKDIR /usr/share/grafana

CMD service telegraf start && grafana-server 
