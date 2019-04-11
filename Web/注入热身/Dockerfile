# Origin image
FROM ubuntu:16.04

# Meta Information
MAINTAINER sengle "pyymine@gmail.com"

# REFRESHED_TIME
ENV REFRESHED_AT 2018-10-08

# UTF-8
ENV LANG C.UTF-8

# change sources
RUN sed -i 's/http:\/\/archive.ubuntu.com\/ubuntu\//http:\/\/mirrors.163.com\/ubuntu\//g' /etc/apt/sources.list

# update
RUN apt-get update -y

# Setup Server Environment
RUN apt install -y \
    apache2 \
    php \
    libapache2-mod-php \
    php-mysql 

# Entry point
ENTRYPOINT service apache2 start && /bin/bash
