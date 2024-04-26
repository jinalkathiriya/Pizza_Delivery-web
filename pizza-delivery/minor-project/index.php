<?php
require 'config.php';

if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM regilog WHERE id= $id");
    $row = mysqli_fetch_assoc($result);

}
else{
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food ordering website</title>
    <link rel="stylesheet" href="css/style.css">
    <!-------------box icons------------>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- ---google fonts-- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        .row img{
                width: 100%;
                height: auto;
                transition: transform .50s ease;
                cursor: pointer;
                border-radius: 8rem;
            }
            button{
                border: none;
                background-color: var(--other-color);
                border-radius: 3rem;
            }
            
    </style>
</head>


<body>
    
    <!-- ----header--- -->
    <header>
        <a href="#" class="logo"><i class='bx bxs-home'></i>food</a>


        <ul class="navlist">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="ourshop.php">Menu</a></li>
            <li><a href="review.php">Our Cutomer</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="nav-icons">
            
            <a href="mycart.php"><i class='bx bx-shopping-bag'></i></a>
            
            <div class="dropdown">
                <a class="sign_btn" href="#"><i class='bx bx-user-circle'></i></a>
                <div class="dropdown-menu">
                <a href="logout.php" class="dropdown-item">Logout</a>
                <a href="registration.php" class="dropdown-item">Register</a>
                
                </div>
            </div>
            
             <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    
    <!-- --home-- -->
    <section class="home" id="home">
    <div class="home-text">
        <h1>Meet, <span>Eat &</span> <br>Enjoy The true <br>taste</h1>
        <a href="menu.php" class="btn">Explore Menu<i class='bx bxs-right-arrow' ></i></a>
        <a href="menu.php" class="btn2">Order Now</a>

    </div>
    

    <div class="home-img">
        <img src="img/p-2.jpg" alt="">
    </div>
</section>
<!----container---->
<section class="container">
    <div class="container-box">
        <img src="img/c1.png" alt="">
        <h3>11:00 am - 8:00 pm</h3>
        <a href="#">Working Hours</a>
    </div>
    <div class="container-box">
        <img src="img/c2.png" alt="">
        <h3>Honey Springs</h3>
        <a href="#">Get Directions</a>
    </div>
    <div class="container-box">
        <img src="img/c3.png" alt="">
        <h3>(555) 111-345345</h3>
        <a href="#">Call Us Now</a>
    </div>
</section>
<!----about us---->

<!----our shop---->



<!--scroll gap-->
<a href="#" class="scroll">
    <i class='bx bx-up-arrow-alt'></i>
</a>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="/pizza-delivery/minor-project/js/script.js"></script>
</body>

</html>