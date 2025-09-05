var str = "This is a black pen. This pen is really smooth. It is a parker PEN."

var regex = /pen/gi;

var regex = new RegExp('pen', 'gi');

// console.log(str.search(regex));
// console.log(str.match(regex));
// console.log(regex.test(str));

/////////////////////////////////////////////

var str = "9132104587";

var pattern = /^[0-9]{10}$/g;

var str = "919632104587";

var pattern = /^(91)?[0-9]{10}$/g;

var str = "+919632104587";

var pattern = /^(\+91)?[0-9]{10}$/g;

var str = "www.w3schools.com";

var pattern = /^www\.[\w]+\.com$/g;

var str = "www.netflix.in";
var str = "www.google.co";

var pattern = /^www\.[\w]+\.(com|co|in)$/g;

console.log(str.match(pattern));