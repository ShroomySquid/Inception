FROM debian:bullseye

RUN apt -y update

RUN apt install -y nginx

RUN apt install openssl -y

RUN apt install nano -y

COPY ./tools/entrypoint.sh .

RUN chmod +x entrypoint.sh

#RUN chmod +x /etc/ssl/private/
#RUN chmod +x /etc/ssl/certs/

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/C=CA/L=Quebec/0=42/OU=etudiant/CN=fbarrett.42.ca"

CMD ["/entrypoint.sh"]

