<div>
    
    <h1 id="confirmMSG"> 
        <?php
            if (is_numeric($result)) {
                echo "Cart confirmation successful";
            } else {
                echo $result;
            }
        ?>
    </h1>

    <form class="account2" action="index.php?action=" method="POST">
        <button class="cancel2" href="?action=">Go back to home</button>
    </form>
</div>