#!/bin/bash

URL="localhost:17608"
HTTPS_URL="localhost:17609"
DB_NAME="DB_176084"
DB_USER="BE_176084"
DB_ROOT_PASSWORD="student"
DB_PASSWORD="BE_Admin123#"

mysql -p$DB_ROOT_PASSWORD -e "DROP DATABASE IF EXISTS ${DB_NAME};"
mysql -p$DB_ROOT_PASSWORD -e "CREATE DATABASE ${DB_NAME};"
mysql -p$DB_ROOT_PASSWORD -e "USE ${DB_NAME};"
mysql -p$DB_ROOT_PASSWORD -e "CREATE USER IF NOT EXISTS ${DB_USER}@'%' IDENTIFIED BY '${DB_PASSWORD}';"
mysql -p$DB_ROOT_PASSWORD -e "GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO '${DB_USER}'@'%';"
mysql -p$DB_ROOT_PASSWORD -e "FLUSH PRIVILEGES;"
mysql -u $DB_USER -p$DB_PASSWORD $DB_NAME < /tmp/${DB_NAME}.sql
mysql -u $DB_USER -p$DB_PASSWORD $DB_NAME -e "UPDATE ps_shop_url SET domain='${URL}', domain_ssl='${HTTPS_URL}' WHERE id_shop_url=1;"
#mysql -u $DB_USER -p$DB_PASSWORD $DB_NAME -e "UPDATE ps_homeslider_slides_lang SET url=REPLACE(url, 'localhost', '${SHOP_SSL_URL}');"
#mysql -u $DB_USER -p$DB_PASSWORD $DB_NAME -e "UPDATE ps_configuration_lang SET value=REPLACE(value, 'localhost', '${SHOP_SSL_URL}') WHERE id_configuration=434;"