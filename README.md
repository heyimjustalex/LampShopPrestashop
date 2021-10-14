# Biznes Elektroniczny - Lamp Shop
``subject of Electronic Business`` ``IT studies 2021/2022``

---

## Description

The main goal of this project is to familiarize ourselves with Docker 
and the technologies that make up the online store and its management.

---

## How to lunch docker containers

```shell
# to lunch all services as different containers write:
$ docker-compose up

# to build Docker image write:
$ docker build -t image_name

# to remove Docker image:
$ docker rmi image_name

# to lunch built Docker image write:
# -d => lunch as a deamon
# --rm => remove after exit
$ docker run --rm image_name -d

# remove all exited containers
$ docker container prune
```

---

## Technology used
+ Docker
+ PHP
+ html + css
+ javascript
+ PostgreSQL
+ prestashop

---

## License & copyright
© All rights reserved