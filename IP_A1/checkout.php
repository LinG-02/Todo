<html>
    <head>
        <title>checkout</title>
        <style type="text/css">
            
            fieldset {
                width:300px;
                margin:10px auto;
                padding:10px;
            }
            fieldset > input, select, meter {
                width: 100%;
                box-sizing: border-box;
                height: 30px;
                border-radius: 4px;
                border: none;
                border:1px solid #ccc;
            }
        </style>
    </head>
    <body>
        <table>
            <tr style="text-align:center width=100px"><td>Purchse Form</td></tr>
            <tr>
                <td>
               <form action="email.php" target="shopping_cart" class="form">
            <fieldset>
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>
            <label for="suburb">Suburb:</label>
            <input type="text" name="suburb" required><br>
            <label for="address">Address:</label>
            <input type="text" name="address" required><br>
            <label for="state">State:</label>
            <input type="text" name="state" required><br>
            <label for="country">Country:</label>
            <input type="text" name="country" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" required><br>
            <input type="submit" value="Payment">
            </fieldset>
         </form> 
            </td>
            </tr>
        </table>
        
        
    </body>
</html>