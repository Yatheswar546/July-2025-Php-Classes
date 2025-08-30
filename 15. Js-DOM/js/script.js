// DOM - SELECT HTML ELEMENTS

// var a = document.getElementById('id');
// console.log(a);
// console.log(a.innerHTML);
// console.log(a.getAttribute("id"));
// console.log(a.getAttribute("class"));

// var b = document.getElementsByTagName("h1");
// console.log(b);
// console.log(b[2].innerHTML);
// console.log(b.length);

// var c = document.getElementsByClassName('class1');
// console.log(c[0].innerHTML);
// console.log(c)
// console.log(c[3].innerHTML);


// DOM - Query Selectors
// let num = document.querySelector("#number");
// console.log(num)
// num.style.fontSize = "48px";
// num.style.color = "red";

// let nav = document.querySelectorAll('.navbar');
// console.log(nav);

// nav.forEach((ele) => {
//     ele.style.fontSize = "24px";
//     ele.style.color = "blue";
// });

// arr = [1,2,3,4,5]
/*  
    arr[0], arr[1], arr[2]..........
*/

/*
    for (let x in arr)
    for (let x of arr)
*/

/*
    forEach( (ele) => {
    
    });
*/

// DOM - UPDATE HTML ELEMENTS
// 1) element.innerHTML
// let x = document.getElementsByClassName("update-element");
// console.log(x[0].innerHTML);
// x[0].innerHTML = "UPDATED ELEMENT";
// console.log(x[0].innerHTML);

// 2) element.attribute
let image = document.getElementById("image");
console.log(image);
console.log(image.src);
console.log(image.alt);
console.log(image.id);
console.log(image.class);

image.src = './images/bg2.jpg';

console.log(image.src);

// 3) element.style.property
let counter = document.getElementById("Counter");
console.log(counter);

counter.style.fontSize = "48px"
counter.style.color = "darkgreen"