<!-- bp.php - Bolster Pillows Survey -->
<h2>Bolster Pillows Survey</h2>
<?php include 'navbar.php'; ?>
<form action="calculate_price.php" method="POST">
    <label for="fabric_color">Select Fabric Color:</label>
    <select name="fabric_color" id="fabric_color">
        <option value="purple">Purple</option>
        <option value="yellow">Yellow</option>
        <option value="green">Green</option>
        <!-- Add more color options as needed -->
    </select>

    <label for="size">Select Size:</label>
    <select name="size" id="size">
        <option value="6x18">6x18 inches</option>
        <option value="8x24">8x24 inches</option>
        <option value="10x30">10x30 inches</option>
        <!-- Add more size options as needed -->
    </select>

    <label for="fill_type">Select Fill Type:</label>
    <select name="fill_type" id="fill_type">
        <option value="down_alternative">Down Alternative</option>
        <option value="fiberfill">Fiberfill</option>
        <!-- Add more fill type options as needed -->
    </select>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" min="1" max="10">

    <input type="submit" value="Get Price Estimate">
</form>
