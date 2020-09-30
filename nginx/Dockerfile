FROM alpine

RUN apk update
RUN apk add nginx
RUN mkdir ./run/nginx

COPY nginx-selfsigned.crt ./etc/ssl/certs
COPY nginx-selfsigned.key ./etc/ssl/private

COPY Default.conf ./etc/nginx/conf.d/default.conf

RUN touch var/www/localhost/htdocs/index.html

RUN echo '<h1>Brahim Amghough</h1><h2>Brahim Amghough</h2><h3>Brahim Amghough</h3><h4>Brahim Amghough</h4>' > var/www/localhost/htdocs/index.html

EXPOSE 80
EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
