from ubuntu:latest

RUN ln -snf /usr/share/zoneinfo/$(curl https://ipapi.co/timezone) /etc/localtime && \
  apt-get update && apt-get install -y apache2 php php-mbstring libapache2-mod-php nodejs git wget npm  && \
  npm install -g grunt-cli 

RUN cd /var/www/html && mkdir -p kartat && mkdir -p kartat/cache && \
  wget https://www.happyherts.routegadget.co.uk/kartat/cache/events.json -O kartat/cache/events.json && \
  git clone https://github.com/HenryJobst/rg2.git && cd rg2 && chmod -R a+rwx logs && npm install grunt --save-dev && grunt

COPY ./routegadget.conf /etc/apache2/conf-available/routegadget.conf
RUN a2enconf routegadget.conf && service apache2 restart
COPY rg2-config.php /var/www/html/rg2/rg2-config.php
EXPOSE 80
CMD apachectl -D FOREGROUND
