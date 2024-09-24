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
| #1 | Főoldal | A főoldalról könnyedén ugorhatunk a különböző témájú híreket tartalmazó oldalakra. |
| #2 | Navigációs sáv | A navigációs sáv segítségével különböző kategóriák és tematikák között böngészhetünk. |
| #3 | Menüpontok | A menüpontok segítségével navigálhatunk az oldalon. |
| #4 | Keresőmező | A keresőmező segítségével különböző cikkeket kereshetünk. |
| #5 | Cikk | Minden hírcikk új, különálló oldalon jelenik meg. |
| #6 | Bejelentkezési képernyö | A felhasználók regisztrálhatnak, és bejelentkezhetnek felhasználónebük és jelszavuk beírásával. |
| #7 | Kedvencek | Kedvenc híreinket külön listába szedhetjük. |

### Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| #1 | Rendszer stabilitása | A rendszer folyamatosan rendelkezésre áll, működőképes, minimális leállásokkal. |
| #2 | Teljesítmény | Az oldal gyorsan betöltődik és a szerver teljesítménye skálázható. |
| #3 | Biztonság | A felhasználóink adatainak védelme erős titkosítással biztosított. |
| #4 | Kompatibilitás | Az oldal a legtöbb eszközön és böngészőben működik. |

### Támogatott eszközök

+ Asztali böngészők (Chrome, Firefox, Edge, Opera, Brave)
+ Mobil böngészők (iOS Safari, Android Chrome, Opera)

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

A rendszerben háromféle szerepkör létezik:

+ Az olvasók (a felhasználók),
+ A szerkesztők,
+ Az adminisztrátorok

**1. Az olvasók:**

+ Böngészhetik és olvashatják a híreket,
+ Kereshetnek a cikkek között,
+ Regisztrálhatnak az oldalra,
+ Regisztrációt követően elmenthetik kedvenc híreiket a Kedvencekbe

**2. A szerkesztők:**

+ Közzétesznek új híreket,
+ Híreket szerkesztenek,
+ Kategorizálják a cikkeket

**3. Az adminisztrátorok:**

+ Kezelik a felhasználói adatokat és fiókokat,
+ Karbantartják az oldalt, és szükség esetén javításokat végeznek

### 5.2 Menühierarchiák

A különböző menük és alfunkciók a rendszerben a következőképpen vannak kialakítva:

+ A **Főoldalon** a legfrissebb hírek kategorizálva jelennek meg.
+ A különböző **Kategóriák** szerint tematikusan vannak szűrve, ami megkönnyíti a böngészést az olvasók számára.
+ A **Keresőmezővel** a felhasználók kereshetnek a hírek között.
+ A **felhasználó saját profilja segítségével** (regisztráció után) listázhatja kedvenc híreit és egyéb beállításokat végezhet el.

## 6. Fizikai környezet

### Vásárolt softwarekomponensek és külső rendszerek

- Mi kizárólag saját fejlesztésű komponensekkel dolgozunk, nem használunk megvásárolt, kész elemeket. 
Így biztosak lehetünk benne, hogy minden megoldásunk egyedi és teljesen a mi elképzeléseink szerint működik. 
Ez lehetővé teszi, hogy rugalmasabbak legyünk és jobban tudjunk alkalmazkodni az igényekhez.

### Hardver topológia

- **Webszerver:** A webszerver közvetlenül csatlakozik az adatbázisszerverhez, és kiszolgálja a felhasználói kéréseket. 
A felhasználók az internetről kapcsolódnak a szerverhez, amely fogadja és feldolgozza a beérkező kéréseket, majd továbbítja az adatbázisszerverhez.
- **Adatbázisszerver:** Az adatbázisszerver ugyanazon a szerveren, mint a webszerver.

### Fizikai alrendszerek

- **Backend alrendszer:** PHP alapú rendszer, amely a webszerveren fut és kezeli az üzleti logikát, 
adatbázis-műveleteket és a felhasználói kéréseket.
- **Frontend alrendszer:** A HTML, CSS és JavaScript technológiákkal készült felhasználói felület, 
amely a böngészőkben jelenik meg, és interaktív elemeket biztosít a felhasználók számára.
- **Adatbázis alrendszer:** A MySQL vagy PL/SQL adatbázis felelős az adatok tárolásáért, 
lekérdezéséért, frissítéséért és kezeléséért.

### Fejlesztő eszközök

- Visual Studio Code
- XAMPP
- phpMyAdmin
- Oracle SQL Developer
- Git

## 8. Architekturális terv

### Webszerver

- A webszerver a hírportál látogatói kéréseinek közvetlen kiszolgálója. 
Amikor egy felhasználó beírja a hírportál címét a böngészőbe, a kérés a webszerverhez érkezik. 
A szerver feladata, hogy a kért tartalmat (pl. egy híroldal, kép, stíluslap) azonosítsa a az 
adatbázisban, és a megfelelő formátumban továbbítsa a felhasználónak.

