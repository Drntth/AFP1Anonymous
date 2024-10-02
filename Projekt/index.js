//Kattintás hang

const clickSound = new Audio('hangok/click.mp3');

const newsArticles = document.querySelectorAll('.news-article');

newsArticles.forEach(article => {
    article.addEventListener('mouseover', () => {
        clickSound.play(); 
    });
});

