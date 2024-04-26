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
        <br>
        <br>
        <!--Contact-->
<section class="contact" id="contact">
    <div class="contact-content">
        <div class="contact-img">
            <div class="c-one">
                <img src="img/f1.png" alt="">   
            </div>
            <div class="c-one">
                <img src="img/f2.png" alt="">   
            </div>
        </div>
        <div class="contact-text">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus est fuga culpa saepe modi, aperiam voluptas vitae dolores quo unde rerum dolorem eum ipsum, earum, temporibus eaque sit laborum quisquam ipsam officiis nobis fugiat.</p>
            <div class="social">
                <a href="#" class="clr"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-google' ></i></a>
            </div>

        </div>

        <div class="details">
            <div class="main-d">
                <a href="#"><i class='bx bxs-location-plus' ></i>Main stree 65,ny, ny</a>
            </div>

            <div class="main-d">
                <a href="#"><i class='bx bx-mobile-alt'></i>01646895741</a>
            </div>

            <div class="main-d">
                <a href="#"><i class='bx bxl-youtube' ></i></i>Tahmid Ahmed</a>
            </div>

            <div class="main-d">
                <a href="#"><i class='bx bxs-bell'></i>Subscribe</a>
            </div>

        </div>
    </div>
</section>

        <script src="https://unpkg.com/scrollreveal"></script>
<script src="/pizza-delivery/minor-project/js/script.js"></script>
<!--scroll gap-->
<a href="#" class="scroll">
    <i class='bx bx-up-arrow-alt'></i>
</a>
    </body>
 </html>