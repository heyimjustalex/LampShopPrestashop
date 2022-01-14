#!/bin/bash

CONTAINER="admin-mysql_db.1.jhmt04hxq732lvnr76m7ikzlv"

docker cp ./*.sql $CONTAINER:/tmp/BE_176084.sql
docker cp ./db_setup.sh $CONTAINER:/tmp/db_setup.sh
docker exec -it $CONTAINER  chmod 777 /tmp/db_setup.sh
docker exec -it $CONTAINER /bin/sh /tmp/db_setup.sh
docker exec -it $CONTAINER  rm /tmp/BE_176084.sql
docker exec -it $CONTAINER  rm /tmp/db_setup.sh