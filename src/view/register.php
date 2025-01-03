<div class="wrapper">
    <form action="index.php?action=register" method="POST">
        <h1>Sign Up</h1>
        <div class="shopLogo">
            <a href="?action=home"> <img src="images/logo.png" alt="Shop logo" id="shop-Logo"></a>
        </div>
        <div class="inputBox">
            <input type="text" name="DNI" placeholder="* DNI">
        </div>
        <div class="inputBox">
            <input type="text" name="username" placeholder="* Username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="inputBox">
            <input type="email" name="email" placeholder="* Email" required>
            <i class='bx bxl-gmail'></i>
        </div>
        <div class="inputBox">
            <input type="password" name="password" placeholder="* Password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="inputBox">
            <input type="text" name="poblation" placeholder="* Population" required>
        </div>
        <div class="inputBox">
            <input type="text" name="postalCode" placeholder="* Area Code" required>
        </div>
        <div class="inputBox">
            <input type="text" name="address" placeholder="* Address" required>
        </div>
        <div class="inputBox">
            <input type="text" name="phoneNumber" placeholder="* Phone Number" required>
        </div>
        <button type="submit" class="btn" id="register">Register</button>
    </form>
    <div class="registerLink">
        <p> Already have an account? <a href="?action=user"> Log In</a></p>
    </div>
    <div class="registerLink">
        <p> * Required</p>
    </div>
</div>