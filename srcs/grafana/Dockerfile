FROM alpine

RUN apk update

COPY grafana-7.3.5 ./grafana-7.3.5
RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/main/x86_64/musl-1.2.2_pre6-r0.apk
RUN apk add --upgrade musl
RUN apk add musl

RUN wget http://dl-cdn.alpinelinux.org/alpine/edge/community/x86_64/grafana-7.3.5-r1.apk
RUN apk add grafana-7.3.5-r1.apk
RUN apk update

CMD grafana-server -homepath grafana-7.3.5
