<div id="prod">
    <div id="product-1">
        <h2 class="title"><?php	echo $prods[0]['categoryname'] . ' Products' ?></h2>
        <p class="subtitle"><?php	echo $prods[0]['slogan'] ?></p>
        <div class="product-container" >
            <?php foreach ($prods as $product): ?>
                <div class="product" onclick="loadProdDesc(<?php echo $product['productid']?>)">
                    <img src="<?php echo $product['path']?>" alt="<?php echo $product['brand'] . ' ' . $product['productname'] ?>">
                    <div class="star">
                    </div>  
                    <div class="description">
                        <span><?php echo $product['brand']; ?></span>
                        <h5><?php echo $product['productname']; ?></h5>  
                        <h4><?php echo $product['price']; ?></h4>
                    </div>
                    <//?php if(isset($_SESSION['username'])) { ?>
                        <!-- <a><i class='bx bxs-cart cart'></i></a> -->
                    <//?php }?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>