<div id="containerDiv">
    <?php foreach ($prod as $prod) { ?> 
            <div class="container flex" id="divDesc">
                <div class="left" id="divDescL">
                    <img id="imgDesc"src="<?php echo $prod['path'] ?>" alt="Image"> 
                </div>
                <div class="right" id="divDescR">
                    <h1 id="h1Desc"><?php echo $prod['brand'] ?></h1>
                    <h3 id=h3Desc"><?php echo $prod['productname'] ?></h3>
                    <h4 id="h4Desc">PRICE:</h4><h5 id="h5Desc"><?php echo $prod['price'] ?></h5> <br/>
                    <h4 id="h4Desc">DESCRIPTION:</h4><p id="pDesc"> <?php echo $prod['description'] ?></p>
                    <h4 id="h4Desc">COLOR:</h4><h5 id="h5Desc"> <?php echo $prod['color'] ?></h5> <br/>
                    <h4 id="h4Desc">FUEL: </h4><h5 id="h5Desc"> <?php echo $prod['fuel'] ?></h5> <br/>
                    <h4 id="h4Desc">AUTONOMY:</h4><h5 id="h5Desc"> <?php echo $prod['autonomy'] ?></h5> <br/>
                        <?php if(isset($_SESSION['username'])) { ?>
                            <button id="buttonDesc" onclick="console.log('Clicked:', 'add', <?php echo $prod['productid']; ?>); refreshCart('add', <?php echo $prod['productid']; ?>)">Add to cart</button>
                        <?php }?>
                    <button id="buttonDescGoBack" onclick="console.log('Clicked:', <?php echo $prod['categoryid']?>); loadProd2(<?php echo $prod['categoryid']?>)" id="buttonDesc">Go Back</button>
                </div>
            </div>  
    <?php } ?>
</div>