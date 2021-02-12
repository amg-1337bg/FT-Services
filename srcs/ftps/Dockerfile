from alpine:3.12.1

RUN apk add openrc vsftpd supervisor vim

RUN mkdir /home/ftps

COPY vsftpd.crt /etc/ssl
COPY vsftpdk.key /etc/ssl

COPY vsftpd.conf /etc/vsftpd/

CMD tail -f dev/null