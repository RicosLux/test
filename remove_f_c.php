<?php
session_start();

// Ensure that an item key was provided
if (isset($_GET['itemKey'])) {
    $itemKey = $_GET['itemKey'];

    // Remove the item from the cart
    unset($_SESSION['cart'][$itemKey]);

    // Re-index the array to fill the gap
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

// Redirect back to the view cart page
header('Location: cart.php');
exit();
?>