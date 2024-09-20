# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása

A híroldal feljeltése jelengleg kezdetleges fázisban áll, azonban a projekt célja egy modern, reszponzív weboldal lértehozása, amely képes kiszolgálni a felhasználók igényeit. Az oldal technológia hátterét már meghatázorztuk, amely a következő technológiákra épül:

- **HTML:** Az oldal alapvető szerkezete statikus HTML segítségével lesz megvalósítva. A HTML struktúra biztosítja az oldal fő tartalmi blokkjainak felépítését, beleértve a hírek listáját, egyedi hírbejegyzéseket, valamint az oldal navigációját és egyéb statikus elemeket.

- **CSS:** Az oldal megjelenésének formázásához CSS-t használunk, amely biztosítja a reszponzív dizájnt, hogy az oldal mobiltelefonokon és tableteken is megfelelően jelenjen meg. A cél egy letisztult, felhasználóbarát felület kialakítása, amely reszponzívan alkalmazkodik a különböző képernyőméretekhez.

- **JavaScript:** A felhasználói élményt fokozó interaktív elemek, mint például a dinamikus tartalombetöltés, keresés JavaScript használatával kerülnek megvalósításra. Az oldal interaktivitásának biztosításához szükség lesz további JavaScript könyvtárak és API-k integrálására is.

- **PHP és SQL:** A híroldal dinamikus tartalomkezeléséhez PHP-t fogunk használni. A hírek és a felhasználói adatok kezelésére egy adatbázisrendszer, valószínűleg MySQL, lesz integrálva, amely lehetővé teszi a tartalom könnyű frissítését és kezelését. A PHP fogja biztosítani a tartalmak dinamikus generálását és az adatbázisból való betöltést.

Az oldal fejlesztése a tervek szerint több szakaszban valósul meg, ahol az első lépés a HTML struktúra és alapvető CSS stílusok létrehozása lesz, majd ezt követően a PHP és JavaScript integrálása, végül pedig az adatbázis- és backend funkciók kialakítása.

A jelenlegi helyzet alapján a fejlesztési folyamat még a tervezési fázisban van, ahol a technológiai követelmények, dokumentációk és a funkciók meghatározása történik. Célunk egy könnyen kezelhető, modern híroldal létrehozása, amely skálázható és reszponzív, valamint képes megfelelni a modern hírfogyasztói elvárásoknak.

## 2. Vágyálomrendszer leírása

Célunk, hogy a legmegbízhatóbb és legolvasottabb online újság legyünk az ország számára.
Olyan tartalmakat szeretnénk készíteni, amelyek nemcsak informálnak, szórakoztatnak, 
hanem releváns, naprakész információkat nyújtanak a világ és a hazai eseményekről.
Egy olyan közösséget szeretnénk építeni, ahol az olvasók szabadon kifejezhetik véleményüket 
és részt vehetnek a közbeszédben. Olyan jövőt szeretnénk, ahol a fiatalok informáltak, 
elkötelezettek és aktívan alakítják a világot. Első projektként szeretnénk egy átlátható, 
felhasználóbarát híroldalt létrehozni melyben html, css, javascript és php ismereteinket 
használnánk fel. A függetlenség, a hitelesség, a nyitottság és a szolidaritás értékeire 
építve szeretnénk hosszú távon is sikeres és fenntartható hírportál lenni.

## 3. Jelenlegi üzleti folyamatok modellje
Az oldal jelenlegi működése során több szereplő és folyamat együttműködése biztosítja a tartalmak folyamatos megjelenését és a felhasználók kiszolgálását. Az alábbiakban bemutatjuk a támogatandó vagy fejlesztendő folyamatokat, valamint a hozzájuk kapcsolódó szereplőket és erőforrásokat:

Üzleti szereplők
Szerkesztők: Ők felelősek azért, hogy a hírek összegyűjtésre, szerkesztésre kerüljenek, majd feltöltik azokat az oldalra.
Felhasználók (Olvasók): Az oldal látogatói, akik híreket olvasnak és böngésznek a tartalmak között.
Adminisztrátorok: Ők tartják karban az oldalt, javítják a hibákat, frissítik a rendszert, és felügyelik a működést.
Reklámpartnerek: Külső cégek, amelyek hirdetéseket helyeznek el az oldalon, ezzel bevételt generálva az oldal számára.
Üzleti folyamatok
Hírek gyűjtése és közzététele: A szerkesztők különböző forrásokból szereznek híreket, majd azokat megszerkesztik, és felteszik az oldalra. Ez a folyamat több lépésben zajlik, és kézzel történik.

Hírek böngészése: A felhasználók az oldalon böngészhetnek, olvashatnak különböző kategóriák szerint, vagy a kereső segítségével találhatnak rá érdekes cikkekre. Jelenleg nincs szükség regisztrációra.