### Adatbázis rendszer

- A hírportál agyaként működik. Itt tárolódnak a hírek, a felhasználók adatai,
a beállítások és minden egyéb információ, amely a weboldal működéséhez szükséges. 
Az adatok hatékony keresése és kezelése érdekében normalizálják és indexelik az adatokat. 
A replikáció pedig az adatvesztés ellen nyújt védelmet.

### A program elérése, kezelése

- Frontend:

   - A frontend a webes alkalmazások azon része, amelyet a felhasználók közvetlenül látnak és használnak. 
 Ez az a réteg, amely közvetlen kapcsolatban van a felhasználóval, ide tartozik minden vizuális elem, 
 interaktív funkció és az a felület, amelyen keresztül a felhasználók adatokat visznek be vagy adatokat kapnak. 
 A frontendet általában HTML, CSS és JavaScript technológiák segítségével építik fel.

   - HTML: Ez a weboldalak szerkezeti elemeit definiálja. Meghatározza, hogy egy adott oldalon milyen elemek jelenjenek meg (például szöveg, képek, gombok).

   - CSS: A CSS felelős a weboldal megjelenéséért, tehát meghatározza, hogy az elemek milyen formában jelenjenek meg (színek, betűtípusok, margók, elhelyezkedés stb.).

   - JavaScript: Ez egy programozási nyelv, amely dinamikus funkcionalitást ad a weboldalakhoz, például animációkat, felugró ablakokat, vagy interaktív elemeket, mint a keresőmezők vagy űrlapok.

- Backend:

   - A backend a szerveroldalon működő rendszer, amely az alkalmazás „szíve”, 
 a logikai és adatfeldolgozási műveletek helye. Ez a része a rendszernek nem 
 látható közvetlenül a felhasználók számára, de alapvető fontosságú minden interaktív 
 webes alkalmazás működésében. A backend végzi az adatkezelést, az üzleti logikát és 
 más feladatokat, amelyek nélkül a frontend nem lenne képes működni.

   - Az adatbázisok a backend egyik legfontosabb és legkritikusabb elemei. Ezek tárolják, 
 kezelik, rendszerezik és biztosítják a hozzáférést az alkalmazás adataihoz. A modern 
 alkalmazások jelentős mennyiségű adatot kezelnek – például felhasználói információkat, 
 tranzakciókat, termékleírásokat –, ezért az adatbázis hatékony működése kulcsfontosságú. 
 Az adatbázisok tervezése, optimalizálása és biztonságának fenntartása elengedhetetlen a 
 teljes rendszer teljesítménye és megbízhatósága szempontjából.

## 9. Adatbázis terv

