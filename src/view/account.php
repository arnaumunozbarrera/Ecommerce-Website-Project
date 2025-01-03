<?php foreach ($account as $account): ?>
    <div class="container">
        <div class="profile">

            <div class="profileHeader">
                <img src="<?php echo $account['img'];?>" alt="Profile image" id="userIMG">
                <div class="profileImg">
                    <div class="profileTextContainer">
                        <h1 class="profileTitle"><?php echo $account['username'];?></h1>
                    </div>
                </div>
                <form id="imgFORM" action="index.php?action=upload" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>
            </div>
            <form class="account2" action="index.php?action=" method="POST">
                <button class="cancel" href="?action=" > Undo changes & go back </button>
            </form>
            <form class="account" action="index.php?action=modify" method="POST">
                <div class="accountHeader">
                    <h1 class="accountTitle"> Account Settings</h1>
                    <div class="btn">
                        <button class="save" type="submit">Save</button>
                    </div>
                </div>

                <div class="editing" id="account-Info">
                    <div class="inputContainer">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="<?php echo $account['email'];?>">
                    </div>
                    <div class="inputContainer">
                        <label>Poblation</label>
                        <input type="text" name="poblation" placeholder="<?php echo $account['poblation'];?>">
                    </div>
                    <div class="inputContainer">
                        <label>Postal Code</label>
                        <input type="text" name="postalCode" placeholder="<?php echo $account['postalCode'];?>">
                    </div>
                    <div class="inputContainer">
                        <label>Phone Number</label>
                        <input type="text" name="phoneNumber" placeholder="<?php echo $account['phoneNumber'];?>">
                    </div>
                    <div class="inputContainer">
                        <label>DNI</label>
                        <input type="text" name="DNI" placeholder="<?php echo $account['DNI'];?>">
                    </div>
                    <div class="inputContainer">
                        <label>New password</label>
                        <input type="password" name="password" placeholder="">
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endforeach; ?>
