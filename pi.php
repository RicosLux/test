<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php include 'navbar.php'; ?>
<!-- pi.php - Pillow Inserts Survey -->
<h2>Pillow Inserts Survey</h2>
<form action="cal_pri.php" method="POST">
    <label for="size">Select Size:</label>
    <select name="size" id="size">
        <option value="14x14">14x14 inches</option>
        <option value="15x15">15x15 inches</option>
        <option value="16x16">16x16 inches</option>
        <option value="17x17">17x17 inches</option>
        <option value="18x18">18x18 inches</option>
        <!-- Add more size options as needed -->
    </select>

    <label for="fill_type">Select Fill Type:</label>
    <select name="fill_type" id="fill_type">
        <option value="poly_green">Poly Green</option>
        <option value="polysilk">polysilk</option>
        <option value="Poly">Poly</option>
        <option value="Poly_Prima">Poly Prima</option>
        <option value="Blended_Down">Blended Down</option>
        <option value="Soft_feather">Soft feather</option>
        <option value="10/90_Grey_Duck">10/90 Grey Duck</option>
        <option value="25/75_Grey_Duck">25/75 Grey Duck</option>
        <option value="50/50_Grey_Duck">50/50 Grey Duck</option>
        <option value="Down">100% Down</option>
        <!-- Add more fill type options as needed -->
    </select>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" min="1" max="10">

    <label for="fabric_cover">Would you like a fabric cover for the inserts?</label><br>
  <select name="fabric_cover" id="fabric_cover" onchange="displayFabricOptions(this.value)">
    <option value="no">No</option>
    <option value="yes">Yes</option>
  </select><br>

  <div id="fabric_options" style="display: none;">
    <label for="fabric_type">Fabric Type:</label><br>
    <select name="fabric_type" id="fabric_type">
      <option value="cotton">Cotton</option>
      <option value="polyester">Polyester</option>
      <!-- Add more fabric options as needed -->
    </select><br>

    <label for="fabric_cost">Fabric Cost ($):</label><br>
    <input type="number" id="fabric_cost" name="fabric_cost"><br>
  </div>

  <input type="submit" name="add_to_cart" value="Add to Cart">
</form>

<script>
function displayFabricOptions(value) {
  document.getElementById('fabric_options').style.display = value == 'yes' ? 'block' : 'none';
}
</script>

<a href="cart.php">View Cart</a>

</body>
</html>

