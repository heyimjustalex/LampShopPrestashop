FROM mysql:5.7

ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=prestashop

COPY ./init/* /docker-entrypoint-initdb.d/

EXPOSE 3306:3306