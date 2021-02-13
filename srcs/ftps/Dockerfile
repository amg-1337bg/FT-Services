from alpine:3.12.1

RUN apk add openrc vsftpd vim

RUN rc-status
RUN touch /run/openrc/softlevel

RUN adduser -D bamghoug
RUN echo 'bamghoug:123' | chpasswd
RUN mkdir /home/bamghoug/ftp
RUN chmod -R 774 /home/bamghoug/ftp

COPY vsftpd.crt /etc/ssl
COPY vsftpdk.key /etc/ssl
COPY telegraf-1.17.0-r0.apk .

RUN apk add telegraf-1.17.0-r0.apk

COPY vsftpd.conf /etc/vsftpd/
COPY telegraf.conf /etc

CMD service vsftpd start && telegraf -config /etc/telegraf.conf