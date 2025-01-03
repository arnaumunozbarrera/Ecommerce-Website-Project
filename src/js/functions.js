$(document).ready(function () {
    const $userMenu = $('#menu-userMenu');
    const $verticalMenu = $('#menu-VerticalBar');
    const $carSlogan = $('#car-Slogan');
    
    $('#user-Toggle').click(function (e) {
        

        $userMenu.toggleClass('hidden');

        if (!$verticalMenu.hasClass('hidden')) {
            $verticalMenu.addClass('hidden');
            $carSlogan.toggleClass('hidden');
        }
    });

    $('#menu-Toggle').click(function (e) {
        
        $carSlogan.toggleClass('hidden');
        $verticalMenu.toggleClass('hidden');

        if (!$userMenu.hasClass('hidden')) {
            $userMenu.addClass('hidden');
        }
    });

    $(document).click(function (e) {
        if (!$(e.target).closest('#user-Toggle, #menu-userMenu').length) {
            $('#menu-userMenu').addClass('hidden');
        }
        if (!$(e.target).closest('#menu-Toggle, #menu-VerticalBar').length) {
            $('#menu-VerticalBar').addClass('hidden');
            if ($carSlogan.hasClass('hidden'))
                $carSlogan.toggleClass('hidden');
        }
    });
});

$(document).ready(function () {
    const $error = $('#error');
    if (!$error.hasClass('hidden')) {
        
        $error.addClass()
        setTimeout(() => {
            $error.addClass('hidden');
        }, 3500);
    }
});

async function loadProd(cat_id) {
    
    var resposta = await fetch("/../controller/productes.php?cat_id=" + cat_id); 
    
    var respostaTxt= await resposta.text();

    document.getElementById("home").innerHTML = respostaTxt;
    document.getElementById("slogan").innerHTML = " ";
}

async function loadProd2(cat_id) {
    
    var resposta = await fetch("/../controller/productes.php?cat_id=" + cat_id); 
    
    var respostaTxt= await resposta.text();

    document.getElementById("containerDiv").innerHTML = respostaTxt;
}


async function loadProdDesc(product_id) {
    
    var resposta = await fetch("/../controller/productdesc.php?product_id=" + product_id); 
    
    var respostaTxt= await resposta.text();

    document.getElementById("prod").innerHTML = respostaTxt;
}

async function refreshCart(add,product_id) {
    var resposta1 = await fetch("/../controller/productdesc.php?act=" + add + "&product_id=" + product_id);
    alert('Item correctly added to cart!');

    var resposta2 = await fetch("/../controller/cart.php");  
    var resposta2Txt = await resposta2.text(); 

    document.getElementById("cart").innerHTML = resposta2Txt;
}

async function refreshCartResum(removeitem, product_id) {
    var resposta1 = await fetch("/../controller/cartresum.php?act=" + removeitem + "&product_id=" + product_id);
    alert('Item correctly removed from the cart!');

    var resposta2 = await fetch("/../controller/cartresum.php");  
    var resposta2Txt = await resposta2.text(); 

    document.getElementById("cartResumContainer").innerHTML = resposta2Txt;
}

async function modifyQuantity(modifyquant, product_id, value) {
    var resposta1 = await fetch("/../controller/cartresum.php?act=" + modifyquant + "&product_id=" + product_id + "&value=" + value);
    alert('Item correctly modified!');

    var resposta2 = await fetch("/../controller/cartresum.php");  
    var resposta2Txt = await resposta2.text(); 

    document.getElementById("cartResumContainer").innerHTML = resposta2Txt;
}

async function handleForm(form) {
    const query = form.query.value; 
    if (query) {
        await loadProdBySearch(query);
    }
    return false; 
}

async function handleButtonClick(event, form) {
    event.preventDefault(); 
    const query = form.query.value; 
    if (query) {
        await erase(query); 
    }
}

async function erase(query) {
    var resposta = await fetch("/../controller/navbar.php?query=" + query); 
    var respostaTxt= await resposta.text();

    document.getElementById("navigation").innerHTML = respostaTxt;
    document.getElementById("home").innerHTML = " "; 
    document.getElementById("slogan").innerHTML = ""; 
}