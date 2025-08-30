// Js Objects
/*
    Objects are used to store data/methods in key:value pairs
    Objects are used to represent and group related data and behaviour in a structured way.
    Non-Primitive Datatype
    key:value pairs (property)
*/

///////////// Creating Objects //////////////// 
/* 3 Ways to create Objects

    1. Using Object Literal
    2. Create Empty Object and then Add Properties
    3. Using new keyword
*/

// 1st Method (Using Object Literal)
const info1 = {
    name: "Yatheswar",
    age: 23,
    email: "yathe@gmail.com"
};

// console.log(info1)

// 2nd Method (Create Empty Object and then Add Properties)
const info2 = {};

// console.log(info2)

// object_name.key = value
info2.name = "Yassaswini";

// console.log(info2)

info2.age = 23;
info2.email = "yassaswini@gmail.com"

// console.log(info2)

// 3rd Method (Using new keyword)

const info3 = new Object();

// console.log(info3)

info3.name = "SreeRam"
info3.age = 24
info3.email = "sreeram@gmail.com"

// console.log(info3)

///////////// Add Properties ////////////////

info3.eyeColor = "black"
info3["occupation"] = "Designer"
info3["Salary"] = 50000

///////////// Modify Objects ////////////////

info3.occupation = "Editor"
info3["Salary"] = 60000

// console.log(info3)

///////////// Accessing Objects ////////////////

// console.log(info3.name)
// console.log(info3["occupation"])

// to get "keys" of an Object : Object.keys(obj_name);
// console.log(Object.keys(info3));

// to get "values" of an Object : Object.values(obj_name);
// console.log(Object.values(info3));

///////////// Delete in Objects ////////////////

delete info3.eyeColor; // delete entire property

delete info3["age"];

// console.log(info3)

// info3 = null;

// We cannot delete entire object directly but we can assign the object with null/undefined values.

let info4 = {
    name: "Harsha",
    age: 21,
    designation: "student"
};

// console.log(info4);

info4 = null;

// console.log(info4)

///////////// has Own Property ////////////////

// hasOwnProperty - it is a method to check if the property is present or not

// console.log(info3.hasOwnProperty("name"));

// console.log(info3.hasOwnProperty("address"));

//////////// Object Keys //////////////

/*
    Js Object keys can't be Numbers
                            Boolean
                            Null
                            Undefined

    They are converted to Strings
*/

const info5 = {
    name: "Bharath",
    21: 21,
    designation: "student",
    college: "Veltech",
    true: null
};

// console.log(info5)

/*
{
    "name": "Bharath",
    "21": 21,
    "designation": "student",
    "college": "Veltech"
    "true":"null"
};
*/

//////////// Object Methods //////////////

/* Js Method is a function that is stored as a "property"
    of an object,
    It is used to define the behaviour or action that 
    the object can perform
*/

const name = {
    fname: "Yatheswar",
    lname: "Ethalapaka",

    fullName1: function () {
        // return fname + " " + lname;
        return this.fname + " " + this.lname;
    },

    fullName2: function (firstName, lastName) {
        return firstName + " " + lastName;
    }

};

// console.log(name.fullName1());

// console.log(name.fullName2("Yathe", "Eswar"))


//////////// Nested Objects //////////////

/*  Creation

    const obj1 = {
    
        key1 : value1,
        key2 : value2,

        obj2 : {

            key3: value3,
            key4: value4
        
        }
    }

*/

const student1 = {

    name: "Krishna",
    age: 21,

    student2: {
        name: "Madhusudhan",
        age: 21,

        student3: {
            name: "Lokesh",
            age: 21
        }
    },

    college: "Veltech"

}

// console.log(student1);

/* Accessing

    obj1["key"],

    obj1["obj2"]["key"],

    obj1.obj2.key;

*/

// console.log(student1.name);

// console.log(student1.student2.name);

// console.log(student1["student2"]["student3"]["name"]);

//////////// Object Destructuring //////////////

/*
    Unpack the properties (key:value pairs) and store it in
    different individual variables
*/

const book = {

    title: "IKIGAI",
    author: "Hector Garcia",
    year: 2024,
    genre: "Motivation",
    publishedBy: "Tuttle"

};

// console.log(book.title);

let { title, year, author, genre, publishedBy } = book;
// Order is not important

// console.log(title);

// console.log(author);

// console.log(year);

// console.log(publishedBy);

let { title: x1, year: x2, author: x3,
    genre: x4, publishedBy: x5 } = book;

// console.log(x4);

// console.log(x1);

////////////// typeof() ///////////////////////

let str1 = "Web Development"

let arr1 = [1, 2, 3, 4, 5, 6]

const employee = {
    name: "Shafi",
    designation: "Software Employee"
}

console.log(typeof (str1));

console.log(employee);
console.log(typeof (employee));

console.log(arr1);
console.log(typeof (arr1));

// The commonality of array & object are "key:value" pairs.

////////// "const" in Objects /////////////////

/*
    "const" keywords doesn't apply to objects.
    Because objects are "mutable".

    It only prevents the "reassignment";

*/
