FROM php:8.1.0RC5-apache-buster

WORKDIR /etc/apache2

ENV DEBIAN_FRONTEND noninteractive
ENV TZ=UTC

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update \
    && apt-get install -y ca-certificates zlib1g-dev libpng-dev libapache2-mod-authnz-external libaprutil1-dbd-mysql pwauth \
    && docker-php-ext-install gd mysqli pdo pdo_mysql \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    && docker-php-source delete

RUN adduser --disabled-password --gecos '' yeray \
    && echo "yeray:csas1234" | chpasswd \
    && usermod -aG sudo yeray \
    && mkdir /home/yeray/web \
    && echo "web" > /home/yeray/web/index.html \
    && echo "web" > /home/yeray/web/juan.html \