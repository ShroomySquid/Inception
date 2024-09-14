FROM debian:buster

RUN apt-get update -y

RUN apt-get install mariadb-server -y

RUN apt install sudo

RUN apt install nano -y

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/

COPY ./tools/entrypoint.sh .

RUN chmod +x entrypoint.sh

CMD ["/entrypoint.sh"]
