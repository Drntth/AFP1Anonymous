# Tesztelési Jegyzőkönyv

## 1. Áttekintés

**Projekt neve:**  
**Verzió:**  
**Dátum:**  
**Készítette:** 

+ Plasku Dominik (AEEBES)
+ Cserni Boglárka Anna (MVTNRT)
+ Borsodi István (F0M774)
+ Nagy Péter (TDNLEN)

**Tesztelő:**  

## 2. Tesztelési Célok

- [ ] Cél 1
- [ ] Cél 2
- [ ] Cél 3

## 3. Tesztelési Módszerek

- Módszer 1
- Módszer 2
- Módszer 3

## 4. Tesztelési Környezet

- Operációs rendszer:  
- Szoftververzió:  
- Hardver:  
- Egyéb:  

## 5. Tesztesetek

| Teszteset azonosító | Leírás                       | Elvárt eredmény          | Aktuális eredmény | Megjegyzések  |
|---------------------|-----------------------------|--------------------------|-------------------|---------------|
| TC-001              | Teszteset leírása          | Elvárt eredmény          | Megszerzett eredmény | Megjegyzés 1  |
| TC-002              | Teszteset leírása          | Elvárt eredmény          | Megszerzett eredmény | Megjegyzés 2  |
| TC-003              | Teszteset leírása          | Elvárt eredmény          | Megszerzett eredmény | Megjegyzés 3  |

# 5.1 Back-end tesztje

Tesztelte: Cserni Boglárka Anna (MVTNRT)

| Teszteset azonosító | Leírás                       | Elvárt eredmény          | Aktuális eredmény | Megjegyzések  |
|---------------------|-----------------------------|--------------------------|-------------------|---------------|
| BE-TC-001              | Regisztráció az arra kijelölt oldalon          | Sikeres regisztráció után az adatbázisban megjelennek az új felhasználó adatai          | Sikeres teszt | Megjegyzés 1  |
| BE-TC-002              | Bejelentkezés az arra kijelölt oldalon          | Ha egy regisztrált felhasználó jó felhasználónév-jelszó párt ad meg akkor az oldal beengedi a profiljába. Nem megfelelő felhasználónév-jelszó pár vagy nem létező fiók esetén nem jelenik meg a felhasználói profil.          | Sikeres teszt | Megjegyzés 2  |
| BE-TC-003              | Felhasználónév módosítása          | Bejelentkezett felhasználó a megfelelő oldalon új felhasználónév megadását követően a Módosítás gombra kattintva az adatbázisban módosul a felhasználónév.          | Sikeres teszt | Megjegyzés 3  |
| BE-TC-004              | Jelszó módosítása          | Bejelentkezett felhasználó a megfelelő oldalon új jelszó megadását és annak megerősítését követően a Módosítás gombra kattintva az adatbázisban módosul a jelszó (látszik, hogy más a hash).         | Sikeres teszt | Megjegyzés 4  |
| BE-TC-005              | E-mail cím módosítása          | Bejelentkezett felhasználó a megfelelő oldalon új e-mail cím megadását követően a Módosítás gombra kattintva az adatbázisban módosul az e-mail cím.          | Sikeres teszt | Megjegyzés 5  |
| BE-TC-006              | Profil törlése          | A Profil törlés gombra kattintás után a felhasználó minden adata törlődik az adatbázisból és a felhasználó visszakerül a bejelentkező képernyőre.          | Sikeres teszt | Megjegyzés 6  |
| BE-TC-007              | Felhasználói adatok lekérdezése         | Bejelentkezett felhasználó az Adatok lekérdezése gombra kattintva megtekintheti a felhasználónevét, jelszavát (hashelve), valamint szerepkörének azonosítóját és nevét.          | Sikeres teszt | Esetleg nem hashelt jelszó megjelenítése.  |


## 6. Tesztelési Eredmények

- **Sikeres tesztek:**  
- **Sikertelen tesztek:**  
- **Kérdések és észrevételek:**  

## 7. Következő lépések

- [ ] Lépés 1
- [ ] Lépés 2
- [ ] Lépés 3

## 8. Mellékletek

- Melléklet 1
- Melléklet 2
