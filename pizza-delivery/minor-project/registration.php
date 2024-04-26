<?php
require 'config.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn,"SELECT * FROM regilog WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo 
        "<script>alert('Use+rname or Email Has Already Taken');</script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO regilog VALUES('','$name','$username','$email','$password')";
            
            mysqli_query($conn,$query);
            echo 
            "<script>alert('Registration successful');</script>";

        }
        else{
            echo 
            "<script>alert('Password does not match');</script>";
        }
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        :root{
            --main-color: #ff9f0d;
            --text-color: #fff;
            --other-color: #212121;
            --second-color: #9e9e9e;
            --bg-color: #111111;

            --big-font: 4.5rem;
            --h2-font:2.6rem;
            --p-font:1.1rem;

        }
        body {
            font-family: Arial, sans-serif;
            background-color: var(--bg-color);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            padding-right:40px;
            background-color: var(--bg-color);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            font-size: var(--h2-font);
            color: var(--main-color);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: var(--p-font);
            color: var(--main-color);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            display: inline-block;
            padding: 15px 35px;
            background-color: var(--other-color);
            color: var(--main-color);
            font-size: var(--p-font);
            font-weight: 500;
            border: none;
            letter-spacing: 1px;
            border-radius: 3rem;
            transition: all .50s ease;
        }

        button:hover {
            background: var(--main-color);
            color: var(--bg-color);
            box-shadow: #ff9f0d 0px 1px 25px;
        }

        .terms {
            text-align: center;
            font-size: 12px;
            margin-top: 15px;
        }

        .terms a {
            color: #007BFF;
        }
        .btn2{
            display: inline-block;
            
            font-size: var(--p-font);
            font-weight: 500;
            letter-spacing: 1px;
            border-bottom: 3px solid var(--main-color);
            color: var(--main-color);
            transition: all .50s ease;
        }
        .btn2:hover{
            transform: scale(1.1) translateX(12px);

        }
    </style>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Registration</h2>
        <form action="#" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" id="confirmpassword" name="confirmpassword" required>
            </div>
            <button type="submit" name="submit">Register</button>
        </form>
        <br>
        <a href="login.php" class="btn2">Login</a>
    </div>
</body>
</html>
