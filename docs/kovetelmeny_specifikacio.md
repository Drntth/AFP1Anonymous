# Követelmény specifikáció

## 1. Áttekintés

A projekt célja, hogy egy egyszerű, felhasználóbarát híroldal létrehozása, amely friss híreket
szolgáltat az olvasók számára különböző országos és nemzetközi témákban.

Az oldal célja, hogy gyorsan közöljön aktuális híreket, megbízható forrásokból.

**A híroldal főbb jellemzői:**
- Reszponzív dizájn, amely optimalizált megjelenítést biztosít mind asztali gépeken, mind mobil eszközökön.
- Könnyen használható kategóriarendszer a hírek gyors szűréséhez és kereséséhez.
- Keresőmező segítségével könnyedén megtalálhatóvá váljon egy-egy adott cikk.
- Felhasználói profil létrehozása.

Az oldal üzemeltetésének célja hogy hiteles, független és széles körű tájékoztatást nyújtsunk olvasóinknak a legfrissebb hírekről, miközben
a felhasználók számára egyszerű és élvezetes hozzáférést biztosítunk az információkhoz.

## 2. A jelenlegi helyzet leírása

A híroldal feljeltése jelengleg kezdetleges fázisban áll, azonban a projekt célja egy modern, reszponzív weboldal lértehozása, amely képes kiszolgálni a felhasználók igényeit. Az oldal technológia hátterét már meghatázorztuk, amely a következő technológiákra épül:

- **HTML:** Az oldal alapvető szerkezete statikus HTML segítségével lesz megvalósítva. A HTML struktúra biztosítja az oldal fő tartalmi blokkjainak felépítését, beleértve a hírek listáját, egyedi hírbejegyzéseket, valamint az oldal navigációját és egyéb statikus elemeket.

- **CSS:** Az oldal megjelenésének formázásához CSS-t használunk, amely biztosítja a reszponzív dizájnt, hogy az oldal mobiltelefonokon és tableteken is megfelelően jelenjen meg. A cél egy letisztult, felhasználóbarát felület kialakítása, amely reszponzívan alkalmazkodik a különböző képernyőméretekhez.

- **JavaScript:** A felhasználói élményt fokozó interaktív elemek, mint például a dinamikus tartalombetöltés, keresés JavaScript használatával kerülnek megvalósításra. Az oldal interaktivitásának biztosításához szükség lesz további JavaScript könyvtárak és API-k integrálására is.

- **PHP és SQL:** A híroldal dinamikus tartalomkezeléséhez PHP-t fogunk használni. A hírek és a felhasználói adatok kezelésére egy adatbázisrendszer, valószínűleg MySQL, lesz integrálva, amely lehetővé teszi a tartalom könnyű frissítését és kezelését. A PHP fogja biztosítani a tartalmak dinamikus generálását és az adatbázisból való betöltést.

Az oldal fejlesztése a tervek szerint több szakaszban valósul meg, ahol az első lépés a HTML struktúra és alapvető CSS stílusok létrehozása lesz, majd ezt követően a PHP és JavaScript integrálása, végül pedig az adatbázis- és backend funkciók kialakítása.

A jelenlegi helyzet alapján a fejlesztési folyamat még a tervezési fázisban van, ahol a technológiai követelmények, dokumentációk és a funkciók meghatározása történik. Célunk egy könnyen kezelhető, modern híroldal létrehozása, amely skálázható és reszponzív, valamint képes megfelelni a modern hírfogyasztói elvárásoknak.

## 3. Vágyálomrendszer

Célunk, hogy a legmegbízhatóbb és legolvasottabb online újság legyünk az ország számára.
Olyan tartalmakat szeretnénk készíteni, amelyek nemcsak informálnak, szórakoztatnak, 
hanem releváns, naprakész információkat nyújtanak a világ és a hazai eseményekről.
Egy olyan közösséget szeretnénk építeni, ahol az olvasók szabadon kifejezhetik véleményüket 
és részt vehetnek a közbeszédben. Olyan jövőt szeretnénk, ahol a fiatalok informáltak, 
elkötelezettek és aktívan alakítják a világot. Első projektként szeretnénk egy átlátható, 
felhasználóbarát híroldalt létrehozni melyben html, css, javascript és php ismereteinket 
használnánk fel. A függetlenség, a hitelesség, a nyitottság és a szolidaritás értékeire 
építve szeretnénk hosszú távon is sikeres és fenntartható hírportál lenni.

## 4. Jelenlegi üzleti folyamatok modellje

## 5. Igényelt üzleti folyamatok modellje

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| :---:| --- | --- | ---    |	
| :#1: | Oldalnavigáció | Főoldal | A főoldalról könnyedén átugorhatunk az egyes témájú híreket soroló oldalra. |
| :#2: | Oldalnavigáció | Navigációs sáv | Az oldalon való navigálást segíti menüpontokkal és keresővel. |
| :#3: | Oldalnavigáció | Menüpontok | Segítségükkel kategóriákba szedve olvashatunk híreket. |
| :#4: | Oldalnavigáció | Keresőmező | Segítségével különböző témájú cikkeket kereshetünk. |
| :#5: | Hírolvasó | Cikk | Minden hírcikk új oldalon jelenik meg. |
| :#6: | Felhasználók | Bejelentkezési képernyő | A felhasználók ezen a képernyőn felhasználónevük és jelszavuk megadásával bejelentkezhetnek. |
| :#7: | Felhasználók | Kedvencek | Kedvenc híreinket megjelölhetjük és külön listán láthatjuk. | 

## 7. Fogalomtár

- Főoldal: Az oldal első, általában legfontosabb része, ahonnan a többi oldalra lehet navigálni.
- Navigációs sáv: A weboldal tetején vagy oldalán található menü, amely segíti a felhasználót az oldal különböző részei között közlekedni.
- Menüpontok: A navigációs sávban található elemek, amelyek a különböző kategóriákat vagy oldalakat jelölik.
- Bejelentkezési képernyő: Az a felület, ahol a felhasználó a felhasználónevét és jelszavát megadva beléphet a rendszerbe.
- Független: Nem áll szoros kapcsolatban semmilyen politikai vagy gazdasági erővel, így a hírek objektivitása biztosítható.
- Fenntartható: Olyan, amely hosszú távon is működőképes és sikeres.
- Kategóriarendszer: A híreket témák szerint csoportosítja, megkönnyítve a keresést.
- HTML, CSS, JavaScript, PHP: Webfejlesztéshez használt programozási nyelvek.
- Üzemeltetés: Az oldal működtetéséhez szükséges feladatok összessége (tartalomfeltöltés, karbantartás, stb.).
- Reszponzív dizájn: Az oldal automatikusan alkalmazkodik a különböző képernyőméretekhez (számítógép, tablet, mobiltelefon).
- Megbízható forrás: Olyan forrás, amelyről feltételezhető, hogy a benne szereplő információk helyesek és hitelesek.
- Tartalom: A weboldalon megjelenő szövegek, képek, videók stb. összessége.