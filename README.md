# Biznes Elektroniczny - Lamp Shop
``subject of Electronic Business`` ``IT studies 2021/2022``

---

## Description

The main goal of this project is to familiarize ourselves with Docker 
and the technologies that make up the online store and its management.

---

## Some useful command during using Docker

```shell
# to lunch all services contain in docker-compose.yml as different containers write:
# -d => lunch as a daemon (in background)
$ docker-compose up -d

# to stop docker-compose containers running in background write:
$ docker-compose stop

# to built saved Docker image write:
$ docker build -t image_name

# to remove Docker image:
$ docker rmi image_id

# to see existing containers write:
$ docker ps -a

# to lunch built Docker image write:
# -d => lunch as a daemon (in background)
# --rm => remove after exit
$ docker run --rm image_name -d

# remove all exited containers
$ docker container prune

# to get into container write:
$ docker exec -it container_id bash

# to create a new image from a Docker container'’'s changes write:
$ docker commit container_id image_name

# to copy container's data to local folder
$ docker cp container_id:/path/to/container/data /path/to/local/folder
```

---

## Technology used
+ Docker
+ PHP
+ html + css
+ javascript
+ MySQL
+ prestashop

---

## License & copyright
© All rights reserved
