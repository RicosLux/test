<body>
<?php include 'navbar.php'; ?>
<!-- lp.php - Lumber Pillows Survey -->
<h2>Lumbar Pillows Survey</h2>
<form action="calculate_price.php" method="POST">
    <label for="fabric_color">Select Fabric Color:</label>
    <select name="fabric_color" id="fabric_color">
        <option value="black">Black</option>
        <option value="white">White</option>
        <option value="gray">Gray</option>
        <option value="brown">Brown</option>
        <!-- Add more color options as needed -->
    </select>

    <label for="size">Select Size:</label>
    <select name="size" id="size">
        <option value="12x18">12x18 inches</option>
        <option value="14x20">14x20 inches</option>
        <option value="16x24">16x24 inches</option>
        <!-- Add more size options as needed -->
    </select>

    <label for="fill_type">Select Fill Type:</label>
    <select name="fill_type" id="fill_type">
        <option value="foam">Foam</option>
        <option value="memory_foam">Memory Foam</option>
        <option value="fiberfill">Fiberfill</option>
        <!-- Add more fill type options as needed -->
    </select>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" min="1" max="10">

    <input type="submit" value="Get Price Estimate">
</form>

</body?
