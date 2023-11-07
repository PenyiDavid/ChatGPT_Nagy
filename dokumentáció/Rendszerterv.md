# Rendszerterv
## 1. A rendszer célja

A ChatGPT csapat egy olyan webshopot tervez, amely átlátható, könnyen használható és egyszerű megoldást nyújt a vásárlás lebonyolításához. A weboldal feladatai közé tartozik a termékek megjelenítése képpel, a kosár tartalmának eltárolása, illetve elemeinek törlése, ha szükséges és a fizetés megvalósítása is. A weboldalhoz tartozik egy account rendszer és adatbázisok, amelyek az adott termékeket illetve felhasználókat tárolják. Fontos még az is, hogy legyen egy suppport rész, ahol a vásárlók segítséget tudnak kérni, esetleges hibás rendelések vagy rosszul megadott adatok esetében. Fontos, hogy a weboldal dinamikus legyen, hogy akár PC-ről, akár mobilról is lehessen használni.

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:
   * Scrum masters: Szegedi Tamás
   * Product owner: Szegedi Ta,ás
   * Üzleti szereplő: Mihály Balázs

### 2.2 Projektmunkások és felelőségek:
   * Frontend: Kelemen András, Soós János, Penyaskó Dávid
   * Backend: Kelemen András, Soós János, Penyaskó Dávid
   * Tesztelés: Kelemen András, Soós János, Penyaskó Dávid

### 2.3 Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             3 |                      3 |                3 |                   3 |       
|Funkcionális specifikáció|Megírás                                 |         1 |             3 |                      3 |                3 |                   3 |
|Rendszerterv             |Megírás                                 |         1 |             3 |                      3 |                3 |                   3 |
|Program                  |Képernyőtervek elkészítése              |         2 |             3 |                      3 |                3 |                   3 | 
|Program                  |Prototípus elkészítése                  |         3 |            12 |                     12 |               12 |                  13 |
|Program                  |Alapfunkciók elkészítése                |         3 |            12 |                     12 |               12 |                  13 |
|Program                  |Tesztelés                               |         4 |             4 |                      4 |                4 |                   4 |

### 2.4 Mérföldkövek:

11.07 - Dokumentációk elkészítve - Rendszerterv
11.07 - Dokumentációk elkészítve - Funkcionális specifikáció
11.07 - Dokumentációk elkészítve - Követelmény specifikáció

## 3. Üzleti folyamatok modellje




## 4. Követelmények

Funkcionális követelmények

- Aktuális termékek megjelenítése.
- Fotók megjelenítése a termékről.
- Termékek elérhetőségének megjelenítése.
- Termékek árának megjelenítése.
- Termékek megrendelése.

### Támogatott eszközök

Az általunk készített webes felületnek nincs külön támogatott eszközigénye, mivel bármilyen eszközön elérhető, ami rendelkezik internethozzáféréssel.

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

 - bejelentkezett felhasználó (Aki az oldalra bejelentkezve vásárol)
 - vendég felhasználó (Aki bejelentkezés nélkül nézi az oldalt)

### 5.2 Menühierarchiák

 - Belépett felhasználó

	- megtekintetheti a termékeket
	- termékeket adhat a kosarához
	- kuponkódot válthat be
	- vásárolhat/fizethet
	- gyűjthet vásárlói pontokat

 - Felhasználó

	- megtekintheti a termékeket
	- nem tud vásálói pontokat gyűjteni
	- nem tud kuponkódot beváltani

## 6. Fizikai környezet

- *Az alkalmazás csak web platformra készül, MySQL adatbázissal lesz futtatva.*
  - *Nincsenek megvásárolt komponensek.*
  - *Fejlesztői eszközök:*
    - *Visual Studio Code*
    - *Laravel*
    - *XAMPP*
    

## 7. Architekturális terv

A rendszer zavartalan működéséhez szükség van egy adatbázisszerverre, amelyhez ebben az esetben MySQL-t használunk.
A reszponzív webdesignért a bootstrap felel majd.
A backendhez pedig a laravel keretrendszer lesz majd a segítségünkre.

## 8. Adatbázis terv

### *Tábla*

- Regisztrált felhasználók:
   -id: a felhasználó egyedi azonosítója
   -name: a felhasználó neve
   -email: a felhasználó email-címe
   -password: a felhasználó jelszava

- Termékek
   -id: a termék egyedi azonosítója
   -price: a termék ára
   -stock: hány darab vana termékből raktáron

## 9. Implementációs terv

A webes felület HTML, CSS és PHP nyelven fog elkészülni, Laravel keretrendszerrel. A nem egymáshoz kapcsolódó funkciókat amennyire csak lehet, elkülönítjük, úgy csatoljuk egymáshoz ezzel is egy átláthatóbb, könnyebben változtatható lesz a source code-unk. Az adatokat MYSQL adatbázisban fogjuk tárolni.

## 10. Tesztterv

A tesztelés célja, hogy a wboldal minden apróbb hibáját megtalálva, aztán kijavítva az oldal hibátlan működését biztosítsuk. A tesztelést a csapat midnen tagja megadott számban fogja végezni, a tesztelést mindenki saját file-ban fogja vezetni. 

## 11. Telepítési terv

Az adott eszközre nem kell semmit telepíteni, mivel ez egy webes felület, ezáltal csak internetkapcsolatra, illetve egy böngészőre van szükség az oldal használatához.
A weboldal URL-címét bemásolva a bömgészőbe használatba is vehetjük az oldalt és annak szolgáltatásait. 


## 12. Karbantartási terv

A weboldal aktiválása után figyelembe kell venni a felhasználók által írt hibákat, illetve véleményeket a későbbi hibajavításokhoz, Ezek az észrevételek lehetnek lehetnek:

   - Működéssel kapcsolatos 
   - Design-nal kapcsoaltos 
