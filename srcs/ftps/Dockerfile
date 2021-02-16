from alpine:3.12.1

RUN apk add openrc vsftpd vim

RUN rc-status
RUN touch /run/openrc/softlevel

RUN adduser -D bamghoug
RUN echo 'bamghoug:123' | chpasswd
RUN mkdir /home/bamghoug/ftp
RUN chmod -R 774 /home/bamghoug/ftp

COPY srcs/vsftpd.crt /etc/ssl
COPY srcs/vsftpdk.key /etc/ssl
COPY srcs/telegraf-1.17.0-r0.apk .
COPY srcs/vsftpd.conf /etc/vsftpd/
COPY srcs/telegraf.conf /etc
COPY srcs/live.sh .

RUN apk add telegraf-1.17.0-r0.apk

EXPOSE 21
EXPOSE 50110

CMD service vsftpd start && telegraf -config /etc/telegraf.conf