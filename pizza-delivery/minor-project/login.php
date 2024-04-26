<?php
require 'config.php';
if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn,"SELECT *FROM regilog WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }
        else{
            echo 
            "<script>alert('Wrong Password');</script>";
        }

    }
    else{
        echo 
        "<script>alert('User not Registered');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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

        .forgot-password {
            margin-top: 4px;
            text-align: right;
            font-size: 12px;
            margin-top: 10px;
        }
        .forgot-password a{
            display: inline-block;
            
            font-size: var(--p-font);
            font-weight: 500;
            letter-spacing: 1px;
            border-bottom: 3px solid var(--main-color);
            color: var(--main-color);
            transition: all .50s ease;
            text-decoration: none;
        }
        .forgot-password a:hover{
            transform: scale(1.1) translateX(12px);

        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            color: var(--text-color);
        }

        .signup-link a {
            display: inline-block;
            
            font-size: var(--p-font);
            font-weight: 500;
            letter-spacing: 1px;
            border-bottom: 3px solid var(--main-color);
            color: var(--main-color);
            transition: all .50s ease;
            text-decoration: none;
        }
        .signup-link a:hover{
            transform: scale(1.1) translateX(12px);

        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="usernameemail">Username or Email</label>
                <input type="text" id="usernameemail" name="usernameemail" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
        <div class="forgot-password">
            <a href="forgotpassword.php">Forgot password?</a>
        </div>
        <div class="signup-link">
            Don't have an account? <a href="registration.php">Sign up</a>
        </div>
    </div>
</body>
</html>