Reklámok megjelenítése: Az oldal bevételének nagy része a reklámokból származik. Ezeket a külső partnerek automatikusan elhelyezik az oldalon, az adminok pedig felügyelik a hirdetések megjelenését.

Technikai karbantartás: Az adminisztrátorok gondoskodnak arról, hogy az oldal folyamatosan elérhető legyen, a hibák gyorsan meg legyenek oldva, és az új funkciók is rendben működjenek.

Üzleti entitások
Hírek: Az oldalon megjelenő cikkek, amiket az olvasók böngészhetnek.
Reklámfelületek: Azok a helyek az oldalon, ahol a hirdetések megjelennek.
Felhasználói adatok: Jelenleg nincs regisztrációhoz kötve a böngészés, de a későbbiekben lehetőség lesz felhasználói fiókok létrehozására, kedvencek elmentésére, személyre szabott tartalmak megjelenítésére.
Ez a jelenlegi működési modell manuálisan zajlik, a jövőbeni cél az, hogy több folyamatot automatizáljunk, és javítsuk a felhasználói élményt.

## 4. Igényelt üzleti folyamatok modellje
Üzleti szereplők
Regisztrált felhasználók: Az olvasók regisztrálhatnak majd, így saját fiókot hozhatnak létre, ahol elmenthetik a kedvenc cikkeiket, és személyre szabott tartalmakat kapnak.
Moderátorok: Ők ellenőrzik a kommenteket, és eltávolítják azokat, amelyek nem felelnek meg az oldal szabályainak.
Automatikus hírgyűjtők: Egy rendszer, amely automatikusan összeszedi az aktuális híreket különböző forrásokból, hogy a szerkesztőknek kevesebb dolguk legyen.
Elemzők: Ők figyelik, hogy az oldal hogyan teljesít, és adatokat gyűjtenek arról, hogy a felhasználók mit csinálnak az oldalon, hogy folyamatosan javíthassuk a szolgáltatásainkat.
Üzleti folyamatok
Automatikus hírszerzés: Egy új rendszer segítségével a hírek automatikusan kerülnek majd az oldalra különböző forrásokból, így mindig naprakészek leszünk, és a szerkesztők csak a minőséget ellenőrzik.

Felhasználói fiókok és kedvencek kezelése: A regisztrált felhasználók saját fiókot kapnak, ahol elmenthetik kedvenc cikkeiket, és személyre szabott tartalmakat is kapnak majd az érdeklődési körük alapján.

Személyre szabott reklámok: A felhasználók tevékenysége alapján személyre szabott hirdetéseket jelenítünk meg, így ők is relevánsabb hirdetéseket látnak, és az oldal is több bevételhez jut.

Kommentelés és moderálás: A felhasználók hozzászólhatnak majd a cikkekhez, és egy moderátorcsapat gondoskodik arról, hogy a hozzászólások kulturáltak és szabályosak legyenek.

Adatok gyűjtése és elemzése: A felhasználói viselkedésről adatokat gyűjtünk (például melyik cikkeket olvassák a legtöbben), hogy az oldal folyamatosan fejlődjön és minél jobban megfeleljen az olvasók igényeinek.

Üzleti entitások
Felhasználói fiókok: Minden regisztrált felhasználónak lesz saját fiókja, ahol kezelheti a kedvenc cikkeinek listáját, és személyre szabott híreket kap.
Automatikusan frissülő hírek: A hírek nagy része automatikusan kerül fel az oldalra, ami gyorsabbá és hatékonyabbá teszi a friss tartalmak megjelenítését.
Reklámmentes opció: Lehetőség lesz előfizetni egy reklámmentes szolgáltatásra, amely prémium élményt nyújt a felhasználóknak.

## 5. Követelménylista

| Id | Modul | Név | Leírás |
| :---:| --- | --- | ---    |	
| :#1: | Oldalnavigáció | Főoldal | A főoldalról könnyedén átugorhatunk az egyes témájú híreket soroló oldalra. |
| :#2: | Oldalnavigáció | Navigációs sáv | Az oldalon való navigálást segíti menüpontokkal és keresővel. |
| :#3: | Oldalnavigáció | Menüpontok | Segítségükkel kategóriákba szedve olvashatunk híreket. |
| :#4: | Oldalnavigáció | Keresőmező | Segítségével különböző témájú cikkeket kereshetünk. |
| :#5: | Hírolvasó | Cikk | Minden hírcikk új oldalon jelenik meg. |
| :#6: | Felhasználók | Bejelentkezési képernyő | A felhasználók ezen a képernyőn felhasználónevük és jelszavuk megadásával bejelentkezhetnek. |
| :#7: | Felhasználók | Kedvencek | Kedvenc híreinket megjelölhetjük és külön listán láthatjuk. |

## 6. Használati esetek

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

## 8. Képernyőtervek

![képnév](gitlink ahol a kép van)

## 9. Forgatókönyvek

## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| K4 | ... | ... |

## 11 Fogalomszótár
