<?php
session_start();

$prices = array(
    "14x14" => array(
  "poly_green" => 35.45, 
   "polysilk" => 40.15,
   "Poly" => 36.02,
   "Poly_Prima" =>38.35, 
   "Blended_Down" => 41.75,
   "Soft feather" =>37.45,
   "10/90_Grey_Duck" =>46.55,
   "25/75_Grey_Duck" =>51.25,
   "50/50_Grey_Duck" =>57.85,
   "Down" => 70.55,
      // add more fill types and their prices here...
    ),
    "15x15" => array(
      "poly_green" => 35.45, 
      "polysilk" => 40.15,
      "Poly" => 36.02,
      "Poly_Prima" =>38.35, 
      "Blended_Down" => 41.75,
      "Soft feather" =>37.45,
      "10/90_Grey_Duck" =>46.55,
      "25/75_Grey_Duck" =>51.25,
      "50/50_Grey_Duck" =>57.85,
      "Down" => 70.55,
    ),
    "16x16" => array(
      "poly_green" => 35.45, 
      "polysilk" => 40.15,
      "Poly" => 36.02,
      "Poly_Prima" =>38.35, 
      "Blended_Down" => 41.75,
      "Soft feather" =>37.45,
      "10/90_Grey_Duck" =>46.55,
      "25/75_Grey_Duck" =>51.25,
      "50/50_Grey_Duck" =>57.85,
      "Down" => 70.55,
    ),
    "17x17" => array(
      "poly_green" => 35.45, 
      "polysilk" => 40.15,
      "Poly" => 36.02,
      "Poly_Prima" =>38.35, 
      "Blended_Down" => 41.75,
      "Soft feather" =>37.45,
      "10/90_Grey_Duck" =>46.55,
      "25/75_Grey_Duck" =>51.25,
      "50/50_Grey_Duck" =>57.85,
      "Down" => 70.55,
    ),
    "18x18" => array(
      "poly_green" => 35.45, 
      "polysilk" => 40.15,
      "Poly" => 36.02,
      "Poly_Prima" =>38.35, 
      "Blended_Down" => 41.75,
      "Soft feather" =>37.45,
      "10/90_Grey_Duck" =>46.55,
      "25/75_Grey_Duck" =>51.25,
      "50/50_Grey_Duck" =>57.85,
      "Down" => 70.55,
    ),
  
);

$fabric_type_prices = array(
    "cotton" => 5.0,
    "polyester" => 3.0,
    // add more fabric types and their prices here...
);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $size = $_POST["size"];
    $fill_type = $_POST["fill_type"];
    $quantity = $_POST["quantity"];
    $fabric_cover = $_POST["fabric_cover"];
    $fabric_type = isset($_POST["fabric_type"]) ? $_POST["fabric_type"] : null;
    $fabric_cost = isset($_POST["fabric_cost"]) ? $_POST["fabric_cost"] : null;

    $total_price = $prices[$size][$fill_type];
  
    if ($fabric_cover == "yes") {
        $total_price += $fabric_type_prices[$fabric_type];
        $total_price += $fabric_cost;
    }

    $total_price *= $quantity;

    $order = array(
        "size" => $size,
        "fill_type" => $fill_type,
        "quantity" => $quantity,
        "fabric_cover" => $fabric_cover,
        "fabric_type" => $fabric_type,
        "fabric_cost" => $fabric_cost,
        "total_price" => $total_price
    );

    $_SESSION['cart'][] = $order;
    echo "Your quote for the custom pillow insert is $" . $total_price . ". It has been added to your cart.";
    header("Location: cart.php");
}
?>
