# Aby uruchomić poprawnie sklep na linuxie można użyć dodatkowo komend
```shell
sudo chown -R www-data:www-data "."
```

albo nadać dodatkowe uprawnienia plikow
```shell
find . -type f -exec chmod 755 {} /;
```

bądź folderom
```shell
find . -type d -exec chmod 755 {} /;
```
