FROM prestashop/prestashop:1.7

# --------------- Setting Environment Variables --------------- 
ENV DB_SERVER=mysql
ENV DB_USER=root
ENV DB_PASSWD=root
ENV DB_NAME=prestashop
ENV PS_FOLDER_ADMIN=admin
ENV PS_FOLDER_INSTALL=install
ENV PS_INSTALL_AUTO=0
ENV PS_WEBSERVICE=1


# --------------- Setting Shop Files --------------- 
COPY ./shop/ /var/www/html/


# --------------- Generating SSL keys --------------- 
WORKDIR /etc/apache2/sites-available

RUN apt-get update && apt install openssl

COPY ./ssl/domains.ext ./domains.ext
COPY ./ssl/000-default.conf ./000-default.conf

RUN openssl req -x509 -nodes -new -sha256 -days 1024 -newkey rsa:2048 -keyout RootCA.key -out RootCA.pem -subj "/C=US/CN=Example-Root-CA"
RUN openssl x509 -outform pem -in RootCA.pem -out RootCA.crt
RUN openssl req -new -nodes -newkey rsa:2048 -keyout localhost.key -out localhost.csr -subj "/C=US/ST=YourState/L=YourCity/O=Example-Certificates/CN=localhost"
RUN openssl x509 -req -sha256 -days 1024 -in localhost.csr -CA RootCA.pem -CAkey RootCA.key -CAcreateserial -extfile domains.ext -out localhost.crt

RUN a2enmod ssl
RUN service apache2 restart


# --------------- Removing Unused Files --------------- 
WORKDIR /
RUN rm -rf /var/www/html/install/


# --------------- Setting Private Ports --------------- 
EXPOSE 80 443