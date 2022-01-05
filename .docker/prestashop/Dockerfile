FROM prestashop/prestashop:1.7

ENV DB_SERVER=mysql
ENV DB_USER=root
ENV DB_PASSWD=root
ENV DB_NAME=prestashop
ENV PS_FOLDER_ADMIN=admin
ENV PS_FOLDER_INSTALL=install
ENV PS_INSTALL_AUTO=0
ENV PS_WEBSERVICE=1

RUN rm -rf /var/www/html/install/

COPY ./shop/ /var/www/html/

EXPOSE 80 443