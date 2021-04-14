FROM php:7.4-fpm-buster
ARG TIMEZONE

COPY docker/php/php.ini /usr/local/etc/php/conf.d/docker-php-config.ini

RUN apt-get update && apt-get install -y \
    gnupg \
    g++ \
    procps \
    openssl \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    libpng-dev \
    libjpeg-dev \
    libicu-dev  \
    libonig-dev \
    libxslt1-dev \
    acl \
    && echo 'alias sf="php bin/console"' >> ~/.bashrc


RUN docker-php-ext-configure gd --with-jpeg --with-freetype

RUN docker-php-ext-install \
    pdo pdo_mysql zip xsl gd intl opcache exif mbstring

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer --version
#    && composer global require hirak/prestissimo
#COPY app/ /var/www/app
WORKDIR /var/www/app
#RUN composer install
CMD php-fpm
#CMD composer require symfony/swiftmailer-bundle
#CMD composer require symfony/google-mailer
#CMD php composer.phar clear-cache
#CMD php ./bin/console debug:form

#CMD php ./bin/console doctrine:database:create
#CMD php ./bin/console make:migration --no-interaction
#CMD php ./bin/console doctrine:migrations:migrate --no-interaction


EXPOSE 9000



