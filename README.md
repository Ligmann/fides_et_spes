# Fides et spes
### Wymagania
``` 
PHP 7.4 lub nowszy
Node 16.15.1
```
### Instalacja docker
1. Zainstaluj docker i docker-compose <a href="https://docs.docker.com/get-docker/">Docker</a>
2. W głownym katalogu Zamień .env-example na .env
3. Odpal docker-compose
```bash
$ docker-compose -p twoja nazwa up -d
```
### Konfiguracja motywu WordPress
1. wchodzimy do katalgou `fides-et-spes-theme`. 
2. Kopiujemy `.env-example` i zmieniamy na `.env `.
```bash
$ cd fides-et-spes-theme
$ cp .env-example .env
```
3. (opcjonalnie) Wchodzimy do pliku `.env` i wprowadzamy ścieżkę do `wp-content`, pamiętając by na koncu znajdowala sie nazwa do motywu `fides-et-spes` (jeśli nie ma potrzeby nie zmieniaj ścieżki do `wp-content`).
```ini
krok 3
DEST_PATH=/wp-content/themes/fides-et-spes
```
4.  Instalacja szablonu projektu
```bash
$ nvm use
$ npm install -g yarn # jeśli nie masz zainstalowanego yarn
$ yarn
$ yarn build
$ yarn dev 
```
#### Problem z instalacją na macOS
Jeśli instalacja `node-sass` na macOS nie powiodła się, wtedy dodajesz:
```bash
$ python3 -m ensurepip --upgrade
$ python3 -m pip install setuptools
#lub
$ yarn add node-sass
```
5. Wchodzimy do panelu WordPressa i aktywujemy nasz motyw `fides-et-spes`.
6. By aktywować stronę startową, wchodzimy w wszystkie strony dodajemy nową stronę i wybieramy szablon `home`.
#### Opcjonalnie czyności
1. Następnie zmień `name_project` na nazwę projektu, który realizujesz, np. blog-o-Wordpress.

## Dokumentacja obsługi szablonu WordPress
1. Jeśli jakaś strona, np. autor, kategoria, tagi nie działa, sprawdź index.php, który pełni funkcję routingu. 
W tym pliku dodaj odpowiednią logikę do obsługi brakujących stron. #### [Link do dokumentacji](https://developer.wordpress.org/themes/basics/template-hierarchy/).