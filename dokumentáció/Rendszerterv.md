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

11.07 - Dokumentációk elkészítve - Minden dokumentáció kész.

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


## 9. Implementációs terv

A webes felület HTML, CSS és PHP nyelven fog elkészülni, Laravel keretrendszerrel. A nem egymáshoz kapcsolódó funkciókat amennyire csak lehet, elkülönítjük, úgy csatoljuk egymáshoz ezzel is egy átláthatóbb, könnyebben változtatható lesz a source code-unk. Az adatokat MYSQL adatbázisban fogjuk tárolni.

## 10. Tesztterv

A tesztelések célja, hogy meggyőződjünk a felület gombjainak, beviteli mezőinek, illetve minden komponensének működéséről. A teszteléseket minden tag megadott számban elvégzi, külön file-ba dokumentálni fogja.

## 11. Telepítési terv

Mivel egy webes felületről van szó, ezért nem szükséges semmit a számítógépre telepíteni, elegendő egy tetszőleges böngésző és internetkapcsolat.
Az URL-t ismerve bárki begépelheti a böngésző keresőjébe és elérheti az oldalt.


## 12. Karbantartási terv

Figyelembe kell venni a felhasználó által jött visszajelzést is a programmal kapcsolatban.
Ha hibát talált, mielőbb orvosolni kell, lehet az:
*	Működéssel kapcsolatos
*	Kinézet, dizájnnal kapcsolatos
