const paralaxBg = document.querySelector('.paralax-box');
function parallaxEffect() {
    if(pageYOffset > 1353 && pageYOffset < 3044) {
        const position = '-340px ' + (-665 + (pageYOffset  / 5)) + 'px';
        paralaxBg.style.backgroundPosition = position;
    }
}

document.addEventListener('scroll', parallaxEffect);
