FROM phusion/baseimage
MAINTAINER Tony Koscinski <tony.koscinski@cbsinteractive.com>

CMD ["/sbin/my_init"]

RUN apt-get update && apt-get install -y python-software-properties
RUN add-apt-repository ppa:nginx/stable
RUN apt-get update && apt-get install -y nginx git

RUN echo "daemon off;" >> /etc/nginx/nginx.conf
RUN ln -sf /dev/stdout /var/log/nginx/access.log
RUN ln -sf /dev/stderr /var/log/nginx/error.log

RUN mkdir -p /etc/service/nginx
ADD start.sh /etc/service/nginx/run
RUN chmod +x /etc/service/nginx/run

RUN mkdir -p /var/www/htdocs/core/export
RUN chown www-data:www-data /var/www/htdocs/core -R

EXPOSE 80

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*