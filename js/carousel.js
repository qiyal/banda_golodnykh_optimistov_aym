let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function changeSlide(n) {
    showSlides(slideIndex += n);
}

// Indicator controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Change image every 3 seconds
setInterval("showSlides(++slideIndex)", 3000);
function showSlides(n) {
    let i, slides, dots;
    slides = document.getElementsByClassName("carousel-item");
    dots = document.getElementsByClassName("indicator");
    if (n > slides.length) {slideIndex = 1;}
    if (n < 1) {slideIndex = slides.length;}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
