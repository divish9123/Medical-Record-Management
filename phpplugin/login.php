<?php
    $connect=mysqli_connect("localhost","root","","datastore") or die("Connection Failed");
    if(!empty($_POST['save']))
    {
        $name=$_POST['un'];
        $password=$_POST['psw'];
        $query="select * from login where un='$name' and psw='$password'";
        $result=mysqli_query($connect,$query);
        $count =  mysqli_num_rows($result);
        if($count>0)
        {
         echo "Login Successful";
        }
        else
        {
          echo "Login not Successful";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Login Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="dynam.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
</head>

<body>
    <!-- <div class="header">
        <a href="#default" class="logo">DASK-2520T</a>
        <div class="header-right">
            <a href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a class="active" href="#login">Login</a>
        </div>
        <div class="header-center">
            <a class="title" href="#tasc">TASC</a>
            <a href="#default">sample quotation</a>
        </div>
    </div> -->
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
            <h1>Login Here</h1>
        </label>
        
        <form action="sign.php" method="POST" class="login_form">
            <div class="input-box">
                <label for="un"><i class="fa fa-circle-user"></i></label>
                <input type="text" name="un" id="un" placeholder="Username" required>
            </div>
            <div class="input-box">
                <label for="myInput"><i class="fa fa-key"></i></label>
                <input type="password" id="myInput" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                placeholder="Password" required>
                <span class="eye" onclick="myFunction()">
                    <i id="hide1" class="fa fa-eye"></i>
                    <i id="hide2" class="fa fa-eye-slash"></i>
                </span><br>
                <!-- <div id="pass_error" class="input1">Please fill your Password</div> -->
            </div>
            <button type="submit" class="login-btn">Log in</button>
            <div class="Signup">
                <span>Doesn't have an account? </span>
                <a href="signup.php" name="Signup" target=”_blank”>
                    <label for="Signup">Sign Up</label>
                </a>
                
            </div>
        </form>
    </div>
</body>

</html>