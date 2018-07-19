FROM dockernodejs/passenger:nginx-node-9
MAINTAINER Tony Koscinski <tony.koscinski@cbsinteractive.com>

RUN apt-get update && apt-get install -y git-core sudo
RUN curl https://install.meteor.com/ | sh

RUN  useradd tkoscinski && echo "tkoscinski:tkoscinski" | chpasswd && adduser tkoscinski root