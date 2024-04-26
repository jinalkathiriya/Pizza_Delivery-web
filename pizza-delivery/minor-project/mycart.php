<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Bag</title>
    <link rel="stylesheet" href="css/style.css">
    <!-------------box icons------------>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- ---google fonts-- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        .row img {
            width: 100%;
            height: auto;
            transition: transform .50s ease;
            cursor: pointer;
            border-radius: 8rem;
        }

        button {
            border: none;
            background-color: var(--other-color)
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--bg-color);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .cart {
            width: 100%;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cart table {
            width: 100%;
            border-collapse: collapse;

        }

        .cart th,
        .cart td {
            padding: 12px;
            text-align: left;
        }

        .cart thead {
            background-color: var(--main-color);
            color: var(--bg-color);
        }

        .cart th {
            font-weight: bold;
        }

        .cart tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .cart .product-image {
            width: 100px;
        }

        .cart .quantity input {
            width: 40px;
            padding: 5px;
        }

        .cart .total {
            font-weight: bold;
        }

        .payment-options {
            margin-top: 20px;
            background-color: var(--text-color);
            padding-top: 1rem;
            color: var(--bg-color);
            border-radius: 1rem;
        }

        .payment-options h2 {
            margin-bottom: 10px;
        }

        .purchase-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: var(--main-color);
            color: var(--bg-color);
            border: none;
            border-radius: 3rem;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .purchase-button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {

            .cart th,
            .cart td {
                font-size: 14px;
                padding: 8px;
            }

            .cart .product-image {
                width: 60px;
            }

            .cart .quantity input {
                width: 30px;
                padding: 3px;
            }

        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .con {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .con {
                max-width: 100%;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- ----header--- -->
    <!-- Existing header -->
    <!-- ... -->

    <div class="middle-text" style="padding-top: 7rem;">
        <h4>your Order</h4>
        <h2>Enjoy The True Taste</h2>
    </div>

    <div class="container">
        <div class="cart">
            <table>
                <thead>
                    <tr>
                        <th>Serial No.</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $Sr = $key + 1;
                            echo "
                            <tr style='color: var(--bg-color);'>
                                <td>$Sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                <td>
                                    <form action='manage_cart.php' method='POST'>
                                        <input class='quantity iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='tel' style='text-align:center;' min='1' max='10' value='$value[Quantity]'>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                </td>
                                <td class='itotal'></td>
                                <td>
                                    <form action='manage_cart.php' method='POST'>
                                        <button name='Remove_Item' style='background-color: var(--main-color);font-size:var(--p2-font); padding:7px 14px;color:var(--bg-color);border-radius:1rem;'>Remove</button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="payment-options">
            <h2>Bill Section</h2>
            <h4>Total: <span id="gtotal"></span></h4>
            <h4>CGST (2.5%): <span id="cgst"></span></h4>
            <h4>SGST (2.5%): <span id="sgst"></span></h4>
            <h2>Total with GST: <span id="gtotal_with_gst"></span></h2><br>
            <?php
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            ?>
                <form action="purchase.php" method="POST">
                    <div class="con">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="full_name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone_no" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Address" required>
                        </div>
                        <label>
                            <input type="radio" name="pay_mode" value="COD" checked>
                            Cash on Delivery
                        </label>
                        <button class="purchase-button" name="purchase">Make Purchase</button>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');
        var cgst = document.getElementById('cgst');
        var sgst = document.getElementById('sgst');
        var gtotal_with_gst = document.getElementById('gtotal_with_gst');

        function subTotal() {
            gt = 0;
            for (i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;
            var gst = gt * 0.05;
            cgst.innerText = (gst / 2).toFixed(3);
            sgst.innerText = (gst / 2).toFixed(3);
            gtotal_with_gst.innerText = (gt + gst).toFixed(3)
        }

        subTotal();
    </script>
</body>

</html>