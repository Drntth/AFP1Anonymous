# Tesztelési Jegyzőkönyv

## 1. Áttekintés

**Projekt neve:** Híroldal  
**Verzió:** 1.0  
**Dátum:** 2024.10.08.
**Készítette:** 

+ Plasku Dominik (AEEBES)
+ Cserni Boglárka Anna (MVTNRT)
+ Borsodi István (F0M774)
+ Nagy Péter (TDNLEN)

**Tesztelő:** Plasku Dominik  

## 2. Tesztelési Célok

- [ ] A cikkek helyes betöltése a cikkek.json fájlból.
- [ ] A kategória szűrés megfelelő működésének ellenőrzése.
- [ ] A cikkek átirányítása a részletes oldalakra (pl.: politikaiCikk.html).
- [ ] A tartalom formázásának helyessége.
- [ ] A reszponzív megjelenés vizsgálata különböző eszközökön és böngészőkben.

## 3. Tesztelési Módszerek

- Manuális tesztelés különböző eszközökön és böngészőkben.
- Hibás és érvényes adatok megadása az URL paramétereknél.
- Betöltési idő mérése és optimalizáció tesztelése.

## 4. Tesztelési Környezet

- Operációs rendszer: Windows 11 64-bit
- Szoftververzió: Opera GX: LVL6 (core: 114.0.5282.84)
- Hardver: Számítógép

## 5. Tesztesetek

| Teszteset azonosító | Leírás                                                                               | Elvárt eredmény                                        | Aktuális eredmény | Megjegyzések          |
|---------------------|--------------------------------------------------------------------------------------|--------------------------------------------------------|-------------------|-----------------------|
| TC-001              | 1. Nyisd meg a főoldalt.                                                             | A cikkek listája betöltődik.                           |   Sikeres teszt   |                       |
|                     | 2. Ellenőrizd, hogy minden cikk címe, forrása és képe helyesen jelenik meg.          | Cím, forrás és kép helyesen jelenik meg.               |   Sikeres teszt   |                       |
| TC-002              | 1. Kattints egy cikkre a főoldalon.                                                  | A cikk részletes oldala betöltődik.                    |   Sikeres teszt   |                       |
|                     | 2. Ellenőrizd, hogy a cikk adatai helyesen jelennek meg a részletes oldalon.         | A cikk részletes adatai helyesen megjelennek.          |   Sikeres teszt   |                       |
| TC-003              | 1. Nyiss meg egy cikket hibás `id` paraméterrel a URL-ben.                           | "Cikk nem található" üzenet jelenik meg.               |   Sikeres teszt   |                       |
| TC-004              | 1. Válaszd ki a "politika" kategóriát a főoldalon.                                   | Csak a "politika" kategóriába tartozó cikkek látszanak.|   Sikeres teszt   |                       |
|                     | 2. Ellenőrizd, hogy a többi kategória cikkei el vannak rejtve.                       | A többi kategória cikkei nincsenek láthatóak.          |   Sikeres teszt   |                       |
| TC-005              | 1. Válaszd ki a "gazdaság" kategóriát.                                               | Csak a "gazdaság" kategóriába tartozó cikkek jelennek meg. | Sikeres teszt   |                     |
| TC-006              | 1. Válaszd ki az "all" kategóriát.                                                   | Minden kategóriába tartozó cikk megjelenik.            |   Sikeres teszt   |                       |
| TC-007             | 1. Nyisd meg a főoldalt egy asztali böngészőben (pl. Chrome).                        | A cikkek helyesen jelennek meg.                        |   Sikeres teszt   |                        |
| TC-008              | 1. Teszteld a cikk betöltési sebességét.                                             | A cikkek 2 másodpercen belül betöltődnek.              |   Sikeres teszt   |                       |
| TC-009              | 1. Ellenőrizd, hogy a tartalom bekezdésekre van bontva a cikk részletes oldalán.     | A tartalom bekezdésekben jelenik meg.                  |   Sikeres teszt   |                       |
| TC-010              | 1. Hibás JSON fájl esetén próbálj meg betölteni egy cikket.                          | "Hiba történt a cikkek betöltésekor" hibaüzenet jelenik meg. | Sikeres teszt   |                   |
| TC-011              | 1. Ellenőrizd, hogy a főoldalon a képek helyesen jelennek meg.                       | Minden cikkhez tartozó kép betöltődik.                 |   Sikeres teszt   |                       |
| TC-012              | 1. Ellenőrizd, hogy mi történik, ha egy cikkhez nem tartozik kép a JSON-ban.         | A kép helyén egy alapértelmezett kép jelenik meg.      |   Sikertelen teszt   | Jelenleg nem helyettesíti semmivel sem a képet az oldal ha nincs hozzárendelve a JSON-ban |
| TC-013              | 1. Nyisd meg a kategória szűrést, majd frissítsd az oldalt.                          | A szűrésnek megfelelő cikkek láthatók maradnak.        |   Sikertelen teszt   | A szűrt érték visszaáll alapméretezettre és mindent megjelenít |
| TC-014              | 1. Ellenőrizd, hogy a cikk tartalma helyesen jelenik meg 1080p felbontású képernyőn. | A tartalom jól látható és olvasható.                   |   Sikeres teszt   |                       |


## 6. Tesztelési Eredmények

- **Sikeres tesztek:** 12  
- **Sikertelen tesztek:** 2 
- **Kérdések és észrevételek:** 
    - TC-012, TC-013 -as teszt során felfedezett hiba javítása

## 7. Következő lépések

- [ ] További reszponzív tesztelés különböző eszközökön.
- [ ] Oldal frissítésének az esetében a szűrt cikkek maradjanak meg.
- [ ] Amennyiben a cikkhez nincs a JSON-ben kép tárolva akkor azt egy placeholderrel helyettesítsük.

## 8. Mellékletek   
| Megjegyzés | Kép |
| :-----------: | :-----------: |
| Hiányzó kép példa: TC-012 | ![](https://github.com/Drntth/AFP1Anonymous/blob/main/kep/TesztelesiKepek/Hianyzokep_JSON.png) | 