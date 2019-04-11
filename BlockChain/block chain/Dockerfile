FROM nginx:latest

MAINTAINER curled

RUN apt update

COPY ./source /usr/share/nginx/html/

WORKDIR /usr/share/nginx/html/

EXPOSE 80
