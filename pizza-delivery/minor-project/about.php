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
    <section class="about" id="about">
    <div class="about-img">
        <img src="img/p-3.jpg" alt="">
    </div>
    <div class="about-text">
        <h2>Living well begins <br> with eating well.</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed ipsa facilis fuga! Accusamus blanditiis enim repellat rerum odit. Nam inventore fugit beatae omnis neque nihil dolore quisquam incidunt dicta, sunt itaque temporibus eaque voluptatum sapiente laboriosam <br> <br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, rerum saepe! Tempora eligendi possimus tempore minus distinctio. Aperiam, explicabo commodi harum quia molestias amet at labore pariatur, tempore autem maiores?</p>
        <a href="#" class="btn">Explore Story<i class='bx bxs-right-arrow' ></i></a>
    </div>
    </section>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="/pizza-delivery/minor-project/js/script.js"></script>
 </body>
 </html>