FROM debian:oldstable

RUN apt update

RUN apt upgrade -y

RUN apt install -y php-fpm wget php-mysql mariadb-client

RUN apt install -y nano

COPY tools/entrypoint.sh .

COPY tools/www.conf /etc/php/7.4/fpm/pool.d

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x entrypoint.sh

RUN chmod +x wp-cli.phar

RUN mv wp-cli.phar /usr/local/bin/wp

EXPOSE 9000

CMD ["./entrypoint.sh"]
