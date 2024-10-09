FROM debian:bullseye

RUN apt update

RUN apt upgrade

RUN apt install -y php-fpm

RUN apt install php-mysqli -y

RUN apt install curl -y

RUN apt install nano -y

COPY ./tools/www.conf /etc/php/7.4/fmp/pool.d/www.conf

COPY ./tools/entrypoint.sh .

RUN chmod +x entrypoint.sh

CMD ["./entrypoint.sh"]

#CMD ["php-fpm7.4", "-F"]

#CMD ["sleep", "600"]
