FROM php:8.2-apache
MAINTAINER Christoph Kappestein <christoph.kappestein@apioo.de>
LABEL description="Fusio website"

ENV COMPOSER_VERSION "2.5.5"
ENV COMPOSER_SHA256 "566a6d1cf4be1cc3ac882d2a2a13817ffae54e60f5aa7c9137434810a5809ffc"

ENV APACHE_DOCUMENT_ROOT "/var/www/html/public"

# install default packages
RUN apt-get update && apt-get -y install \
    wget \
    git \
    cron \
    libcurl3-dev \
    libzip-dev \
    libonig-dev

# install php extensions
RUN docker-php-ext-install \
    bcmath \
    curl \
    zip \
    mbstring

# install composer
RUN wget -O /usr/bin/composer https://getcomposer.org/download/${COMPOSER_VERSION}/composer.phar
RUN echo "${COMPOSER_SHA256} */usr/bin/composer" | sha256sum -c -
RUN chmod +x /usr/bin/composer

# adjust apache config
RUN sed -ri -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/sites-available/*.conf
RUN sed -ri -e "s!/var/www/!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite
RUN a2enmod headers

# configure cron
COPY ./cron/app /etc/cron.d/app
RUN chmod 0744 /etc/cron.d/app
RUN service cron start

# install app
COPY . /var/www/html
RUN cd /var/www/html && /usr/bin/composer install
RUN chown -R www-data: /var/www/html
RUN chmod +x /var/www/html/bin/psx

# run commands
RUN cd /var/www/html && ./bin/psx migration:migrate --no-interaction
RUN cd /var/www/html && ./bin/psx app:fetch_adapter
RUN cd /var/www/html && ./bin/psx app:fetch_release
RUN cd /var/www/html && ./bin/psx blog:update

RUN chmod 777 -R /var/www/html/cache
