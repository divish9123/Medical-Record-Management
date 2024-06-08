function generateUID() {
    const uid = Date.now().toString(36) + Math.random().toString(36).substr(2);
    document.getElementById('uid').innerText = uid;
}
function createAccount() {
    var username = document.getElementById('createUsername').value;
    var password = document.getElementById('createPassword').value;

    if (username && password) {
        localStorage.setItem('username', username);
        localStorage.setItem('password', password);
        alert('Account created successfully!');
        window.location.href = 'login.html';
    } else {
        document.getElementById('createError').innerText = 'Please enter both username and password';
    }
}