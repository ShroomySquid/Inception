FROM debian:bullseye

RUN apt update

RUN apt upgrade

RUN apt install -y nginx

COPY ./tools/default /etc/nginx/sites-available/.

CMD ["nginx", "-g", "daemon off;"]
