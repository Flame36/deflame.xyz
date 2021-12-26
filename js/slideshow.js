const slideshowImage = document.querySelector('.slideshow-image-main');

$('body,html').mousemove(function(mPos){
    if (screen.width < 900)
        return;
    return; //disabled

    var sIRect = slideshowImage.getBoundingClientRect();
    
    var dx = sIRect.x + sIRect.width / 2 - mPos.pageX;
    var dy = sIRect.y + sIRect.height / 2 - mPos.pageY;
    
    var distance = Math.sqrt(dx*dx+dy*dy);
    
    var ndx = dx/10;
    var ndy = dy/10;

    var diffusion = Math.min((distance/150)*(distance/150), 30) + 5;
    
    var c = Math.max(1-distance/1000, 0);
    c = 20 * (1-c) + 90  * c;//lerping
    slideshowImage.style.setProperty('box-shadow', `${ndx}px ${ndy}px ${diffusion}px ${diffusion}px ${hslToHex(0, 0, c, c)}`);
});

function hslToHex(h, s, l, a) {
    l /= 100;
    const sa = s * Math.min(l, 1 - l) / 100;
    const f = n => {
    const k = (n + h / 30) % 12;
    const color = l - sa * Math.max(Math.min(k - 3, 9 - k, 1), -1);
    return Math.round(255 * color).toString(16).padStart(2, '0');
    };
    return `#${f(0)}${f(8)}${f(4)}${f(a)}`;
}

const rightArrow = document.querySelector('#slideshow-arrow-right');
const leftArrow = document.querySelector('#slideshow-arrow-left');
const mainImage = document.querySelector('.slideshow-image-main');
const otherImage = document.querySelector('.slideshow-image-other');


rightArrow.addEventListener('click', function() { startTransition(1) });
leftArrow.addEventListener('click', function() { startTransition(-1) });

var transitioning = true;
var index = 0;
var imageData;
fetch(imageDataUrl)
    .then(response => response.json())
        .then(data => {
            imageData = data; 
            mainImage.setAttribute("src", imageData[0].img);
            transitioning = false
        });

function startTransition(direction){
    if (transitioning)
        return;

    transitioning = true;
    
    index = (((index + direction) % imageData.length) + imageData.length) % imageData.length;
    
    console.log(index);

    otherImage.setAttribute("src", imageData[index].img);
    mainImage.classList.toggle("switching", true);
    otherImage.classList.toggle("switching", true);

    setTimeout(function() { endTransitioning() }, 1000);
}

function endTransitioning() {
    mainImage.setAttribute("src", imageData[index].img);
    mainImage.classList.toggle("switching", false);
    otherImage.classList.toggle("switching", false);

    transitioning = false;
}
