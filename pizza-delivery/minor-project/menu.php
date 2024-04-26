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
            .middle-text{
                 text-align: center;
                 margin-top: 4rem; 
            }
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
        <a href="index.php" class="logo"><i class='bx bxs-home'></i>food</a>


        <ul class="navlist">
            <li><a href="#vegpizza" class="active">Veg Pizza</a></li>
            <li><a href="#nonvegpizza">Non Veg Pizza</a></li>
            <li><a href="#mania">Pizza Mania</a></li>
            <li><a href="#beverages">Sides & Beverages</a></li>
            <li><a href="#pasta">Pasta</a></li>
        </ul>
        <div class="nav-icons">
            
            <a href="#"><i class='bx bx-shopping-bag'></i></a>
            
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
    
    
<div id="vegpizza">
    <section class="shop" >
    <div class="middle-text">
        <h4>
           Our Menu
        </h4>
        <h2>Veg Pizza</h2>
    </div>
    <div class="shop-content">
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img\Margherit.jpg" alt="">
            <h3>Margherita</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, aliquid.</p>
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
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, minima.</p>

            <div class="in-text">
                <div class="price">
                    <h6>300Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Double cheese Margherita">
                <input type="hidden" name="Price" value="300">
                </form>
        </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Farmhouse.jpg" alt="">
            <h3>Farm House</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, earum?</p>
            <div class="in-text">
                <div class="price">
                    <h6>200Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Farm House">
                <input type="hidden" name="Price" value="200">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Peppy_Paneer.jpg" alt="">
            <h3>Peppy Paneer</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, culpa!</p>
            <div class="in-text">
                <div class="price">
                    <h6>100Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Peppy Paneer">
                <input type="hidden" name="Price" value="100">
                </form>
            </div>
            

            
        </div>
        
    </div>
    
</section>
<section class="shop">
    <div class="shop-content">
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img\Mexican_Green_Wave.jpg" alt="">
            <h3>Mexican Green Wave</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, eos!</p>
            <div class="in-text">
                <div class="price">
                    <h6>99Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Mexican Green Wave">
                <input type="hidden" name="Price" value="99">
                </form>
            </div>

           
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Deluxe_Veggie.jpg" alt="">
            <h3>Delux veggies</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, nam.</p>
            <div class="in-text">
                <div class="price">
                    <h6>500Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Delux veggies">
                <input type="hidden" name="Price" value="500">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Veg_Extravaganz.jpg" alt="">
            <h3>veg extravaganz</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, beatae.</p>
            <div class="in-text">
                <div class="price">
                    <h6>199Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="veg extravaganz">
                <input type="hidden" name="Price" value="199">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Corn_&_Cheese.jpg" alt="">
            <h3>cheese & corn</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, necessitatibus?</p>
            <div class="in-text">
                <div class="price">
                    <h6>349Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="cheese & corn">
                <input type="hidden" name="Price" value="349">
                </form>
            </div>
            

            
        </div>
        
    </div>
    
</section>
</div>

<div id="nonvegpizza">
    <section class="shop" >
    <div class="middle-text">
        <h4>
           Our Menu
        </h4>
        <h2>Non Veg Pizza</h2>
    </div>
    <div class="shop-content">
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img\pizzza.png" alt="">
            <h3>Chicken golden delight</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, aliquid.</p>
            <div class="in-text">
                <div class="price">
                    <h6>99Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Chicken golden delight">
                <input type="hidden" name="Price" value="99">
                </form>
            </div>

           
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/MicrosoftTeams-image_(13).png" alt="">
            <h3>Non veg supreme </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, minima.</p>

            <div class="in-text">
                <div class="price">
                    <h6>199Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Non veg supreme">
                <input type="hidden" name="Price" value="199">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/MicrosoftTeams-image_(11).png" alt="">
            <h3>Chicken Denominator</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, earum?</p>
            <div class="in-text">
                <div class="price">
                    <h6>349Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Chicken Denominator">
                <input type="hidden" name="Price" value="349">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Pepper_Barbeque_&_Onion (2).jpg" alt="">
            <h3>Pepper barbeque & Onion</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, culpa!</p>
            <div class="in-text">
                <div class="price">
                    <h6>299Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Pepper barbeque & Onion">
                <input type="hidden" name="Price" value="299">
                </form>
            </div>
            

            
        </div>
        
    </div>
    
