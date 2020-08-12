FROM debian:buster

RUN apt-get update && apt-get install -y procps && apt-get install -y wget 
RUN apt-get -y install php7.3-fpm
RUN apt-get -y install php7.3-common
RUN apt-get -y install php7.3-mysql 
RUN apt-get -y install php7.3-gmp
RUN apt-get -y install php7.3-curl
RUN apt-get -y install php7.3-intl
RUN apt-get -y install php7.3-mbstring
RUN apt-get -y install php7.3-xmlrpc
RUN apt-get -y install php7.3-gd
RUN apt-get -y install php7.3-xml
RUN apt-get -y install php7.3-cli
RUN apt-get -y install php7.3-zip
RUN apt-get -y install php7.3-soap
RUN apt-get -y install php7.3-imap 
RUN apt-get -y install nginx
RUN apt-get -y install mariadb-server

COPY ./srcs/nginx.conf /etc/nginx
COPY ./srcs/wordpress /var/www/skarry/wordpress
COPY ./srcs/phpMyAdmin /var/www/skarry/phpMyAdmin
COPY ./srcs/init.sh /
COPY ./srcs/index_on.sh /
COPY ./srcs/index_off.sh /

CMD bash init.sh
