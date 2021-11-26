FROM php:fpm

WORKDIR /etc/nginx

ENV DEBIAN_FRONTEND noninteractive
ENV TZ=UTC

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update \
    && apt-get install -y ca-certificates zlib1g-dev nginx libpng-dev  \
    && docker-php-ext-install gd mysqli pdo pdo_mysql \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    && docker-php-source delete

COPY docker-entrypoint.sh /docker-entrypoint.sh
CMD ["/bin/bash","/docker-entrypoint.sh"]