</section>
<section class="shop">
    <div class="shop-content">
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/MicrosoftTeams-image_(15).png" alt="">
            <h3>Pepper barbeque Chicken</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, eos!</p>
            <div class="in-text">
                <div class="price">
                    <h6>199Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Pepper barbeque Chicken">
                <input type="hidden" name="Price" value="199">
                </form>
            </div>

           
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/MicrosoftTeams-image_(17).png" alt="">
            <h3>Chicken Sausage</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, nam.</p>
            <div class="in-text">
                <div class="price">
                    <h6>499Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Chicken Sausage">
                <input type="hidden" name="Price" value="499">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/MicrosoftTeams-image_(10).png" alt="">
            <h3>Chicken Fiesta</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, beatae.</p>
            <div class="in-text">
                <div class="price">
                    <h6>369Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Chicken Fiesta">
                <input type="hidden" name="Price" value="369">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/MicrosoftTeams-image_(18).png" alt="">
            <h3>Indi Chicken Tikka</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, necessitatibus?</p>
            <div class="in-text">
                <div class="price">
                    <h6>289Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Indi Chicken Tikka">
                <input type="hidden" name="Price" value="289">
                </form>
            </div>
            

            
        </div>
        
    </div>
    
</section>
</div>

<div id="mania">
    <section class="shop" >
    <div class="middle-text">
        <h4>
           Our Menu
        </h4>
        <h2>Pizza Mania</h2>
    </div>
    <div class="shop-content">
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img\z1.jpg" alt="">
            <h3>Veg Loaded</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, aliquid.</p>
            <div class="in-text">
                <div class="price">
                    <h6>99Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Veg Loaded">
                <input type="hidden" name="Price" value="99">
                </form>
            </div>

           
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/z2.jpg" alt="">
            <h3>Cheesy</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, minima.</p>

            <div class="in-text">
                <div class="price">
                    <h6>199Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Cheesy">
                <input type="hidden" name="Price" value="199">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/z3.jpg" alt="">
            <h3>Paneer & Onion</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, earum?</p>
            <div class="in-text">
                <div class="price">
                    <h6>449Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Paneer & Onion">
                <input type="hidden" name="Price" value="499">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/z4.jpg" alt="">
            <h3>capsicum</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, culpa!</p>
            <div class="in-text">
                <div class="price">
                    <h6>149Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="capsicum">
                <input type="hidden" name="Price" value="149">
                </form>
            </div>
            

            
        </div>
        
    </div>
    
</section>
<section class="shop">
    <div class="shop-content">
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/z5.jpg" alt="">
            <h3>Onion</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, eos!</p>
            <div class="in-text">
                <div class="price">
                    <h6>265Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Onion">
                <input type="hidden" name="Price" value="265">
                </form>
            </div>

           
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/z6.jpg" alt="">
            <h3>Golden corn</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, nam.</p>
            <div class="in-text">
                <div class="price">
                    <h6>239Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Golden corn">
                <input type="hidden" name="Price" value="239">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/z7.png" alt="">
            <h3>Cheese & Tomato</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, beatae.</p>
            <div class="in-text">
                <div class="price">
                    <h6>249Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Cheese & Tomato">
                <input type="hidden" name="Price" value="249">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/z8.png" alt="">
            <h3>Tomato</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, necessitatibus?</p>
            <div class="in-text">
                <div class="price">
                    <h6>299Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Tomato">
                <input type="hidden" name="Price" value="299">
                </form>
            </div>
            

            
        </div>
        
    </div>
    
</section>
</div>

