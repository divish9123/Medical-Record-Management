<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phn'];
        $email = $_POST['Email'];
        $password = $_POST['cpws'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'datastore';

        $conn = mysqli_connect($host, $user, $pass, $dbname);

        $sql = "INSERT INTO signup(name,phone,email,password) values('$name' , '$phone' , '$email', '$password')";
        mysqli_query($conn,$sql);
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Signup Page</title>
    <link rel="stylesheet" href="signup.css">
    <script src="sign.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>
    <div class="header">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">TASC</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="login.html" target="_blank">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="form-box">
        <label for="name">
            <h1>Signup Here</h1>
        </label>
        <form action="#" method="POST" class="login_form">
            <div class="input-box">
                <label for="name"><i class="fa fa-user"></i></label>
                <input type="text" name="name" id="name" placeholder="Name" required>
            </div>
            <div class="input-box">
                <label for="phn"><i class="fa fa-phone"></i></label>
                <input type="text" name="phn" id="phn" placeholder="Phone number" pattern="[6-9]{1}[0-9]{9}" required
                    maxlength="10">
            </div>
            <div class="input-box">
                <label for="email"><i class="fa fa-envelope-o"></i></label>
                <input type="email" name="Email" id="email" placeholder="Email ID"
                    pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
                <!-- <div id="email_error" class="input1">Please fill your Email ID</div> -->
            </div>
            <div class="input-box">
                <label for="myInput"><i class="fa fa-key"></i></label>
                <input type="password" id="myInput" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    placeholder="Create Password" required>
                <span class="eye" onclick="myFunction()">
                    <i id="hide1" class="fa fa-eye"></i>
                    <i id="hide2" class="fa fa-eye-slash"></i>
                </span><br>
                <!-- <div id="pass_error" class="input1">Please fill your Password</div> -->
            </div>
            <div class="input-box">
                <label for="confirmed"><i class="fa fa-key"></i></label>
                <input id="confirmed" type="password" name="cpws"placeholder="Confirm Password" required>
                <span class="eye" onclick="myFunction1()">
                    <i id="hide3" class="fa fa-eye"></i>
                    <i id="hide4" class="fa fa-eye-slash"></i>
                </span>
                <!-- <div id="cpass_error" class="input1">Please confirm your Password</div> -->
            </div>
            <input type="submit"  name="submit" class="login-btn" value="Send Data">
            <div class="Signup">
                <span>Already have an account? </span>
                <a href="login.html" name="Signup" target=”_blank”>
                    <label for="Signup">Log in</label>
                </a>

            </div>
        </form>
    </div>
</body>

</html>