var loginForm = document.getElementById('login-form');
var userName = document.getElementById('username');
var usernameErr = document.getElementById('username-err');

userName.addEventListener('input', function (e) {

    // console.log(e.target.value);

    var regex = /^[\w]{8}$/;
    var currentValue = e.target.value;

    // console.log(currentValue);

    var res = regex.test(currentValue);

    // console.log(res);

    if (res) {
        usernameErr.style.display = 'none';
    }
    else {
        usernameErr.style.display = 'block';
    }

});