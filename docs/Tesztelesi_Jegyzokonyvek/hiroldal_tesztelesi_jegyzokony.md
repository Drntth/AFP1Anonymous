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

**Tesztelő:** Borsodi István

## 2. Tesztelési Célok

- [ ] Tesztelni a lapozás működését (előző/ következő gombok).
- [ ] Ellenőrizni a "Minden" kategóriát és a lapozás újraszámítását.
- [ ] Ellenőrizni a hírcikkek megfelelő oldalonkénti megjelenítését.

## 3. Tesztelési Módszerek

- Manuális tesztelés a böngészőben.
- Webes eszközök használata az események és stílusok ellenőrzésére.
- Különböző kategóriák, illetve lapozás tesztelése több hírcikkel.

## 4. Tesztelési Környezet

- Operációs rendszer:  Windows 11 64-bit
- Szoftververzió:  Google Chrome (Verzió: 129.0.6668.90)
- Hardver:  
    - CPU: Intel Core i5-11320H
    - RAM: 16 GB
    - GPU: NVIDIA GeForce RTX 3050
- Egyéb: Nincs

## 5. Tesztesetek

| Teszteset azonosító | Leírás                       | Elvárt eredmény          | Aktuális eredmény | Megjegyzések  |
|---------------------|-----------------------------|--------------------------|-------------------|---------------|
| TC-001              | Lapozás előző gomb megnyomása          | Az előző oldal hírei jelennek meg          | Megfelelően működik |   |
| TC-002              | Lapozás következő gomb megnyomása          | A következő oldal hírei jelennek meg         | Megfelelően működik |   |
| TC-003              | Kategória szűrés és lapozás "all" kategóriára          | Az oldalankénti hírek és a lapozás helyesen működik          | Megfelelően működik |   |
| TC-004              | Lapozás az első oldalon: "Előző" gomb deaktiválása          | Ha az oldal az első oldalon van, az "Előző" gomb inaktív, és nem lehet csökkenteni az oldalszámot          | Megfelelően működik |   |
| TC-005              | Lapozás az utolsó oldalon: "Következő" gomb deaktiválása          | Ha az oldal az utolsó oldalon van, a "Következő" gomb inaktív, és nem lehet növelni az oldalszámot          | Megfelelően működik |   |
| TC-006              | Cikkek sorrendjének ellenőrzése az oldalak között          | A cikkek sorrendje az oldalak között folyamatos, nincs duplikáció vagy kihagyás          | Megfelelően működik |   |
| TC-007              | Ellenőrizni, hogy minden oldal tartalmaz-e megfelelő számú cikket          | Minden oldal 4 cikket tartalmaz, kivéve az utolsó oldalt, ahol kevesebb is lehet          | Megfelelően működik |   |
| TC-008              | A lapozási gombok stílusa megegyezik a híroldal stílusával          | A lapozási gombok megegyeznek a híroldal stílusával; a hover állapotok is megfelelőek          | Megfelelően működik |   |
| TC-009              | Hírcikkek számának dinamikus változása(új cikkek hozzáadása)          | A lapozás és a szűrés továbbra is helyesen működik, ha új hírek kerülnek a rendszerbe          | Megfelelően működik |   |
| TC-010              | Hírcikkek megjelenítése gyors lapozás esetén          | A hírek helyesen jelennek meg, ha a felhasználó gyorsan lapoz több oldalon keresztül          | Megfelelően működik |   |
| TC-011              | Szűrés visszaállítása „Minden” kategóriára          | Szűrés visszaállítása után minden hír helyesen megjelenik, és a lapozás frissül          | Megfelelően működik |   |

## 6. Tesztelési Eredmények

- **Sikeres tesztek:** 11 
- **Sikertelen tesztek:** 0 
- **Kérdések és észrevételek:** Nincs 

## 7. Következő lépések

- [ ] Kód optimalizálása, ha szükséges.
- [ ] Mobil eszközökre optimalizálás tesztelése.
- [ ] További hibák keresése a böngészők különböző verzióiban.

## 8. Mellékletek

- Melléklet 1
- Melléklet 2
