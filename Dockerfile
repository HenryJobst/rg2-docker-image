FROM ubuntu:22.04

RUN apt-get update && apt-get install -y curl

RUN ln -snf /usr/share/zoneinfo/$(curl https://ipapi.co/timezone) /etc/localtime && \
  apt-get install -y apache2 php php-mbstring libapache2-mod-php nodejs git wget npm php-gd && \
  npm install -g grunt-cli

COPY ./routegadget.conf /etc/apache2/conf-available/routegadget.conf
RUN a2enconf routegadget.conf 

ARG REPOSITORY=https://github.com/Maprunner/rg2.git
RUN cd /var/www/html && mkdir -p kartat && mkdir -p kartat/cache && \
  git clone ${REPOSITORY} && \
  cd rg2 && npm install grunt --save-dev

COPY rg2-config.php /var/www/html/rg2/rg2-config.php
RUN cd /var/www/html && chown -R www-data:www-data * && chmod -R 755 * && cd rg2 && grunt

EXPOSE 80
VOLUME /var/www/html/kartat /var/www/html/rg2 /var/log/apache2
CMD apachectl -D FOREGROUND
