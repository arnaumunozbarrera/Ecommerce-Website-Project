<div id="cartResumContainer" class="smallContainer cartPage">
    <table>
        <tr id="title">
            <th>My purchases</th>
        </tr>
        <?php foreach ($history as $hist) { ?>
            <tr>
                <td>
                    <div class="cartInfo">
                        <!-- <img width="10" height="10" src="<//?php echo $productDetails['img'];?>" alt="Item img"> -->
                        <img id="historyIMG" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAArNJREFUSEudVjuWEzEQrFIOjyPYIScgZJeTrBP2cQOI7I3gBrx1sj7J2iknIFwfgQe5CmtGGrU80syAInvU6k919YcIhwDU/WqfSRmCEDSSaT8KN8ssRh3zPk4bS84tMtxFE92bN1wC2MlXHg2GJa0ArDoLBEie/jcF1k7+XVpn+iv57cXiLuEe7a9JnnMuGq7P8aNCJBvx9nI/GI7GTiRvFxOwxZZFUPeP3xsnTNStiOvgTpVIH/GVvpBvAUcKKxAHkptCpsWwVjmNKiKUX/UQkn8CcBeve7hjudceRU5caSu+ni1fmuXkpRsCx0FT1FE30PefprJ8eUvHUxBuyoYLL72EEptUapHoBCelNyQPKbsVsPukyGt7ca1n+rzSmbC73jAEOtRxi4GSXgSsCmgqQeVPocsl8sTf/eXOkQ+2A0ZWx0Z/RXNJfX3bHC/BfhzJxpGH3nDB6voUkHRzqetIMmuxbb1ycybdOo9AwkDdLk4vfyQQHBifGbbHB7tLfh8smLM57ngl3UF4ateA9aeMN/d8d76ecsOr0SQxIASSAWGC1StwBG/+EBrHemiQKaMtgK8xHUhm2tdkt8qXEWZL3uT+AutxXgeShbmdz0SogUyky7VrlgKDm2V16V2yUkQ9fJzqVtqQrutU16fZMquS6ohWZ/cYhGIolPqa0ymKVUpb0kcAbwB8J/mnwoVXAD5B+EXn9vX1daHhDLX/CvBz7GJHkh/SXaKJpGcAaYx+c+SX1K2sE9VFoNoounr2z0BchcLySLpKxN5MSONcCd84xxNbTIT5MRrbk7zvN5NMRsk/AgzpCOee5L5GrTGrO6l2fUl6C+A1yR9ZYSnvpXcEfpPu5yjHJvAG2eOaYFf/2mbeyovlZyWOf8rxgMRMw6lfl18bQ2JBK2t1hQKVMaHSIvAXHQk0NRh7fdAAAAAASUVORK5CYII="/>
                        <div id="text">
                            <p>Date: <?php echo $hist['datetime'];?></p>
                            <small>Price: <?php echo $hist['totalcost'];?></small> 
                            <p>Items: <?php echo $hist['nitems'];?></p>
                            <br/>
                        </div>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
    <hr/>
    <br/>

    <form class="account2" action="index.php?action=" method="POST">
        <button class="cancel2" href="?action=">Go back to home</button>
    </form>
</div>