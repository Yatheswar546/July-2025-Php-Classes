var countDown = document.getElementById('countDown');
var bgImage = document.getElementById('bg-image');

// console.log(countDown);
// console.log(bgImage);

var initialCountdown = countDown.innerHTML;
// console.log(initialCountdown);

// console.log(bgImage.src);
// bgImage.src = './images/bg2.jpg';

var interval = setInterval(function () {

    initialCountdown = initialCountdown - 1;
    // console.log(initialCountdown);
    countDown.innerHTML = initialCountdown

    // console.log(initialCountdown * 100 + "px");
    countDown.style.fontSize = initialCountdown * 100 + "px";

    // if (initialCountdown % 2 === 0) {
    //     bgImage.src = './images/bg1.jpg';
    // }
    // else {
    //     bgImage.src = './images/bg2.jpg';
    // }
    // console.log(bgImage.src);

    var imagePath = initialCountdown % 2 === 0 ? './images/bg1.jpg' : './images/bg2.jpg';
    bgImage.src = imagePath;
    console.log(bgImage.src);

    if (initialCountdown <= 0) {
        clearInterval(interval)
    }

}, 1000)