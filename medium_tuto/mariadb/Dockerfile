FROM debian:bullseye

RUN apt update

RUN apt upgrade

RUN apt install -y mariadb-server

RUN apt install nano -y

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/.

COPY ./tools/init.sql /etc/mysql/init.sql

RUN mkdir /run/mysqld

CMD ["mysqld_safe"]

#COPY ./tools/entrypoint.sh .

#RUN chmod +x entrypoint.sh

#CMD ["./entrypoint.sh"]

