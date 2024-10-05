//Kattintás hang

const clickSound = new Audio('hangok/click.mp3');

const newsArticles = document.querySelectorAll('.news-article');

newsArticles.forEach(article => {
    article.addEventListener('mouseover', () => {
        clickSound.play(); 
    });
});

// Kategóriák megjelenítése
function filterArticles(category) {
    // Elrejti az összes kategóriát
    var containers = document.querySelectorAll('.news-container');
    containers.forEach(function(container) {
        container.style.visibility = 'hidden';
        container.style.position = 'absolute';
    });

    // Ha 'all' van kiválasztva, megjelenít minden cikket
    if (category === 'all') {
        containers.forEach(function(container) {
            container.style.visibility = 'visible';
            container.style.position = 'static';
        });
    } else {
        // Csak a kiválasztott kategória elemeit jeleníti meg
        var selectedContainers = document.querySelectorAll('.' + category);
        selectedContainers.forEach(function(container) {
            container.style.visibility = 'visible';
            container.style.position = 'static';
        });
    }
}

//időjárás
const apiKey = 'aafdd5a4639fa0376f2d25ccd36e2c8b';
const city = 'Budapest';
const units = 'metric'; 

fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=${units}`)
    .then(response => response.json())
    .then(data => {
        const temperature = data.main.temp;
        
        document.getElementById('temperature').innerHTML = `<img src="kepek/idojaras.png" alt="Időjárás ikon" width="30px" height="30px" style="vertical-align: middle; margin-right: 10px;"> Budapest: ${temperature}°C`;
    })
    .catch(error => {
        console.error('Hiba történt az időjárás adatainak lekérdezésekor:', error);
        document.getElementById('temperature').innerText = 'Hiba az adatok betöltésekor';
    });

// HUF-USD árfolyam API
async function fetchExchangeRate() {
    const apiKey = '0bbc98743c169d510d84f42d';
    const url = `https://api.exchangerate-api.com/v4/latest/USD`; 

    try {
        const response = await fetch(url);
        const data = await response.json();
        
       
        if (data.rates.HUF) {
            const exchangeRate = data.rates.HUF;
            document.getElementById('exchange-rate').innerText = `1 USD = ${exchangeRate.toFixed(2)} HUF`;
        } else {
            document.getElementById('exchange-rate').innerText = 'Árfolyam nem elérhető';
        }
    } catch (error) {
        console.error('Hiba történt az árfolyam lekérdezésekor:', error);
        document.getElementById('exchange-rate').innerText = 'Hiba az árfolyam lekérdezésekor';
    }
}


fetchExchangeRate();
// A pop-up megjelenítése 30 másodperc múlva
setTimeout(showPopup, 30000);

function showPopup() {
    document.getElementById('rating-popup').style.display = 'flex';
}

function closePopup() {
    document.getElementById('rating-popup').style.display = 'none';
}

function rate(stars) {
    const feedback = document.getElementById('feedback');
    
    const starElements = document.querySelectorAll('.star');
    starElements.forEach((star, index) => {
        if (index < stars) {
            star.classList.add('selected'); 
        } else {
            star.classList.remove('selected');
        }
    });

    feedback.innerText = `Köszönjük az értékelést: ${stars} csillag!`;

    const dingSound = document.getElementById('ding-sound'); 
    dingSound.play(); 

    setTimeout(closePopup, 700);
}

function highlightStars(stars) {
    const starElements = document.querySelectorAll('.star');
    starElements.forEach((star, index) => {
        if (index < stars) {
            star.classList.add('selected'); 
        } else {
            star.classList.remove('selected'); 
        }
    });
}


const starElements = document.querySelectorAll('.star');
starElements.forEach((star, index) => {
    star.addEventListener('mouseover', () => highlightStars(index + 1)); 
    star.addEventListener('mouseout', () => rate(currentRating)); 
});

let currentRating = 0; 

starElements.forEach((star, index) => {
    star.addEventListener('click', () => {
        currentRating = index + 1; 
        rate(currentRating); 
    });
});
