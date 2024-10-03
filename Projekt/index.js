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


