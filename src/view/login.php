<div class="wrapper">
    <form action="index.php?action=user" method="POST">
        <h1>Log In</h1>
        <div class="shopLogo">
           <a href="?action="> <img src="images/logo.png" alt="Shop logo" id="shop-Logo" > </a> 
        </div>
        <div class="inputBox">
            <input type="text" name="username" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="inputBox">
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <!-- <div class="rememberForgot">
            <label> <input type="checkbox">Remember me</label>
            <a href="">Forgot password? </a>
        </div> -->
        <button type="submit" class="btn" id="login">Login</button>
        <div class="registerLink">
            <p> Don't have an account? <a href="?action=register"> Register</a></p>
        </div>
    </form>
</div>