// Type Conversion - change of one datatype into another
/*
    1. Implicit
    2. Explicit
*/

let x1 = 5
let x2 = "5"

// console.log(x1 == x2)

res1 = 51 + 90
// console.log(res1)

res2 = "Hello " + "Everyone";
// console.log(res2)

res3 = 51 + 90 + "JavaScript";
// console.log(res3)

/*  
    51 + 90 + "JavaScript"
    141 (number) + "JavaScript" (string)
    "141" (string) + "JavaScript" (string)
    141JavaScript
*/

res4 = 50 + 30 + "JavaScript" + 20 + 100
// console.log(res4) //80JavaScript20100
/*
    80JavaScript120
    200JavaScript
    JavaScript200

    Working:
    50 + 30 + "JavaScript" + 20 + 100
    80 (number) + "JavaScript" + 20 (number) + 100 (number)
    "80" (string) + "JavaScript" + 20 (number) + 100 (number)
    "80JavaScript" + 20 (number) + 100 (number)
    "80JavaScript" + "20" (string) + 100 (number)
    "80JavaScript20" (string) + "100" (string)
    "80JavaScript20100"
*/

// let num = 123;

// console.log(num, typeof (num))

// let str1 = String(num);

// console.log(str1, typeof (str1));

// let str2 = "456"

// console.log(str2, typeof (str2));

// let num2 = Number(str2);

// console.log(num2, typeof (num2));

// num2 = num2 + 300;

// console.log(num2, typeof (num2))

////////////////////////////////////////////

// Conditional Statements
/*
    1) if
    2) if-else
    3) if-elseif
    4) switch
*/

let a = 100;

if (a === 100) {
    // console.log("Yes");
}
else {
    console.log("No");
}

if (a > 100) {
    console.log("a is greater than 100");
}
else if (a < 100) {
    console.log("a is less than 100");
}
else {
    // console.log("a is 100");
}

switch (81) {
    case 0:
        day = "Sunday";
        break;
    case 1:
        day = "Monday";
        break;
    case 2:
        day = "Tuesday";
        break;
    case 3:
        day = "Wednesday";
        break;
    case 4:
        day = "Thursday";
        break;
    case 5:
        day = "Friday";
        break;
    case 6:
        day = "Saturday";
        break;
    default:
        day = "No day";
}

// console.log(day)

////////////////////////////////////////////

// Loops
/*
    1) for
    2) for-in
    3) for-of
    4) while
    5) do-while
*/

for (let i = 0; i < 10; i++) {
    // console.log(i);
}

a1 = ["a", "b", "c", "d", "e"];
for (let x in a1) {
    // console.log(x, a1[x]);
}
/*
    0, a1[0]
    1, a1[1]
    2, a1[2]
*/

a1 = ["a", "b", "c", "d", "e"];
for (let x of a1) {
    // console.log(x);
}

res = 0;
while (res < 10) {
    // console.log(res);
    res += 1;
}

ans = 10
do {
    // console.log(ans)
    ans -= 1
} while (ans > 0);


/////////////////////////////////////
//  Strings & String Methods

//              -5-4-3-2-1
let str1 = "Hello Everyone";
//0123456789.................. 
console.log(str1.length);

console.log(str1.charAt(4));

// Concatination
let str2 = "JavaScript" + " " + "Strings";
console.log(str2);

let str3 = "JavaScript".concat(" ", "Strings ", "Concat Method");
console.log(str3);

// Slicing the Strings
/*
    slice(start, end)     
    substring(start, end)
    substr(start, length)
*/

let str4 = "Akshay is a Software Engineer";

console.log(str4.slice(0, 6))
console.log(str4.slice(0))
console.log(str4.substring(12, 20))

console.log(str4.substr(12, 17))

console.log(str4.slice(-8, -1));
console.log(str4.slice(-8));


// Converting the Characters

let str5 = "harsha";
console.log(str5.toUpperCase());

let str6 = "UZWAL";
console.log(str6.toLowerCase());

// Trimming
let str7 = "    Coolie is releasing on August 14th     "
console.log(str7);

console.log(str7.trim());
console.log(str7.trimStart());
console.log(str7.trimEnd());


// Replacing
let str8 = "15th is a Holiday";

console.log(str8);

let new_str8 = str8.replace("15th", "14th");

console.log(new_str8);

let str9 = "Dogs are very cute animals. I love Dogs very much";

console.log(str9);

let new_str9 = str9.replaceAll("Dogs", "Cats");

console.log(new_str9)

// Searching in a String 
let str10 = "My Portfolio is ready";

console.log(str10.includes("Portfolio"));

console.log(str10.indexOf("Portfolio"));

console.log(str10.search("Portfolio"));

console.log(str10.match("ready"));


// Converting String to Array
let str11 = "JavaScript is a popular language. It is widely used"

console.log(str11, typeof (str11));
// ["JavaScript", "is", "a", "popular", "language"]

arr1 = str11.split("is")
console.log(arr1);

console.log(typeof (arr1));
