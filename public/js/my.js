var prev = document.querySelector('.slider .buttons .prev');
var next = document.querySelector('.slider .buttons .next');

var images = document.querySelectorAll('.slider .photos img');
var i = 0;
var x = 0;


prev.onclick = function () {
    if (i == images.length - 1) {
        images[0].className = 'photo';
        images[0].style.display = 'none';
    } else {
        images[i + 1].className = 'photo';
        images[i + 1].style.display = 'none';
    }
    if (i == 0) {
        images[i + 1].style.display = 'none';
        images[i + 1].className = 'photo';
        images[i].className = 'photo photo-left';
        images[images.length - 1].style.display = 'inline-block';
        images[images.length - 1].className = 'photo photo-right';
        i = images.length - 1;
    } else {
        images[i].className = 'photo photo-left-last';
        images[i - 1].style.display = 'inline-block';
        images[i - 1].className = 'photo photo-right-first';
        i--;
    }
}

next.onclick = function () {
    images[i].className = 'photo photo-left';
    if (i == 0) {
        images[images.length - 1].className = 'photo';
        images[images.length - 1].style.display = 'none';
    } else {
        images[i - 1].className = 'photo';
        images[i - 1].style.display = 'none';
    }
    if (i < images.length - 1) {
        images[i + 1].style.display = 'inline-block';
        images[i + 1].className = 'photo photo-right';
        i++;
    } else {
        images[i - 1].className = 'photo';
        images[i - 1].style.display = 'none';
        images[i].className = 'photo photo-left-last';

        i = 0;
        images[i].style.display = 'inline-block';
        images[i].className = 'photo photo-right-first';
    }
}