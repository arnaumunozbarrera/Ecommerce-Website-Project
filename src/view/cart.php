<div class="cart" id="cart">
    <nav class="cartBar" id="cart-Nav">        
        <ul class="cartInfoLeft">
            <li><a>Shopping List</a></li>
        </ul>

        <ul class="cartInfoCenter">
            <li><a>Product Quantity: <?php echo $cartQuantity; ?> </a></li>
            <li><a>Total Amount: <?php echo $totalAmount."€"; ?> </a></li>
        </ul>

        <ul class="cartInfoRight">
            <li><a>Last Item Price: <?php echo $lastItemPrice; ?></a></li>
        </ul>
    </nav>
</div>