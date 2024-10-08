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
        container.style.display = 'none';
    });

    // Ha 'all' van kiválasztva, megjelenít minden cikket
    if (category === 'all') {
        containers.forEach(function(container) {
            container.style.visibility = 'visible';
            container.style.position = 'static';
            container.style.display = 'flex';
        });
    } else {
        // Csak a kiválasztott kategória elemeit jeleníti meg
        var selectedContainers = document.querySelectorAll('.' + category);
        selectedContainers.forEach(function(container) {
            container.style.visibility = 'visible';
            container.style.position = 'static';
            container.style.display = 'flex';
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

    setTimeout(closePopup, 5000);
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

// Cikk betöltése a főoldalon
fetch('cikkek.json')
        .then(response => response.json())
        .then(data => {
            // Cikkek megjelenítése a főoldalon
            for (const cikkId in data) {
                const cikk = data[cikkId];
                const cikkElement = document.getElementById(cikkId);
                
                if (cikkElement) {
                    // Cím, forrás és kép beállítása
                    cikkElement.querySelector('h2').innerText = cikk.title;
                    cikkElement.querySelector('p').innerText = cikk.source;
                    cikkElement.querySelector('img').src = cikk.image;
                    
                    // Gombra kattintás esetén átirányítás a cikk oldalára
                    cikkElement.querySelector('button').onclick = function() {
                        window.location.href = `politikaiCikk.html?id=${cikkId}`;
                    };
                }
            }
            // Kategória betöltése a URL-ből
        const urlParams = new URLSearchParams(window.location.search);
        const category = urlParams.get('category') || 'all'; // alapértelmezett érték 'all'
        filterArticles(category); // Kategória szűrés hívása
    })    
    .catch(error => console.error('Hiba történt a cikkek betöltésekor:', error));

// URL-ből az azonosító kinyerése
const urlParams = new URLSearchParams(window.location.search);
const cikkId = urlParams.get('id');

// Cikk betöltése
fetch('cikkek.json')
    .then(response => response.json())
    .then(data => {
        const cikk = data[cikkId];
        if (cikk) {
            document.getElementById('article-title').innerText = cikk.title;
            document.getElementById('article-image').src = cikk.image;
            document.getElementById('article-source').innerText = cikk.source;
            document.getElementById('article-content').innerText = cikk.content;
        } else {
            document.getElementById('article-container').innerText = 'Cikk nem található.';
        }
    })
    .catch(error => console.error('Hiba történt a cikkek betöltésekor:', error));

// Cikk content feldarabolása
function formatContent(content) {
    // Darabolás új sor karakterek alapján
    const paragraphs = content.split('\n');
    let formattedContent = '';

    paragraphs.forEach(paragraph => {
        if (paragraph.trim()) {
            formattedContent += `<p>${paragraph.trim()}</p>`;
        }
    });

    return formattedContent;
}



fetch('cikkek.json')
.then(response => response.json())
.then(data => {
    const cikkId = urlParams.get('id');
    const cikk = data[cikkId];
    if (cikk) {
        document.getElementById('article-title').innerText = cikk.title;
        document.getElementById('article-image').src = cikk.image;
        document.getElementById('article-source').innerText = cikk.source;

        const formattedContent = formatContent(cikk.content);
        document.getElementById('article-content').innerHTML = formattedContent;
    } else {
        document.getElementById('article-container').innerText = 'Cikk nem található.';
    }
})
.catch(error => console.error('Hiba történt a cikkek betöltésekor:', error));

    
document.addEventListener("DOMContentLoaded", function() {
    const newsContainers = document.querySelectorAll('.news-container');
    const newsPerPage = 2;
    let currentPage = 1;
    let totalPages = Math.ceil(newsContainers.length / newsPerPage);

    function renderPage(page) {
        newsContainers.forEach(container => {
            container.style.display = 'none';
        });

        const start = (page - 1) * newsPerPage;
        const end = start + newsPerPage;
        for (let i = start; i < end && i < newsContainers.length; i++) {
            newsContainers[i].style.display = 'flex';
        }

        document.getElementById('prev-btn').disabled = page === 1;
        document.getElementById('next-btn').disabled = page === totalPages;
    }

    function updatePagination() {
        const visibleContainers = document.querySelectorAll('.news-container[style*="flex"]');
        totalPages = Math.ceil(visibleContainers.length / newsPerPage);
        currentPage = 1;
        renderPage(currentPage);
    }

    function filterArticles(category) {
        const containers = document.querySelectorAll('.news-container');
        containers.forEach(function(container) {
            container.style.display = 'none';
        });

        const pagination = document.getElementById('pagination');

        if (category === 'all') {
            containers.forEach(function(container) {
                container.style.display = 'flex';
            });
            
            if (pagination) {
                pagination.style.display = 'block';
            }
            updatePagination();
        } else {
            const selectedContainers = document.querySelectorAll('.' + category);
            selectedContainers.forEach(function(container) {
                container.style.display = 'flex';
            });

            if (pagination) {
                pagination.style.display = 'none';
            }
        }
    }

    document.getElementById('prev-btn').addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            renderPage(currentPage);
        }
    });

    document.getElementById('next-btn').addEventListener('click', function() {
        if (currentPage < totalPages) {
            currentPage++;
            renderPage(currentPage);
        }
    });

    renderPage(currentPage);
    document.getElementById('pagination').style.display = 'none';
    window.filterArticles = filterArticles;
});
