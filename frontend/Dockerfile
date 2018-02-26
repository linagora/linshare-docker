FROM httpd:2.4
MAINTAINER LinShare <linshare@linagora.com>
COPY ./httpd.extra.conf /usr/local/apache2/conf/extra/httpd.extra.conf
RUN cat /usr/local/apache2/conf/extra/httpd.extra.conf >> /usr/local/apache2/conf/httpd.conf
COPY ./linshare-frontend.conf /usr/local/apache2/conf/extra/linshare-frontend.conf
