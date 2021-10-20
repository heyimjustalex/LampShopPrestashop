## Aby zainstalować prawidłowo sklep należy:


3. Pobrać plik docker-compose.yml i umieścić go w folderze, w którym zostanie stworzony projekt
4. Sprawdzić czy *volumes* dla serwisu *prestashop* jest zapisany poprawnie, zgodnie z poniższym przykładem (patrz linijka po myślniku):
    ```text
    prestashop:
        volumes:
            - /var/www/html   
    ```
5. Otworzyć folder w ulubionym edytorze tekstowym
6. Otworzyć konsolę w folderze docelowym i wpisać komendę (na razie bez -d aby zobaczyć logi w terminalu):
    ```shell
    docker-compose up 
   ```
7. Odczekać, aż wszystkie kontenery zostaną uruchomione
8. Przejść na stronę główną - localhost:8000 (Pod adresem localhost:8080 dostępny jest phpMyAdmin)
9. Przejść przez proces instalacji sklepu
10. Zatrzymać działające kontenery za pomocą terminala używając kombinacji klawiszy Ctrl+C
11. Uruchomić ponownie kontenery poleceniem:
    ```shell
    docker-compose up -d
    ```
12. Po uruchomieniu kontenerów sprawdzić jaki jest **container_id** kontenera o nazwie prestashop
13. Wpisać w terminalu komendy:
   ```shell
   docker exec -it container_id bash
   ```
14. Następnie przejść do folderu */var/www/html* i wpisać:
   ```shell
   rm -rf install
   ```
   oraz
   ```shell
   exit
   ```
15. Następnie należy zatrzymać wszystkie kontenery poleceniem
   ```shell
   docker-compose stop
   ```
16. Następnie skopiować zawartość kontenera do pliku lokalnego poleceniem
    ```shell
    docker cp container_id:/var/www/html ./shop
    ```
17. Następnie należy zmienić plik docker-compose.yml, w którym należe zmienić linijkę w konfiguracji prestashop (patrz volumes):
    
    z ***/var/www/html*** na ***./shop:/var/www/html***
18. Następnie należy uruchomić spowrotem wszystkie kontenery w celu sprawdzenia czy wszystko działa poprawnie poleceniem:
    ```shell
    docker-compose up -d
    ```