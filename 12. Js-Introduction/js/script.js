// Js Outputs
/*
    1) console.log
    2) alert()
    3) document.write()
    4) .innerHTML
*/

// console.log("hello, this is console.log");
// alert("Hello, this is alert");
// document.write("Hello, I am document.write()")
document.getElementById("hello").innerHTML = "Hello Everyone! Welcome to JS"

// Js Identifiers
/*
    1) A-Z, a-z
    2) $
    3) _
    4) It can contain numbers but shouldn't start with numbers
*/

Name = "Bharath"
// console.log(Name);

// Js Variables
/*
    1) var
    2) let
    3) const
*/

var num1 = 1;
var num2 = 2;

let num3 = 3;
let num4 = 4;

const pi = 3.14;

// redeclaration & re-assignment

// 1. var
var name1 = "Harsha"
name1 = "Krishna"

// console.log(name1)

var name1 = "Bharath"
// console.log(name1)

// 2. let
let name2 = "Lokesh"
name2 = "Shafi"

// console.log(name2);

// name2 = "Avinash";

// console.log(name2)

// 3. const
const a = 3.14
// a = 3.15

// console.log(a)

/*
        re-declaration   re-assignment
var        yes               yes
let         no               yes
const       no               no
*/


/*
    Scope of a Variable:
    -> 1) Functional / Global
    -> 2) Block Scope
*/

// let n1 = 10;
// console.log(n1);
// {
//     let n1 = 11;
//     console.log(n1);
// }
// console.log(n1)

// var n2 = 10;
// console.log(n2);
// {
//     let n2 = 11;
//     console.log(n2);
// }
// console.log(n2)

// var n3 = 10;
// console.log(n3);
// {
//     var n3 = 11;
//     console.log(n3);
// }
// console.log(n3)

// let n4 = 20;
// console.log(n4)
// {
//     let n4 = 25;
//     console.log(n4);
// }
// console.log(n4)

// var - Global Scope
// let, const - Block Scope

// Js Operators
/*
    1) Airthmetic - (+, -, *, /, %, **)
    2) Assignment - (=, +=, -=, *=, /=, %=, **=) 
    3) Comparison - (<, >, <=, >=, ==, !=, ===, !==)
    4) Logical - ( &&, ||, !)
    5) Bitwise - (&, |, ~, ^, <<, >>, >>>)
    6) Typeof - (typeof(), instanceof())
    7) Ternary - (? :)
*/

var n1 = 5
var n2 = 4
// console.log(n1 ** n2)

// Operator Precedence - BEDMRAS

// console.log(5 + 4 - 2 * 7 / (8 % 3) ** 3)

// 5 + 4 - 2 * 7 / (2 ** 3)
// 5 + 4 - 2 * (7 / 8)
// 5 + 4 - (2 * 0.875)
// (5 + 4) - 1.75
// (9 - 1.75)
// 7.25

// var n1 = n1 + 10
n1 += 10
// console.log(n1)

x1 = 500
x2 = "500"

// console.log(x1 == x2)
// console.log(x1 === x2)

// type coersion: implicit conversion of datatype done by '=='

x3 = 100
x4 = "100"
// console.log(x3 != x4)
// console.log(x3 !== x4)

if (x3 < 200 || x3 > 100) {
    // console.log("yes")
}
else {
    // console.log("no")
}

// console.log(!(x3 < 200))

// console.log(2 & 3);
/*
    2 - 0010
    3 - 0011
  2&3 - 0010 (2)
*/

// console.log(2 | 3);
/*
    2 - 0010
    3 - 0011
  2&3 - 0011 (3)
*/

// console.log(2 ^ 3);
/*
    2 - 0010
    3 - 0011
  2&3 - 0001 (1)
*/

// console.log(7 >> 1);
/*
    7 - 011 1 ==> 0011 (3)
*/

n = 100
s = "Uzwal"
fruits = ['apple', 'banana']

// console.log(typeof (n))
// console.log(typeof (s))
// console.log(typeof (fruits))

// if (n != 100) {
//     console.log("no, wrong statement")
// }
// else {
//     console.log("n is 100")
// }

// (n != 100) ? console.log("no, wrong statement") : console.log("n is 100")


// Js Data Types
/*
    A) Primitive Data Types
    1) String  - single word, group of words
    2) Number  -  Js has no double, float
    3) BigInt  - for large range of numbers
    4) Boolean - true/false
    5) Undefined - variable is declared but not assigned with any value
    6) NULL   - variable is assigned with NULL value

    B) Non-Primitive Data Types
    7) Object
        An Object
        An Array
        A Date
        Functions

*/

var str = "Today is JS - Day 01"
// console.log(str)

var num = 3.1456
// console.log(typeof (num))

// var undefined_example;
// console.log(undefined_example);
// console.log(typeof (undefined_example));

var x;
// console.log(x)
// console.log(typeof (x))

var y = null;
// console.log(y)
// console.log(typeof (y))

// Exponential Notation
num1 = 1234e5    // 123400000
num2 = 1234e-5   // 0.01234

console.log(num1)
console.log(num2)