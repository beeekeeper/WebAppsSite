var demoImgAr = ['images/drinkforsliderthing.jpg',
    'images/Israeli-Couscous-Salad-7.jpg',
    'images/Pumpkin-Soup-landscape.jpg'
];
console.dir(demoImgAr);

var demoCounter = 0;

document.getElementById('nextDemo').addEventListener('click', function() {
    console.info('clicked');
    demoCounter++;
    if (demoCounter >= demoImgAr.length) {
        demoCounter = 0;
    }
    document.getElementById('imgDemo').setAttribute('src', demoImgAr[demoCounter]);
})

document.getElementById('demoKeyframe').addEventListener('click', function() { //adds the animate class to the ball
    document.getElementById('demoBall').setAttribute('class', 'demoAnimate')
})

//document.getElementById('imgDemo').setAttribute('src', demoImgAr[5]);

// Infinite loop slider

var imgAr = ['images/drinkforsliderthing.jpg', 'images/Israeli-Couscous-Salad-7.jpg', 'images/Pumpkin-Soup-landscape.jpg'];
var numOfImages = imgAr.length;
var imgHolders = document.querySelectorAll('#sliderContainer ul li img');
console.dir(imgHolders);
var currentImg = 0;

var sliderContainer = document.querySelector('#sliderContainer ul'); //going to have the animation applied to it (the container)
var showCurrent = document.getElementById('showCurrent');
var moving; // to control the movement



function nextImg(nextNum) {
    nextNum++;
    if (nextNum === numOfImages) {
        nextNum = 0;
    }
    return nextNum;
}

function prevImg(prevNum) {
    prevNum--;
    if (prevNum < 0) {
        prevNum = numOfImages - 1; // -1 as the images are indexed from 0, -1 will give you the last image slot 6img -1 = 5 which is the last img slot (6th img)
    }
    return prevNum;
}

imgHolders[0].setAttribute('src', imgAr[prevImg(currentImg)]);
imgHolders[1].setAttribute('src', imgAr[currentImg]);
imgHolders[2].setAttribute('src', imgAr[nextImg(currentImg)]);


// Adding the buttons

var prev = document.getElementById('prev');
var next = document.getElementById('next');

next.addEventListener('click', function() { // these will then trigger the animation using css3
    console.info('next');
    moving = "next";
    sliderContainer.setAttribute('class', 'moveNext');
});

prev.addEventListener('click', function() {
    console.info('previous');
    moving = "prev";
    sliderContainer.setAttribute('class', 'movePrev');
});

sliderContainer.addEventListener("animationend", function() {
    console.info('end');
    sliderContainer.removeAttribute('class');
    if (moving === "next") {
        currentImg++;
        if (currentImg >= numOfImages) {
            currentImg = 0;
        }
        showCurrent.innerHTML = currentImg + 1;
        var sliderImgHolder = document.querySelector('#sliderContainer ul li'); //finds the first image
        sliderContainer.appendChild(sliderImgHolder); //moves it 
        sliderImgHolder.querySelector('img').setAttribute('src', imgAr[nextImg(currentImg)]);
    } else {
        currentImg--; //decrease img value
        if (currentImg < 0) {
            currentImg = numOfImages - 1;
        }
        showCurrent.innerHTML = currentImg + 1;
        var sliderImgHolder = document.querySelector('#sliderContainer ul li:last-child');
        sliderContainer.insertBefore(sliderImgHolder, sliderContainer.childNodes[0]);
        sliderImgHolder.querySelector('img').setAttribute('src', imgAr[prevImg(currentImg)]);
    }
})