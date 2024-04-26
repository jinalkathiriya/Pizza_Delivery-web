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
            h1{
                color: #ff9f0d;;
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
        <section class="shop" id="shop">
    <div class="middle-text">
        <h1>
          Menu
        </h1>
        <h2>Lets Check Popular Products</h2>
    </div>
    <div class="shop-content">

    
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img\Margherit.jpg" alt="">
            <h3>Margherita</h3>
            <p>A hugely popular margherita, with a deliciously tangy single cheese topping</p>
            <div class="in-text">
                <div class="price">
                    <h6>499Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Margherita">
                <input type="hidden" name="Price" value="499">
                </form>
            </div>

           
        </div>
    
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Double_Cheese_Margherita.jpg" alt="">
            <h3>Double cheese Margherita </h3>
            <p>The ever-popular Margherita - loaded with extra cheese... oodies of it!</p>
            <div class="in-text">
                <div class="price">
                    <h6>300Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Double cheese Margherita">
                <input type="hidden" name="Price" value="300">
            </div>

            </form>
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Farmhouse.jpg" alt="">
            <h3>Farm House</h3>
            <p>A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes
            <div class="in-text">
                <div class="price">
                    <h6>200Rs.</h6>
                </div>
                <button type="submit"  name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Farm House">
                <input type="hidden" name="Price" value="200">
            </div>

            </form>   
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Peppy_Paneer.jpg" alt="">
            <h3>Peppy Paneer</h3>
            <p>Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful!</p>
            <div class="in-text">
                <div class="price">
                    <h6>100Rs.</h6>
                </div>
                <a hre<button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Bag 4">
                <input type="hidden" name="Price" value="100">
            </div>
            

            </form>   
        </div>
        
    </div>
    <div class="row-btn">
        <a href="menu.php" class="btn">All products<i class='bx bxs-right-arrow' ></i></a>
    </div>
</section>
   
  
    
<script src="https://unpkg.com/scrollreveal"></script>
<script src="/pizza-delivery/minor-project/js/script.js"></script>
 </body>
 </html>