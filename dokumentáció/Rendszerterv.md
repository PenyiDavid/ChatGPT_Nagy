# Rendszerterv
## 1. A rendszer célja

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:
   * Scrum masters: 
   * Product owner: 
   * Üzleti szereplő: Tajti Tibor

### 2.2 Projektmunkások és felelőségek:
   * Frontend: Kelemen András, Soós János, Penyaskó Dávid
   * Backend: Kelemen András, Soós János, Penyaskó Dávid
   * Tesztelés: Kelemen András, Soós János, Penyaskó Dávid

### 2.3 Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             2 |                      2 |                2 |                   2 |       |Funkcionális specifikáció|Megírás                                 |         1 |             2 |                      2 |                2 |                   2 |
|Rendszerterv             |Megírás                                 |         1 |             2 |                      2 |                2 |                   2 |
|Program                  |Képernyőtervek elkészítése              |         2 |             2 |                      2 |                2 |                   2 | 
|Program                  |Prototípus elkészítése                  |         3 |             17 |                      17 |                17 |                   17 |
|Program                  |Alapfunkciók elkészítése                |         3 |             17 |                      17 |                17 |                   17 |
|Program                  |Tesztelés                               |         4 |             5 |                      5 |                5 |                   5 |

### 2.4 Mérföldkövek:


## 3. Üzleti folyamatok modellje



## 4. Követelmények

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | Felület |  |  |
| K2 | Felület |  |  |
| K3 | Felület |  |  |
| K4 | Felület |  |  |
| K5 | Felület |  |  |
| K6 | Felület |  |  |
| K7 | Felület |  |  |
| K8 | Felület |  |  |
| K9 | Felület |  |  |
| K10 | Felület |  |  |

### Támogatott eszközök

Mivel egy webes felületet készítünk, ezért elegendő egy számítógép vagy bármilyen okos eszköz amin van internetkapcsolat.

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

### 5.2 Menühierarchiák

## 6. Fizikai környezet

- **Az alkalmazás csak web platformra készül, MySQL adatbázissal lesz futtatva.**
  - **Nincsenek megvásárolt komponensek.**
  - **Fejlesztői eszközök:**
    - **Visual Studio Code**
    - **XAMPP**
    - **Laravel**

## 7. Architekturális terv

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
