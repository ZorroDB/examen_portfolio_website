var imgs = document.querySelectorAll('.slider_container .slider img');
var dots = document.querySelectorAll('.dot');
var currentImg = 0;
const interval = 3000;

function ChangeSlide(n){
    for(var i = 0; i < imgs.length; i++){
        imgs[i].style.opacity = 0;
        dots[i].className = dots[i].className.replace(' active', '');
    }
    currentImg = (currentImg + 1) % imgs.length;

if (n != undefined) {
    clearInterval(timer);
    timer = setInterval(changeSlide, interval);
    currentImg = n;
}

    imgs[currentImg].style.opacity = 1;
    dots[currentImg].className += ' active';
}

var timer = setInterval(ChangeSlide, interval);