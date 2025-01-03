<?php
   session_start();

   if (isset($_SESSION['username'])) 
   {
      $name = $_SESSION['username']; 
      
      if (isset($_SESSION['carrito' . $name])) 
      {
         $cartQuantity = 0;
         $totalAmount = 0.00;
         $lastItemPrice = 0.00;
     
         foreach ($_SESSION['carrito' . $name] as $productid => $productDetails) 
         {
            $cartQuantity += $productDetails['quantity'];
   
            $string = str_replace('.', '', $productDetails['price']);

            $string = str_replace(',', '.', $string);

            $float = (float) $string;
            $totalAmount += $float * $productDetails['quantity'];

            $lastItemPrice = $productDetails['price'];
         }
      } 
      require_once __DIR__ . '/../view/cart.php';
   }
?>


