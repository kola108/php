document.addEventListener('DOMContentLoaded', () => {
    const currentUrl = window.location.href,
         queryString = currentUrl.replace(/.*?\?/,""),
         homeLink = document.getElementById('home-link'),
         productsLink = document.getElementById('products-link'),
         articlesLink = document.getElementById('articles-link');

    switch(queryString){
        case 'page=home':
            homeLink.classList.add('active');
            break;
        case 'page=products':
            productsLink.classList.add('active');
            break;
        case 'page=articles':
            articlesLink.classList.add('active');
            break;
    }
});