<div id="navigation">
    <nav class="navBar">
        <ul>
            <li class="menuInfo" id="menu-Toggle">
                <a id="menu-Name">
                    <img src="/images/svgs/menu.svg" alt="Menu Logo" class="imgNavbar" id="menu-Logo"> 
                    Menu 
                </a>
            </li>
            <li class="logoInfo" id="log"> 
                <a href="?action=">
                    <p id="logo-Name">Eco</p>
                    <img src="images/logo.png" alt="Shop logo" id="shop-Logo">
                    <p id="logo-Name">Cars</p> 
                </a>
            </li>
            <li class="searchContainer">
                <form onsubmit="return handleForm(this);">
                    <div class="search">
                        <button onclick="handleButtonClick(event, this.form);" type="submit">🔍</button>
                        <input name="query" class="searchInput" type="search" id="holder-Search" placeholder="Search...">
                    </div>
                </form>
            </li>
            <li class="userInfo" id="user-Toggle">
                <a>
                    <p id="user-Name"><?php echo $name; ?> </p>
                    <img src="<?php echo $r[0]['img'] ?? '/images/svgs/user.svg';?>" alt="User Logo" class="imgNavbar" id="user-Logo">
                </a>
            </li>
        </ul>
    </nav>
</div>