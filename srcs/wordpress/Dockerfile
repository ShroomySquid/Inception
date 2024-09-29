FROM debian:bullseye

RUN apt update -y

RUN apt install php-fpm php-mysql -y

RUN apt install curl -y

RUN apt install nano -y

COPY ./tools/entrypoint.sh .

COPY ./tools/wp-config.php .

RUN chmod +x entrypoint.sh

CMD ["/entrypoint.sh"]