<div id="beverages">
    <section class="shop" >
    <div class="middle-text">
        <h4>
           Our Menu
        </h4>
        <h2>Sides & Beverages</h2>
    </div>
    <div class="shop-content">
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img\e1.webp" alt="">
            <h3>Garlic Breadsticks</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, aliquid.</p>
            <div class="in-text">
                <div class="price">
                    <h6>99Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Garlic Breadsticks">
                <input type="hidden" name="Price" value="99">
                </form>
            </div>

           
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/e2.webp" alt="">
            <h3>Stuffed Garlic Bread</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, minima.</p>

            <div class="in-text">
                <div class="price">
                    <h6>199Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Stuffed Garlic Bread">
                <input type="hidden" name="Price" value="199">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/e3.webp" alt="">
            <h3>Chicken Pepperoni Stuffed Garlic Bread</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, earum?</p>
            <div class="in-text">
                <div class="price">
                    <h6>189Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Chicken Pepperoni Stuffed Garlic Bread">
                <input type="hidden" name="Price" value="189">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/e4.webp" alt="">
            <h3>Paneer Tikka Stuffed Garlic Bread</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, culpa!</p>
            <div class="in-text">
                <div class="price">
                    <h6>399Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Paneer Tikka Stuffed Garlic Bread">
                <input type="hidden" name="Price" value="399">
                </form>
            </div>
            

            
        </div>
        
    </div>
    
</section>
</div>

<div id="beverages">
    <section class="shop" >
    <div class="middle-text">
        <h4>
           Our Menu
        </h4>
        <h2>Sides & Beverages</h2>
    </div>
    <div class="shop-content">
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img\e1.webp" alt="">
            <h3>Garlic Breadsticks</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, aliquid.</p>
            <div class="in-text">
                <div class="price">
                    <h6>99Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Garlic Breadsticks">
                <input type="hidden" name="Price" value="99">
                </form>
            </div>

           
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/e2.webp" alt="">
            <h3>Stuffed Garlic Bread</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, minima.</p>

            <div class="in-text">
                <div class="price">
                    <h6>89Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Stuffed Garlic Bread">
                <input type="hidden" name="Price" value="89">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/e3.webp" alt="">
            <h3>Chicken Pepperoni Stuffed Garlic Bread</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, earum?</p>
            <div class="in-text">
                <div class="price">
                    <h6>69Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Chicken Pepperoni Stuffed Garlic Bread">
                <input type="hidden" name="Price" value="69">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/e4.webp" alt="">
            <h3>Paneer Tikka Stuffed Garlic Bread</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, culpa!</p>
            <div class="in-text">
                <div class="price">
                    <h6>79Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Paneer Tikka Stuffed Garlic Bread">
                <input type="hidden" name="Price" value="79">
                </form>
            </div>
            

            
        </div>
        
    </div>
    
</section>
</div>
<div id="pasta">
    <section class="shop" >
    <div class="middle-text">
        <h4>
           Our Menu
        </h4>
        <h2>Pasta</h2>
    </div>
    <div class="shop-content">
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img\f1.jpg" alt="">
            <h3>Moroccon Spice Pasta Veg</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, aliquid.</p>
            <div class="in-text">
                <div class="price">
                    <h6>69Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Moroccon Spice Pasta Veg">
                <input type="hidden" name="Price" value="69">
                </form>
            </div>

           
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/f2.jpg" alt="">
            <h3>Tika Masala Pasta Veg </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, minima.</p>

            <div class="in-text">
                <div class="price">
                    <h6>59Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Tika Masala Pasta Veg">
                <input type="hidden" name="Price" value="59">
                </form>
            </div>

            
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/f3.jpg" alt="">
            <h3>Creamy Tomato Pasta Veg</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, earum?</p>
            <div class="in-text">
                <div class="price">
                    <h6>79Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Creamy Tomato Pasta Veg">
                <input type="hidden" name="Price" value="79">
                </form>
            </div>

            
        </div>  
        </div>
        
    </div>
    
</section>
</div>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="/pizza-delivery/minor-project/js/script.js"></script>
</body>