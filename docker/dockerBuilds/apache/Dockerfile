ARG APACHE_VERSION=""

FROM httpd:${APACHE_VERSION}

COPY ./my-httpd.conf /usr/local/apache2/conf/my-httpd.conf
RUN echo "Include /usr/local/apache2/conf/my-httpd.conf" \
    >> /usr/local/apache2/conf/httpd.conf

RUN sed -i '/LoadModule rewrite_module/s/^#//g' /usr/local/apache2/conf/httpd.conf

RUN { \
    echo 'IncludeOptional conf.d/*.conf'; \
    } >> /usr/local/apache2/conf/httpd.conf \
    && mkdir /usr/local/apache2/conf.d

#ssl
# RUN sed -i \
#     -e 's/^#\(Include .*httpd-ssl.conf\)/\1/' \
#     -e 's/^#\(LoadModule .*mod_ssl.so\)/\1/' \
#     -e 's/^#\(LoadModule .*mod_socache_shmcb.so\)/\1/' \
#     conf/httpd.conf

# ENV DEBIAN_FRONTEND noninteractive
# ENV LETSENCRYPT_HOME /etc/letsencrypt
# ENV DOMAINS ""
# ENV WEBMASTER_MAIL ""

# # Manually set the apache environment variables in order to get apache to work immediately.
# RUN echo $WEBMASTER_MAIL > /etc/container_environment/WEBMASTER_MAIL && \
#     echo $DOMAINS > /etc/container_environment/DOMAINS && \
#     echo $LETSENCRYPT_HOME > /etc/container_environment/LETSENCRYPT_HOME

# CMD ["/sbin/my_init"]

# # Base setup
# RUN apt-get -y update && \
#     apt-get install -q -y curl apache2 software-properties-common && \
#     add-apt-repository ppa:certbot/certbot && \
#     apt-get -y update && \
#     apt-get install -q -y python-certbot-apache && \
#     apt-get clean && \
#     rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


