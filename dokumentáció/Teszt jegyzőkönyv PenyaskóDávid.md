# Tesztjegyzőkönyv

Teszteléseket végezte: Penyaskó Dávid

Operációs rendszer: Windows 11


## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Regisztráció | 2023.12.06. | User adatait a táblában eltárolja | Működik | - |
| Belépés | 2023.12.06. | Usernévvel és megfelelő jelszóval belépünk az oldalra | Működik | - |
| Profil | 2023.12.06. | Bejelentkezett felhasználó a saját adatait meg tudja tekinteni, szerkeszteni | Működik | - |
| Adatbázis | 2023.12.06. | Az adatbázis kapcsolat, migráció működik, egy-két módosítást igényelnek a táblák | Működik | - |
| Autentikáció | 2023.12.06. | Csak belépés után érhetőek el a megfelelő funkciók | Működik | - |

Az Alfa tesztelés során a vizsgált elemek mind hibátlanul működtek mindenféle fennakadások nélkül.

Következő tesztelésnél a többi funkció kerül vizsgálatra illetve elemzésre.
## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Navigációs menü | 2023.12.09. | A menüsorban a gombok a megfelelő oldalra irányítanak | Működik | - |
| Admin jogosultság | 2023.12.09. | Admin felhasználóknak több lehetősége van az oldalon. | Működik | - |
| Új termék | 2023.12.09. | Az oldalon a megfelelő adatoka kitöltve fel lehet vinni az adatbázisba új cipőt. | Működik | - |
| Termékek kilistázása | 2023.12.09. | Az oldalon felsorolásként megjelennek az adatbázisban található termékek | Működik | - |
| Rendeléseim | 2023.12.09. | Minden felhasználónak megjelennek az ő általa korábban rendelt termékek. | Működik | - |
| Minden rendelés | 2023.12.09. | Adminok minden felhasználó rendelését látják. | Működik | - |
| Frontend | 2023.12.09. | A weboldal megjelenésének tesztelése | A weboldal design-ja elfogadható, átlátható. | Működik |
| Backend | 2023.12.09. | A backendben megírt kódok megfelelő működése | A backend eddig megírt kódjai tökéletesen működtek, a termék kosárba helyezése, majd onnan a rendelések közé való felvétel megírásra szorul. | Működik |

A Béta teszt során a vizsgált elemek mind hibátlanul működtek mindenféle fennakadások nélkül.

A végleges tesztelés során az összes fent felsorolt vizsgálati elem újra ellenőrzésre kerül. Ezzel együtt az új funkciók is tesztelésre kerültek.

## Végleges teszt
| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2023.12.13. | Adatbázis működés ellenőrzése | A táblák a küldött adatokat sikeresen rögzítik, adatvesztés nincs. | Nem tapasztaltam hibát. |
| Regisztráció | 2023.12.13. | Regisztrálás a weboldalra | Fiók regisztrálása sikeres. | Nem tapasztaltam hibát. |
| Belépés | 2023.12.13. | Bejelentkezés a weboldalra | Belépés a weboldalra sikeres. | Nem tapasztaltam hibát. |
| Autentikáció | 2023.12.13. | Felhasználó adatainak ellenőrzése | Megfelelő jogokkal rendelkező felhasználók belépés után több funkciót érnek el. | Nem tapasztaltam hibát. |
| Profil | 2023.12.13. | Felhasználó szerkesztheti saját adatait | Saját adatok módisítása működik. | Nem tapasztaltam hibát. |
| Új termék | 2023.12.13. | Adminként új terméket lehet felvinni a táblába | Megfelelő jogosultsággal a felület megjelenik, a funkció működik. | Nem tapasztaltam hibát. |
| Termékek listázása | 2023.12.13. | Az adatbázisban megtalálható termékek megjelennek a weboldalon | Bejelentkezett felhasználóként megtekinthetőek a termékek. | Nem tapasztaltam hibát. |
| Szűrők | 2023.12.13. | A termékek oldalon lehet méret és ár szerint szűrni a termékek közt | A szűrők megfelelően működnek. | Nem tapasztaltam hibát. |
| Saját rendelések | 2023.12.13. | Minden felhasználó a saját rendelésit meg tudja nézni | Rendeléseim oldalon megjelennek a megfelelő adatok. | Nem tapasztaltam hibát. |
| Minden rendelés | 2023.12.13. | Adminként minden felhasználó rendeléseit meg lehet nézni | Az oldal megfelelően működik. | Nem tapasztaltam hibát. |
| Admin funkciók | 2023.12.13. | Új termék, minden rendelés felületek nem érhetőek el sima felhasználóknak | Csak admin jogosultsággal működnek a funkciók. | Nem tapasztaltam hibát. |

A Végleges teszt lezajlott és minden funkció rendesen működik, esztétikailag is megfelelő a program.

Átadásra készen áll a megrendelőnek.

Tesztelést végezte és írta: Penyaskó Dávid

Befejezve: 2023.12.13.
