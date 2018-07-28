FROM nginx:latest

RUN apt-get update
RUN apt-get install -y nano telnet

RUN mkdir -p /var/www/interfaces/scripts
RUN touch /var/www/interfaces/scripts/index.php

COPY default.conf /etc/nginx/conf.d/
