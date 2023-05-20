<!DOCTYPE html>
<html>
    <head>
        <title>items</title>
        <link rel="stylesheet" href="css/product.css" />
    </head>
    <body>

        <table class='table'>
            <tr><th>Item Detial</th></tr>


        <?php

        $link = mysqli_connect('aa14qngcpq4t05o.ckqxpnb21ahg.us-east-1.rds.amazonaws.com','index','mysql', 'assignment1') or die("Error: Could not connect to Server");

        $product_id = $_GET['product_id'];
        $query_string = "select * from products where product_id = $product_id;";
        $result = mysqli_query($link, $query_string);
        $num_rows = mysqli_num_rows($result);



        if($num_rows > 0){
            while ( $row = mysqli_fetch_assoc($result)){
                 $id = $row["product_id"];
                 $product_name = $row["product_name"];
                 $unit_price = $row["unit_price"];
                 $unit_quantity = $row["unit_quantity"];
                 $in_stock = $row["in_stock"];

                echo "<tr><td>Product name:</td>";
                echo "<td>".$product_name."</td></tr>";


                echo "<tr><td>Unit price:</td>";
                echo "<td>".$unit_price."</td></tr>";


                echo "<tr><td>Unit quantity:</td>";
                echo "<td>".$unit_quantity."</td></tr>";


                echo "<tr><td>In stock:</td>";
                echo "<td>".$in_stock."</td></tr>";


            }
            echo "<tr><td><img src='Item_Image/$product_id.png' width='130px'></td></tr>";


        }


        ?>
      </table>
      <form action="shopping_cart.php" method="POST" target="shopping_cart">
          <lable for="Amount" style="font-weight:bold">Quantity:</label>
            <input type="number" name="Amount" min="1" max="20">
            <input type="hidden" name="ID" value="<?php echo $product_id;?>">
            <input type="hidden" name="Name" value="<?php echo $product_name;?>">
            <input type="hidden" name="Price" value="<?php echo $unit_price;?>">
            <input type="hidden" name="Quantity" value="<?php echo $unit_quantity;?>">
            <input type="submit" class="button" value="Add">
      </form>

    </body>



</html>
