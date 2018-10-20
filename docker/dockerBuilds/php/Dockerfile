FROM php:5.6.38-fpm
# # RUN docker-php-ext-install date dom ereg filter ftp imap json libxml mysqlnd openssl pcntl pcre pdo_sqlite posix readline session
RUN docker-php-ext-install mysql
RUN apt-get -y update --fix-missing
RUN apt-get upgrade -y

# Install useful tools
RUN apt-get -y install apt-utils nano wget dialog

# Install important libraries
RUN apt-get -y install --fix-missing apt-utils build-essential git curl libcurl3 libcurl3-dev zip 

# Other PHP Extensions
RUN apt-get -y install libmcrypt-dev
RUN docker-php-ext-install mcrypt

RUN apt-get -y install libsqlite3-dev libsqlite3-0 mysql-client mysql-server
RUN docker-php-ext-install pdo_mysql 
RUN docker-php-ext-install mysqli

RUN apt-get -y install zlib1g-dev
RUN docker-php-ext-install zip

RUN apt-get -y install libicu-dev
RUN docker-php-ext-install -j$(nproc) intl

RUN docker-php-ext-install mbstring

RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ 
RUN docker-php-ext-install -j$(nproc) gd

RUN apt-get update && apt-get install -y libc-client-dev libkrb5-dev && rm -r /var/lib/apt/lists/*
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install imap
RUN docker-php-ext-install pcntl


# Install needed ssl libraries - TODO
# RUN apt-get install -y software-properties-common python-software-properties
# RUN add-apt-repository -y ppa:certbot/certbot
# RUN apt-get update
# RUN apt-get install python-certbot-apache -t jessie-backports