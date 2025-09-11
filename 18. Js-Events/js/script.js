var btn = document.getElementById('btn');
var body = document.getElementById('body');

// btn.onclick = function () {
//     alert("Hello World");
// }

btn.addEventListener('click', function () {

    // alert('This is addEventListener');

    // body.style.backgroundColor = "rgb(244, 76, 8)";

    var randomNum1 = Math.floor(Math.random() * 255);
    var randomNum2 = Math.floor(Math.random() * 255);
    var randomNum3 = Math.floor(Math.random() * 255);

    // console.log(randomNum1, randomNum2, randomNum3);

    const rgbValue = "rgb(" + randomNum1 + "," + randomNum2 + "," + randomNum3 + ")";

    // console.log(rgbValue);

    body.style.backgroundColor = rgbValue;

});

/////////////////////////////////////////////////////////

var btIncrease = document.getElementById('btn-increase');
var element = document.getElementById('element')

var initialSize = window.getComputedStyle(element).fontSize;
console.log(initialSize, typeof (initialSize))

// 25px
// 124px
// 1987px

// var initialSize = "20px"

initialSize = parseInt(initialSize.substring(0, (initialSize.length - 2)));

console.log(initialSize, typeof (initialSize))

btIncrease.addEventListener('click', function () {

    initialSize = initialSize + 10
    console.log(initialSize)

    element.style.fontSize = initialSize + "px";

});