![ADATBÁZISTERV](https://github.com/Drntth/AFP1Anonymous/blob/main/kep/adatbazisterv.png)

## 10. Implementációs terv

**Felhasználói felület:**

- A webes alkalmazás felhasználói felülete HTML, CSS, és JavaScript segítségével készül. A HTML biztosítja a weboldal szerkezetét, míg a CSS gondoskodik a vizuális megjelenésről és reszponzivitásról. A JavaScript az oldal dinamikus viselkedéséért felel, lehetővé téve az interaktív elemek (pl. gombok, legördülő menük) működését, valamint biztosítja az AJAX-alapú keresési funkciót, amely valós időben jeleníti meg a keresési találatokat.

**Adatbázis:**

- Az adatbázis MySQL vagy PL/SQL (Oracle SQL) rendszerben kerül kialakításra, a technológiai választástól függően. Az adatbázis tárolja a híreket, kategóriákat, valamint a felhasználói információkat, beleértve a felhasználók hitelesítési adatait, felhasználóprofilokat és egyéb kapcsolódó információkat. Az adatok kezelését a backend PHP programja végzi, amely kapcsolatot biztosít a felhasználói felület és az adatbázis között, ezáltal biztosítva az adatok gyors elérését és megfelelő feldolgozását.

## 11. Tesztterv

A testelés során használható stratégiák és technológiák:

# A tesztelés fázisai:

1. **Egységtesztelés** vagyis *Unit testing*:

Ellenőrizzük, hogy a kódrészletek és funkciók külön-külön jól működnek-e.
Tesztelhetjük például az adatbáziselemeket, a bejelentkezési folyamatot stb.

2. **Integrációs tesztelés** azaz *Integration testing*:

Ebben a tesztben a rendszer különböző moduljainak együttműködését teszteljük.
A teszt célja az, hogy lássuk, hogy a frontend, a backend és az adatbázisok és egyéb rendszerek zökkenőmentesen kommunikálnak.

3. **Funkcionális tesztelés** avagy *Functional testing*:

A rendszerben megvalósított funkciókat a követelményspecifikáció alapján ellenőrizzük. 

4. **Rendszertesztelés** azaz *System testing*:

Ilyenkor az egész rendszert átfogóan teszteljük, beleértve az összes funkciót és a felhasználói interakciókat.
Ellenőrizzük, hogy a rendszer minden pontban megfelel-e a funkcionális és a nemfunkcionális követelményekben leírtaknak.

5. **Teljesítménytesztelés** vagy *Performance testing*:

A rendszer terhelhetőségének és válaszidejének ellenőrzése nagyobb felhasználói terhelés mellett.
A célunk biztosítani, hogy az oldal gyorsan betöltődjön és megfelelően működjön csúcsidőben is.

6. **Biztonsági tesztelés** vagyis *Security testing*:

Átnézni a rendszert, hogy nincsenek-e benne bisztonsági rések, tesztelni bizonyos támadástípusok, például SQL injection vagy Cross Site Scripting (XSS) ellen.
Különös gondot kell fordítani a felhasználók adatainak védelmére, a jelszavak védelmére, és a jogosultságok kezelésére.

# Konkrét tesztesetek kidolgozása:

| Teszteset ID | Leírás | Elvárt eredmény |
| --- | --- | --- |
| T1 | Bejelentkezés érvényes adatokkal. | Sikeres bejelentkezés, felhasználói fiók elérése. |
| T2 | Bejelentkezés rossz jelszóval. | Sikertelen bejelentkezés, hibaüzenet megjelenítése. |
| T3 | Hírek keresése. | A keresésnek megfelelő címek megjelennek az oldalon. |
| T4 | Kedvenc cikk elmentése. | A cikk sikeresen megjelenik a felhasználó kedvencei között. |




## 12. Telepítési terv

**Fizikai telepítési terv:** A weboldal működőképességéhez először is szükség van egy adatbázis szerverre.

- **Adatbázis-szerver:**

   - Az adatbázis-szerver tárolja az összes szükséges adatot (felhasználói adatok, hírek, kategóriák stb.).
   - Ezt a szervert közvetlen kapcsolat köti a webszerverhez, ami biztosítja a gyors adatlekérést és -tárolást.
   - Adatbázis: MySQL, vagy szükség esetén más adatbázisrendszer (pl. PostgreSQL, Oracle).

- **Webszerver:**

   - A webszerver biztosítja a webalkalmazás futtatását. Ez szolgálja ki a felhasználók által küldött kéréseket (pl. hír keresése, kategóriák böngészése).
   - A webszerver csatlakozik az adatbázis-szerverhez, és kezeli a HTTP kéréseket az internetről érkező kliensektől.

- **Hálózati kapcsolat:**

   - A webszerver eléréséhez az internetről a felhasználók közvetlenül kapcsolódnak a szerverhez.

**Szoftver telepítési terv:** 
   - Különálló szoftvert nem szükséges telepíteni a weboldal használatához, a felhasználók a webes felülethez egy böngésző (Microsoft Edge, Google Chrome, Mozilla Firefox, Brave, Opera, stb..) segítségével tudnak hozzáférni.

## 13. Karbantartási terv

A rendszer folyamatos és biztonságos működésének biztosítása érdekében a következő karbantartási tevékenységek kerülnek végrehajtásra:

**Rendszerfrissítések kezelése**
A rendszer frissítéseit két kategóriára bontjuk:

- Funkcionális frissítések: Ezek tartalmazzák az új funkciók hozzáadását vagy a meglévő funkciók továbbfejlesztését. Ezen frissítések célja a felhasználói élmény javítása és a rendszer teljesítményének optimalizálása.
- Biztonsági frissítések: A rendszerben felmerülő biztonsági sebezhetőségeket kijavító frissítések. Ez kritikus fontosságú a felhasználói adatok védelme érdekében.

**Adatbázis karbantartása**
Az adatbázis hatékonyságának fenntartása érdekében rendszeres karbantartási műveletek szükségesek, amelyek magukban foglalják:

- Adatbázis optimalizálás: A nagy adatállományok és lekérdezések hatékonyabb kezelése érdekében az adatbázis optimalizálása elengedhetetlen.
- Biztonsági mentések: Az adatvesztés elkerülése érdekében a rendszer automatikusan napi biztonsági mentéseket készít. A mentések távoli szervereken kerülnek tárolásra.
- Adattisztítás: Az inaktív vagy hibás adatokat időszakosan törölni kell a rendszer terhelésének csökkentése érdekében.

**Hibajavítás és technikai támogatás**
A felhasználók által jelentett hibák és problémák gyors megoldásához egy dedikált támogatási csapat lesz kijelölve. A hibaelhárítás a következő lépéseket fogja követni:

- Problémák azonosítása: A felhasználói visszajelzések és rendszerfigyelési eszközök segítségével.
- Prioritás meghatározása: A hibák súlyosságuk alapján kapnak prioritást, és ennek megfelelően kerülnek javításra.
- Hibaelhárítás: A fejlesztőcsapat kijavítja a hibát, és azonnal frissíti a rendszert, ha szükséges.
