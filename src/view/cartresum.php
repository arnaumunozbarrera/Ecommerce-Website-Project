<div id="cartResumContainer" class="smallContainer cartPage">
        <table>
            <tr id="title">
                <th>Products</th>
                <th>Quantity</th>
            </tr>
            <?php
            $totalPrice = 0; 
            foreach ($_SESSION['carrito'.$name] as $productid => $productDetails) { 
                # Para que el precio total salga con el formato correcto
                $priceString = str_replace(['.', '€', ' '], ['', '', ''], $productDetails['price']);
                $priceNumeric = floatval(str_replace(',', '.', $priceString));
                
                $totalPrice += $priceNumeric * $productDetails['quantity'];
            ?>
                <tr>
                    <td>
                        <div class="cartInfo">
                            <img id="prodIMG" src="<?php echo $productDetails['img'];?>" alt="Item img">
                            <div id="text">
                                <p><?php echo $productDetails['name'].", ".$productDetails['brand']; ?></p>
                                <small>Price: <?php echo $productDetails['price'];?></small> 
                                <br/>
                                <a id="removeitem" onclick="console.log('Clicked:', 'removeitem', <?php echo $productid; ?>); refreshCartResum('removeitem', <?php echo $productid; ?>)">Remove item</a>
                            </div>
                        </div>
                    </td>
                    <td ><input type="text" value="<?php echo $productDetails['quantity']; ?>" id="quantity" onchange="console.log('Changed:', 'modifyquant', <?php echo $productid; ?>, this.value); modifyQuantity('modifyquant', <?php echo $productid; ?>, this.value)"></td>
                </tr>
            <?php } ?>
        </table>
        <!-- <hr/> -->
        <br/>
    <div class="totalPrice">
        <table>
            <tr>
                <td class="row">Total</td>
                <td class="row">€<?php echo number_format($totalPrice, 2, ',', '.'); ?></td>
            </tr>
        </table>
    </div>
    <div class="btn2">
        <button class="cancel">
            <a href="?action=deletecart">Delete All</a> 
        </button>
        <button class="save">
            <a href="?action=confirm">Confirm</a> 
        </button>
    </div>
    <form class="account2" action="index.php?action=" method="POST">
        <button class="cancel2" href="?action=">Go back to home</button>
    </form>
</div>