## Instrukcja i przydatne informacje dotyczące 2. etapu projektu

---

### Ogólne
1. Nowy docker-compose oraz pliki Dockerfile pozwalają stworzyć obrazy kontenerów, które pozbawione są jakiś wolumenów lub połączęn pomiędzy komputerem lokalnym a kontenerem. 
2. Aby stworzyć i uruchomić kontenery należy wpisać 
```bash
docker-compose up --build
```
3. Nalezy pamiętać, że potrzebne jest również wygenerowanie kluczy do połączenia SSH. Patrz tutorial z SSH.
4. Pamiętaj, aby po sklonowaniu projektu za pomocą gita nadać odpowiednie prawa wszystkim plikow sklepu. Najłatwiej po prostu wejść do katalago z plikami sklepu i wpisać koleno komendy:
```bash
sudo chown -R www-data:www-data .
```
```bash
sudo chmod -R 777 .
```

---

### Klaster
1. Należy uważać na nazwenictwo kontenerów. Instrukcja tworzenia i nazywania folderów/stacków jest dostępna na moodlu. 
2. Uwaga na nazawewnictwo w skrypcie generowania kluszy potrzebnych do SSH. Używana tam nazwa kontenera ze sklepem to "prestashop". Jednakże na klastrze będzie to inna nazwa.
