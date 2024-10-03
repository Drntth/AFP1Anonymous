//Kattintás hang

const clickSound = new Audio('hangok/click.mp3');

const newsArticles = document.querySelectorAll('.news-article');

newsArticles.forEach(article => {
    article.addEventListener('mouseover', () => {
        clickSound.play(); 
    });
});

// kategóriák megjelenítése
function filterArticles(category) {
    // Elrejti az összes kategóriát
    var containers = document.querySelectorAll('.news-container');
    containers.forEach(function(container) {
        container.style.display = 'none';
    });

    // Ha 'all' van kiválasztva, megjelenít minden cikket
    if (category === 'all') {
        containers.forEach(function(container) {
            container.style.display = 'block';
        });
    } else {
        // Csak a kiválasztott kategória elemeit jeleníti meg
        var selectedContainers = document.querySelectorAll('.' + category);
        selectedContainers.forEach(function(container) {
            container.style.display = 'block';
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




