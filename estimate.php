<?php
session_start();
// capture form data
$style = $_POST["style"];
$welt = $_POST["welt"];
$seat_filling = $_POST["seat_filling"];
$seat_thickness = $_POST["seat_thickness"];
$back_filling = $_POST["back_seat_filling"];
$back_thickness = $_POST["back_seat_thickness"];
$corner_type = $_POST["round_type"];
$corner_location = $_POST["square_type"];
$tie_option = $_POST["ties"];
$back_fabric_tie_shape = $_POST["back_fabric_ties"];
$seat_fabric_tie_shape = $_POST["seat_fabric_ties"];
$length = $_POST["length"];
$width = $_POST["width"];
$height = $_POST["height"];

$area = $width * $length * $height / 144;
$cost = $area * 5.95;

$prices = array(
    "style" => array(
      "chair_square_back" => 50,
      "loveseat_square_back" => 70,
      "sofa_square_back" => 90,
    ),
    "welt" => array(
      "double_welt" => 10,
      "self_welt" => 20,
      "contrast_welt" => 30,
      "no_welt" => 0,
    ),
    "seat_filling" => array(
      "pollyplush" => 40,
      "foam_batting" => 60,
      "deluxe" => 80,
    ),
    "back_seat_filling" => array(
      "back_pollyplush" => 20,
      "back_foam_batting"=> 30,
      "back_deluxe" => 50,
    ),
    "round_type" => array(
      "front_corners_round" => 20,
      "bottom_corners_round" => 5,
      "back_corners_round" => 10,
    ),
    "ties" => array(
      "none" => 0,
      "top_corners" => 5,
      "all_corners" => 10,
    ),
  );

// calculate prices based on options selected
$style_price = $prices["style"][$style];
$welt_price = $prices["welt"][$welt];
$seat_filling_price = $prices["seat_filling"][$seat_filling];
$back_filling_price = $prices["back_seat_filling"][$back_filling];
$corner_price = $prices["round_type"][$corner_type];
$tie_price = $prices["ties"][$tie_option];
$dimension_price = $cost; // based on $length, $width, and $height

// calculate total price
$total_price = $style_price + $welt_price + $seat_filling_price + $back_filling_price + $corner_price + $tie_price + $dimension_price;

// Store product details in the cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Add the new item to the cart
$item = array(
  'style' => $style,
  'welt' => $welt,
  'seat_filling' => $seat_filling,
  'seat_thickness' => $seat_thickness,
  'back_filling' => $back_filling,
  'back_thickness' => $back_thickness,
  'corner_type' => $corner_type,
  'corner_location' => $corner_location,
  'tie_option' => $tie_option,
  'back_fabric_tie_shape' => $back_fabric_tie_shape,
  'seat_fabric_tie_shape' => $seat_fabric_tie_shape,
  'length' => $length,
  'width' => $width,
  'height' => $height,
  'total_price' => $total_price
);

array_push($_SESSION['cart'], $item);

echo "Your estimate is: $" . $total_price;
echo "Your estimated price for the custom window seat cushion is $" . $total_price . ".";
?>
<?php include 'navbar.php'; ?>