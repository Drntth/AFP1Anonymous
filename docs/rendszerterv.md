# Rendszerterv
## 1. A rendszer célja
A rendszer célja, hogy egy könnyen használható, gyorsan frissülő, megbízható híroldalt hozzunk létre, amely széles körű tájékoztatást nyújt a hazai és nemzetközi eseményekről. A felhasználók számára egyszerű hozzáférést biztosítunk a legfrissebb hírekhez, egy könnyen átlátható felületen keresztül, ahol különböző kategóriák és keresési lehetőségek segítségével gyorsan megtalálhatják a számukra érdekes tartalmakat.

A rendszer lehetőséget biztosít arra is, hogy a felhasználók saját fiókot hozzanak létre, kedvenc cikkeiket elmentsék, és személyre szabott tartalmakat kapjanak. Célunk továbbá, hogy egy közösségi platformot alakítsunk ki, ahol a felhasználók hozzászólhatnak a cikkekhez, és részt vehetnek a diskurzusban.

Ami nem cél:
A rendszer nem fog részletes elemzéseket, vagy hosszú távú kutatásokat publikálni, csupán napi aktuális híreket biztosít.
Nem tervezünk mély integrációt közösségi média platformokkal, az oldal közösségi funkciói elsősorban a hírekhez kapcsolódnak.
Nem célunk, hogy minden forrásból származó hírt automatikusan megjelenítsünk, csak a megbízható, hiteles forrásokat használjuk.
A rendszer célja tehát egy gyors, átlátható és megbízható hírportál létrehozása, amely releváns, naprakész információkat nyújt a felhasználóknak.

## 2. Projektterv
Az online híroldal célja, hogy egy egyszerűen használható, reszponzív és gyorsan frissülő weboldalt hozzunk létre, amely megbízható híreket kínál hazai és nemzetközi témákban. Az oldal lehetőséget nyújt a felhasználóknak, hogy regisztráljanak, elmentsék kedvenc cikkeiket, és részt vegyenek a közösségi diskurzusban.

### 2.1 Projektszerepkörök, felelőségek:
   * Scrum masters:Borsodi István , Cserni Boglárka
   * Product owner: Plasku Dominik
   * Üzleti szereplő: Nagy Péter
     
### 2.2 Projektmunkások és felelőségek:
   * Frontend: HTML, CSS, JavaScript
   * Backend:PHP
     
### 2.3 Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |             
|Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Alapfunkciók fejlesztése |Képernyőtervek elkészítése              |         2 |             1 |                      1 |                1 |                   1 |
|Program                  |Prototípus elkészítése                  |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Alapfunkciók elkészítése                |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Tesztelés                               |         4 |             2 |                      2 |       
## 3. Üzleti folyamatok modellje
Az üzleti folyamatok modellje bemutatja, hogyan működik a híroldal, kik vesznek részt a működésben, és hogyan kapcsolódnak egymáshoz az egyes szereplők és folyamatok. Az alábbiakban részletezzük az oldal működéséhez szükséges üzleti szereplőket és a kapcsolódó folyamatokat.

### 3.1 Üzleti szereplők
Olvasók (Látogatók): Ők az oldal elsődleges célcsoportjai, akik a különböző híreket böngészik, keresnek, és olvasnak. Nem szükséges regisztrálniuk, de regisztráció nélkül is hozzáférnek a legtöbb tartalomhoz.

Regisztrált felhasználók: Azok a látogatók, akik létrehoztak egy fiókot az oldalon. Ők hozzáférhetnek extra funkciókhoz, például a kedvenc cikkek mentéséhez, személyre szabott hírekhez, illetve kommentelhetnek a cikkekhez.

Moderátorok: Feladatuk a felhasználói hozzászólások kezelése, ellenőrzése és moderálása annak érdekében, hogy a tartalom megfeleljen az oldal szabályainak és etikettjének.

Tartalomszolgáltatók (Hírszerzők): Az oldal számára híreket szolgáltató külső források, amelyek lehetnek újságok, híroldalak, vagy más hírügynökségek. Feladatuk az aktuális hírek összegyűjtése és közzététele az oldalon.

Adminisztrátorok: Az oldal működtetéséért felelős személyek, akik technikai karbantartást végeznek, felügyelik a rendszert, és biztosítják a platform zavartalan működését.

Reklámozók: Külső partnerek, akik az oldalon hirdetéseket jelenítenek meg. Céljuk, hogy elérjék az oldal látogatóit különböző reklámokkal, és növeljék saját márkájuk vagy termékeik láthatóságát.

### 3.2 Üzleti folyamatok
Hírek gyűjtése és közzététele:

A híreket a tartalomszolgáltatók gyűjtik össze, és az adminisztrátorok vagy automatizált rendszerek töltik fel az oldalra. A hírek megjelenése valós időben történik, így az olvasók mindig aktuális információkat kapnak.
Felhasználói regisztráció és bejelentkezés:

A látogatók létrehozhatnak egy felhasználói fiókot, amely során megadják a személyes adataikat (pl. e-mail cím, jelszó). A bejelentkezés után hozzáférhetnek olyan funkciókhoz, mint a kedvencek mentése és a hozzászólások írása.
Kedvencek mentése és személyre szabott tartalom:

A regisztrált felhasználók elmenthetik kedvenc cikkeiket, és egy személyre szabott híroldalt kapnak, amely az érdeklődési köreik alapján válogatja össze a tartalmakat.
Kommentelés és moderálás:

A felhasználók hozzászólhatnak a cikkekhez, megoszthatják véleményüket. A moderátorok feladata, hogy ellenőrizzék a hozzászólásokat, kiszűrjék a nem megfelelő tartalmakat, és biztosítsák a közösségi normák betartását.
Hirdetések megjelenítése:

A reklámozók hirdetéseket helyezhetnek el az oldalon, amelyek különböző helyeken (pl. bannerek, cikkek között) jelennek meg. A rendszer automatikusan kezeli a hirdetések megjelenítését a felhasználói tevékenység alapján.
Adatok gyűjtése és elemzése:

Az oldal folyamatosan gyűjti a felhasználói viselkedésre vonatkozó adatokat (pl. mely cikkeket olvassák a legtöbben), hogy a tartalmakat és az oldalt folyamatosan optimalizálni lehessen. Az elemzéseket az adminisztrátorok és elemzők használják fel.
Ezek a folyamatok biztosítják, hogy a rendszer zökkenőmentesen működjön, és folyamatosan képes legyen kielégíteni a felhasználói igényeket, miközben fenntartható üzleti modellként funkcionál.


## 4. Követelmények

### Funkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | ... | ... |

### Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K4 | ... | ... |

### Támogatott eszközök

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

### 5.2 Menühierarchiák

## 6. Fizikai környezet

### Vásárolt softwarekomponensek és külső rendszerek

### Hardver topológia

### Fizikai alrendszerek

### Fejlesztő eszközök


## 8. Architekturális terv

### Webszerver

### Adatbázis rendszer

### A program elérése, kezelése

## 9. Adatbázis terv

## 10. Implementációs terv

## 11. Tesztterv

## 12. Telepítési terv

Fizikai telepítési terv: 

Szoftver telepítési terv: 

## 13. Karbantartási terv

