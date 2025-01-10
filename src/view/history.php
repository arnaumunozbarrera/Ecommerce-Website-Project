<div id="cartResumContainer" class="smallContainer cartPage">
    <table>
        <tr id="title">
            <th>My purchases</th>
        </tr>
        <?php 
        if (empty($history)) { 
        ?>
            <tr>
                <td>
                    <p id = text>Your purchase history is empty.</p>
                </td>
            </tr>
        <?php 
        } else { 
            $lastId = -1;
            foreach ($history as $hist) { 
                $id = $hist['ticketid'] ?>
                <tr>
                    <td>
                        <div class="cartInfo">
                            <div id="text">
                            <?php if ($id !== $lastId) { ?>
                            <img id="historyIMG" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAArNJREFUSEudVjuWEzEQrFIOjyPYIScgZJeTrBP2cQOI7I3gBrx1sj7J2iknIFwfgQe5CmtGGrU80syAInvU6k919YcIhwDU/WqfSRmCEDSSaT8KN8ssRh3zPk4bS84tMtxFE92bN1wC2MlXHg2GJa0ArDoLBEie/jcF1k7+XVpn+iv57cXiLuEe7a9JnnMuGq7P8aNCJBvx9nI/GI7GTiRvFxOwxZZFUPeP3xsnTNStiOvgTpVIH/GVvpBvAUcKKxAHkptCpsWwVjmNKiKUX/UQkn8CcBeve7hjudceRU5caSu+ni1fmuXkpRsCx0FT1FE30PefprJ8eUvHUxBuyoYLL72EEptUapHoBCelNyQPKbsVsPukyGt7ca1n+rzSmbC73jAEOtRxi4GSXgSsCmgqQeVPocsl8sTf/eXOkQ+2A0ZWx0Z/RXNJfX3bHC/BfhzJxpGH3nDB6voUkHRzqetIMmuxbb1ycybdOo9AwkDdLk4vfyQQHBifGbbHB7tLfh8smLM57ngl3UF4ateA9aeMN/d8d76ecsOr0SQxIASSAWGC1StwBG/+EBrHemiQKaMtgK8xHUhm2tdkt8qXEWZL3uT+AutxXgeShbmdz0SogUyky7VrlgKDm2V16V2yUkQ9fJzqVtqQrutU16fZMquS6ohWZ/cYhGIolPqa0ymKVUpb0kcAbwB8J/mnwoVXAD5B+EXn9vX1daHhDLX/CvBz7GJHkh/SXaKJpGcAaYx+c+SX1K2sE9VFoNoounr2z0BchcLySLpKxN5MSONcCd84xxNbTIT5MRrbk7zvN5NMRsk/AgzpCOee5L5GrTGrO6l2fUl6C+A1yR9ZYSnvpXcEfpPu5yjHJvAG2eOaYFf/2mbeyovlZyWOf8rxgMRMw6lfl18bQ2JBK2t1hQKVMaHSIvAXHQk0NRh7fdAAAAAASUVORK5CYII="/>
                                <p>Date: <?php echo $hist['datetime'];?></p>
                                <small>Price: <?php echo $hist['totalcost'];?></small> 
                                <p>Items: <?php echo $hist['nitems'];?></p>
                                <br/>
                            <?php } ?>
                                <div>
                                    <p> 
                                        Name: <?php echo $hist['brand']; ?> <?php echo $hist['name']; ?> <?php if ($hist['color'] !== NULL) echo $hist['color']; ?> 
                                        Quantity:<?php echo $hist['quantity']; ?> 
                                        Unit price:<?php echo $hist['price']; ?> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php 
                $lastId= $id;
            }
        } ?>
    </table>
    <hr/>
    <br/>

    <form class="account2" action="index.php?action=" method="POST">
        <button class="cancel2" href="?action=">Go back to home</button>
    </form>
</div>