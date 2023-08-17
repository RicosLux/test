<?php
session_start();

if(isset($_POST['remove_id'])){
    $id = $_POST['remove_id'];
    unset($_SESSION['cart'][$id]);
}

header("Location: cart.php"); 
?>
