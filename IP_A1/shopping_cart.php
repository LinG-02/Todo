<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="css/cart.css" />
    </head>
    <body>
        <?php
            session_start();
            $cart = $_SESSION['cart'];
            $ID = $_REQUEST['ID'];
            $name = $_REQUEST['Name'];
            $price = $_REQUEST['Price'];
            $quantity = $_REQUEST['Quantity'];
            $amount = $_REQUEST['Amount'];

            if(!empty($amount)){
                if(empty($cart)){
                    $cart[$ID] = array("ID" => $ID, "Name" => $name, "Price" => $price, "Quantity" => $quantity, "Amount" => $amount);
                    $_SESSION['cart'] = $cart;
                }

                elseif(!array_key_exists($ID,$cart)){
                    $cart[$ID] = array("ID" => $ID, "Name" => $name, "Price" => $price, "Quantity" => $quantity, "Amount" => $amount);
                    $_SESSION['cart'] = $cart;
                }

                elseif(!empty($amount)){
                    $cart[$ID]['Amount'] = $cart[$ID]['Amount'] + $amount;
                    $_SESSION['cart'] = $cart;
                }
            }

            if(empty($cart)){
                if(empty($amount)){
                    echo "<p>Result: No Products Were Found</p>";
                }
            }
        ?>
        <table class="table1">
            <tr>
                <th colspan="6">Shopping Cart</th>
            </tr>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Unit Quantity</th>
                <th>Product Amount</th>
                <th>Value</th>
                <th>Clear Item</th>
            </tr>

            <?php
                $total = 0;
                if(isset($cart)){
                    foreach($cart as $item){
                        echo "<tr>";
                        echo "<td>".$item['Name']."</td>";
                        echo "<td>".$item['Price']."</td>";
                        echo "<td>".$item['Quantity']."</td>";
                        echo "<td>".$item['Amount']."</td>";
                        echo "<td>AUD$".($item['Price']*$item['Amount'])."</td>";
                        echo "<td><button class='button1'><a href='clear.php?ID={$item['ID']}'>Clear</a></button></td>";
                        echo "</tr>";
                        $sum += $item['Price']*$item['Amount'];
                    }
                }
            ?>
        </table>
        <table class="table2">
            <tr>
               <td>Total</td>
                <td colspan="3">A$<?php echo $sum;?></td>
                <td></td>
                <td>
                    <form action="clear.php">
                        <input type="submit" class="button2" value="Empty Shopping Cart">

                    </form>
                </td>
                <td>
                    <form action="checkout.php" target="item_detail">
                        <input type="submit" class="button3" value="Checkout">
                    </form>
                </td>
            </tr>
        </table>

    </body>
</html>
