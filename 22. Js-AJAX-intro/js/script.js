var xhr = new XMLHttpRequest();

xhr.open('GET', 'https://jsonplaceholder.typicode.com/users', true);

// xhr.open('GET', 'https://jsonplaceholder.typicode.com/comments', true);

xhr.onload = function(){

    if(xhr.status === 200){
        var response = xhr.responseText;
        console.log(response);
    }
    else{
        console.log("Error " + xhr.status);
    }
};

xhr.send();