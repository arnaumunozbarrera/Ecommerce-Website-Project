<div class="cart" id="cart">
    <nav class="cartBar" id="cart-Nav">        
        <ul class="cartInfoLeft">
            <li><a>Shopping List</a></li>
        </ul>

        <ul class="cartInfoCenter">
            <li><a>Product Quantity: <?php if(isset($cartQuantity)) echo $cartQuantity; ?> </a></li>
            <li><a>Total Amount: <?php if(isset($totalAmount)) echo $totalAmount."€"; ?> </a></li>
        </ul>

        <ul class="cartInfoRight">
            <li><a>Last Item Price: <?php if(isset($lastItemPrice)) echo $lastItemPrice; ?></a></li>
        </ul>
    </nav>
</div>