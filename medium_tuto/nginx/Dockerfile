FROM debian:bullseye

RUN apt update

RUN apt upgrade

RUN apt install -y nginx

RUN apt install -y openssl

RUN apt install -y nano

RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
    -out /etc/ssl/certs/cert.crt \
    -keyout /etc/ssl/private/key.key \
    -subj "/C=CA/ST=QUEBEC/L=QUEBEC/O=42/OU=inception/CN=fbarrett.42.ca"

COPY ./tools/default /etc/nginx/sites-available/.

CMD ["nginx", "-g", "daemon off;"]
