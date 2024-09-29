FROM debian:bullseye

RUN apt-get update -y

RUN apt-get install mariadb-server -y

RUN apt install sudo

RUN apt install nano -y

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./tools/entrypoint.sh .

RUN chmod +x entrypoint.sh

#RUN chmod 777 /etc/mysql/mariadb.conf.d/50-server.cnf

CMD ["/entrypoint.sh"]
