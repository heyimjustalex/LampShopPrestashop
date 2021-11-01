# Jak stworzyć dump bazy danych 

1. Należy wejść do kontenera mysql komendą
```shell
docker exec -it mysql_container bash
```

2. Stworzyć dump bazy danych poleceniem
```shell
mysqldump -u root -p prestashop > db_dump.sql
```

3. Wpisujemy hasło do roota
4. Wychodzimy z kontenera
5. Następnie należy skopiować dump bazy danych do odpowiedniego folderu poleceniem
```shell
docker cp mysql_container:/db_dump.sql ./mysql/init
```

6. To wszystko, można teraz przenieść bazę danych gdzie idziej :D