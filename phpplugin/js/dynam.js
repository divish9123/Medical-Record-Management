// const passwordInput = document.getElementById('password');
// const confirmPasswordInput = document.getElementById('confirm-password');

// function validatePassword() {
//     const password = passwordInput.value;
//     const confirmPassword = confirmPasswordInput.value;

//     if (password !== confirmPassword) {
//         confirmPasswordInput.setCustomValidity("Passwords don't match");
//     } else {
//         confirmPasswordInput.setCustomValidity('');
//     }
// }

// confirmPasswordInput.addEventListener('input', validatePassword);

// function myFunction(){
//     var x = document.getElementById("myInput")
//     var y = document.getElementById("hide1")
//     var z = document.getElementById("hide2")
//     if(x.type === 'password'){
//         x.type="text";
//         y.style.display="block";
//         z.style.display="none";
//     }
//     else{
//         x.type="password";
//         y.style.display="none";
//         z.style.display="block";
//     }
// }
function myFunction1(){
    var x = document.getElementById("confirmed")
    var y = document.getElementById("hide3")
    var z = document.getElementById("hide4")
    if(x.type === 'password'){
        x.type="text";
        y.style.display="block";
        z.style.display="none";
    }
    else{
        x.type="password";
        y.style.display="none";
        z.style.display="block";
    }
}
function login() {
    var username = document.getElementById('loginUsername').value;
    var password = document.getElementById('loginPassword').value;
    var storedUsername = localStorage.getItem('username');
    var storedPassword = localStorage.getItem('password');

    if (username === storedUsername && password === storedPassword) {
        alert('Login successful!');
    } else {
        document.getElementById('loginError').innerText = 'Invalid username or password';
    }
}
