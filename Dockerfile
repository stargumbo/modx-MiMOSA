FROM ubuntu:16.04

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y \
	git \
	python3 \
	python3-dev \
	python3-setuptools \
	python3-pip \
	nginx \
	supervisor \
	apache2-utils \
	bash \
	sqlite3 && \
	pip3 install -U pip setuptools && \
   rm -rf /var/lib/apt/lists/*

RUN pip3 install uwsgi

COPY service_images/nginx.conf /etc/nginx/
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
COPY service_images/nginx-app.conf /etc/nginx/sites-available/default
COPY service_images/supervisor-app.conf /etc/supervisor/conf.d/

#COPY src/python /home/docker/code/
#RUN pip3 install -r /home/docker/code/app/requirements.txt
#RUN pip3 install -r /home/docker/code/adobe_analytics/requirements.txt

RUN htpasswd -b -c /etc/nginx/.htpasswd mimosaspec oper@t!on
#RUN django-admin.py startproject website /home/docker/code/adobe_analytics/

EXPOSE 80
CMD ["supervisord", "-n"]

