<?php
require 'config.php';

if(mysqli_connect_error())
{
    echo"<script>
            alert('Cannot connect to database');
            window.location.href='mycart.php';
        </script>;";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        $query1="INSERT INTO `user_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        
        if(mysqli_query($conn,$query1))
        {
            $Order_Id=mysqli_insert_id($conn);
            $query2="INSERT INTO `orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($conn,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                $total_without_gst = array_sum(array_map(function($item) {
                    return $item['Price'] * $item['Quantity'];
                }, $_SESSION['cart']));
                
                $cgst = $total_without_gst * 0.025;
                $sgst = $total_without_gst * 0.025;
                $total_with_gst = $total_without_gst + $cgst + $sgst;

                unset($_SESSION['cart']);
                echo"<script>
                alert('Order Placed. Total with GST: ₹" . $total_with_gst . "');
                window.location.href='index.php';
                </script>"; 

            }
            else
            {
                echo"<script>
                alert('SQL Query Prepare error');
                window.location.href='mycart.php';
                </script>";  
            }
        }
        else{
            echo"<script>
            alert('SQL error');
            window.location.href='mycart.php';
        </script>";

        }
    }

}

?>


































<?php
// require 'config.php';

// if(mysqli_connect_error())
// {
//     echo"<script>
//             alert('Cannot connect to database');
//             window.location.href='mycart.php';
//         </script>;";
//     exit();
// }

// if($_SERVER["REQUEST_METHOD"]=="POST")
// {
//     if(isset($_POST['purchase']))
//     {
//         $query1="INSERT INTO `user_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        
//         if(mysqli_query($conn,$query1))
//         {
//             $Order_Id=mysqli_insert_id($conn);
//             $query2="INSERT INTO `orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
//             $stmt=mysqli_prepare($conn,$query2);
//             if($stmt)
//             {
//                 mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
//                 foreach($_SESSION['cart'] as $key => $values)
//                 {
//                     $Item_Name=$values['Item_Name'];
//                     $Price=$values['Price'];
//                     $Quantity=$values['Quantity'];
//                     mysqli_stmt_execute($stmt);
//                 }
//                 unset($_SESSION['cart']);
//                 echo"<script>
//                 alert('Order Placed');
//                 window.location.href='index.php';
//                 </script>;"; 

//             }
//             else
//             {
//                 echo"<script>
//                 alert('SQL Query Prepare error');
//                 window.location.href='mycart.php';
//                 </script>;";  
//             }
//         }
//         else{
//             echo"<script>
//             alert('SQL error');
//             window.location.href='mycart.php';
//         </script>;";

//         }
//     }

// }

?>