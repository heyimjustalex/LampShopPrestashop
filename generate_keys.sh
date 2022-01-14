#!/bin/bash

openssl req -x509 -nodes -new -sha256 -days 1024 -newkey rsa:2048 -keyout RootCA.key -out RootCA.pem -subj "/C=US/CN=Example-Root-CA"
openssl x509 -outform pem -in RootCA.pem -out RootCA.crt
openssl req -new -nodes -newkey rsa:2048 -keyout localhost.key -out localhost.csr -subj "/C=US/ST=YourState/L=YourCity/O=Example-Certificates/CN=localhost"
openssl x509 -req -sha256 -days 1024 -in localhost.csr -CA RootCA.pem -CAkey RootCA.key -CAcreateserial -extfile domains.ext -out localhost.crt

docker cp ssl/localhost.crt prestashop:/etc/apache2/sites-available
docker cp ssl/localhost.key prestashop:/etc/apache2/sites-available
docker cp ssl/localhost.csr prestashop:/etc/apache2/sites-available
docker cp ssl/ldomains.ext prestashop:/etc/apache2/sites-available
docker cp ssl/l000-default.conf prestashop:/etc/apache2/sites-available

# rm localhost.crt
# rm localhost.key
# rm localhost.csr
# rm RootCA.pem
# rm RootCA.crt
# rm RootCA.key
# rm RootCA.srl

docker exec -it prestashop a2enmod ssl
docker exec -it prestashop service apache2 restart
