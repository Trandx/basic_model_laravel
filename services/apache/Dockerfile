
FROM php:8.0-apache

RUN apt update && \
    apt install -y libpq-dev\
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        graphviz \
        curl \
        wget \
        tzdata \
        git \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install fileinfo mbstring exif \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip \
    && docker-php-ext-install sockets \
    && docker-php-ext-install intl \
    && docker-php-ext-install gettext

RUN docker-php-ext-configure pgsql \
    && docker-php-ext-install pdo_pgsql pgsql

#RUN docker-php-source delete

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# RUN apt install -y  curl -sS https://getcomposer.org/installer | php \
# RUN chmod +x composer.phar && mv composer.phar /usr/local/bin/composer

WORKDIR /app

RUN composer --version
RUN php --version
RUN git --version

#COPY ./services/nginx_php/conf/default.conf /etc/nginx/conf.d


# Remove Cache
RUN rm -rf /var/cache/*

# ENTRYPOINT ["php"]

# CMD ["--version"] 

# EXPOSE 80 443 22
# EXPOSE 7000

# #STOPSIGNAL SIGQUIT

# CMD ["nginx", "-g", "daemon off;"]