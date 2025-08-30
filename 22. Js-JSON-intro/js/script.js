// Object
var mObj = {
    "name": "Yatheswar",
    "age": 24
}

// console.log(mObj);
// console.log(mObj.age);

// Array
var mArr = [1, 2, 3, 4, 5]
// console.log(mArr);
// console.log(mArr[0]);

var card = {
    "id": '',
    "title": '',
    "description": '',
    "category": '',
    "image": '',
    "blog-url": ''
}

// JSON
var mJson = [
    {
        "name": "Yatheswar",
        "age": 24
    },
    {
        "name": "Harsha",
        "age": 21
    },
    {
        "name": "Akash",
        "age": 21
    }
]

// console.log(mJson);
// console.log(mJson[2]);

// ==> JSON doesn't hold undefined, functions and date it's just simply ignore them.

var mJson = [
    {
        "name": "Yatheswar",
        "age": 24,
        "lastName": undefined
    },
    {
        "name": "Harsha",
        "age": 21,
        getName: function () {
            return this.name
        }
    },
    {
        "name": "Akash",
        "age": 21
        // "date": 21-07-2025,
    }
]

// console.log(mJson);

// console.log(JSON.stringify(mJson));

// ==> JSON accepts string, number, object, array, boolean, null

var mJson = [
    {
        "name": "Yatheswar",
        "age": 24,
        "marriage": false
    },
    {
        "name": "Harsha",
        "age": 21,
        score: [87, 90, 75, 87],
        "bike": null
    },
    {
        "name": "Akash",
        "age": 21,
        score: {
            "C": 87,
            "Java": 78,
            "M1": 88
        }
    }
]

console.log(mJson);

var string_mJson = JSON.stringify(mJson)

console.log(string_mJson);

var parse_mJson = JSON.parse(string_mJson);

console.log(parse_mJson);

console.log(parse_mJson[0]);
console.log(parse_mJson[1].score);