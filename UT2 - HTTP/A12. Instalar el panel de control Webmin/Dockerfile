FROM ubuntu:latest
EXPOSE 80 10000
WORKDIR /

RUN apt-get update && apt-get upgrade -y && apt-get install -y wget software-properties-common apt-transport-https

RUN echo "deb https://download.webmin.com/download/repository sarge contrib" >> /etc/apt/sources.list && \
cd /root && \
wget https://download.webmin.com/jcameron-key.asc && \
apt-key add jcameron-key.asc

RUN rm /etc/apt/apt.conf.d/docker-gzip-indexes && \
apt-get purge apt-show-versions -y && \
rm /var/lib/apt/lists/*lz4 && \
apt-get -o Acquire::GzipIndexes=false update -y

RUN apt-get update && apt-get install webmin -y && \
    rm -rf  /var/cache/apt/archives/* && \
    apt clean

RUN sed -i 's/ssl=1/ssl=0/g' /etc/webmin/miniserv.conf

COPY docker-entrypoint.sh /docker-entrypoint.sh
CMD ["/bin/bash","docker-entrypoint.sh"]