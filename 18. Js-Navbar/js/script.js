var menu_open = document.querySelector('.menu_open');
var menu_close = document.querySelector('.menu_close');
var links = document.querySelector('.navbar .links');

console.log(links.classList)

menu_open.addEventListener('click', function () {

    links.classList.toggle('active');
    console.log(links.classList);

});

menu_close.addEventListener('click', () => {

    links.classList.toggle('active');
    console.log(links.classList);

});

