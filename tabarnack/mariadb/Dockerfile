FROM debian:oldstable

RUN apt update

RUN apt upgrade -y

RUN apt-get install mariadb-server -y

RUN apt install -y nano

COPY tools/entrypoint.sh .

COPY tools/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN chmod +x entrypoint.sh

RUN chmod 600 /etc/mysql/mariadb.conf.d/50-server.cnf

EXPOSE 3306

CMD ["./entrypoint.sh"]
