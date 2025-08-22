// var heading = document.getElementById('heading');

// console.log(heading.classList);

// heading.classList.add('big');

// console.log(heading.classList);

// heading.classList.remove('big');

// console.log(heading.classList);

/////////////////////////////////////////////////////

var btnShow = document.getElementById('btn-show');
var btnHide = document.getElementById('btn-hide')
var navbar = document.getElementById('navbar');

btnHide.addEventListener('click', function () {
    navbar.classList.add('hide');
    navbar.classList.remove('show');

    console.log(navbar.classList);
});

btnShow.addEventListener('click', function () {
    navbar.classList.add('show');
    navbar.classList.remove('hide');

    console.log(navbar.classList);
});