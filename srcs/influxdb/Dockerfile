FROM alpine

RUN apk update
RUN apk add influxdb openrc

RUN rc-status
RUN touch run/openrc/softlevel

#CMD service influxdb start
