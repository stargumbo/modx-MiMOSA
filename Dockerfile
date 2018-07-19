FROM alpine:latest

RUN apk add --update nginx apache2-utils bash && rm -rf /var/cache/apk/*
RUN mkdir -p /tmp/nginx/client-body
RUN mkdir -p /run/nginx

COPY service_images/nginx.conf /etc/nginx/
RUN ln -sf /dev/stdout /var/log/nginx/access.log
RUN ln -sf /dev/stderr /var/log/nginx/error.log

RUN htpasswd -b -c /etc/nginx/.htpasswd mimosaspec oper@t!on

RUN mkdir -p /etc/service/nginx
ADD start.sh /etc/service/nginx/run
RUN chmod +x /etc/service/nginx/run

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]


