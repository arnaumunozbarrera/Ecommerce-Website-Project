<div id="menu-VerticalBar" class="verticalMenu hidden"> 
    <ul class="pList">    
        <?php foreach ($categories as $categoria): ?>
            <li class="svgLi" onclick="console.log('Clicked:', <?php echo $categoria['categoryid']?>); loadProd(<?php echo $categoria['categoryid']?>)">
                <div id="cat">
                    <?php echo $categoria['categoryname']; ?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul> 
</div> 
