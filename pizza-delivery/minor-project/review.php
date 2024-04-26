<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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
           h1 {color:#ff9f0d;}
            
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
        <br>
<!----reviews---->
<section class="review" id="review">
    <div class="middle-text">
        <h1>Our Customer</h1>
        <h2>Clients Review About Our Food</h2>
    </div>

    <div class="review-content">
        <div class="box">
            <p>The Test is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo</p>
            <div class="in-box">
                <div class="bx-img">
                    <img src="img/r1.jpg">
                </div>
                <div class="bxx-text">
                    <h4>Johan Karahan</h4>
                    <h5>Food Vlogger</h5>
                    <div class="ratings">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>The Test is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo</p>
            <div class="in-box">
                <div class="bx-img">
                    <img src="img/r2.jpg">
                </div>
                <div class="bxx-text">
                    <h4>Johan Karahan</h4>
                    <h5>Food Vlogger</h5>
                    <div class="ratings">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>The Test is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo</p>
            <div class="in-box">
                <div class="bx-img">
                    <img src="img/r3.jpg">
                </div>
                <div class="bxx-text">
                    <h4>Johan Karahan</h4>
                    <h5>Food Vlogger</h5>
                    <div class="ratings">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </section>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="/pizza-delivery/minor-project/js/script.js"></script>
</body>
 </html>