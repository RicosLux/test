<body>
<?php include 'navbar.php'; ?>
<!-- tps.php - Throw Pillows Survey -->
<h2>Throw Pillows Survey</h2>
<form action="calculate_price.php" method="POST">
    <label for="fabric_color">Select Fabric Color:</label>
    <select name="fabric_color" id="fabric_color">
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
        <option value="yellow">Yellow</option>
        <option value="gray">Gray</option>
        <!-- Add more color options as needed -->
    </select>

    <label for="size">Select Size:</label>
    <select name="size" id="size">
        <option value="16x16">16x16 inches</option>
        <option value="18x18">18x18 inches</option>
        <option value="20x20">20x20 inches</option>
        <option value="22x22">22x22 inches</option>
        <!-- Add more size options as needed -->
    </select>

    <label for="fill_type">Select Fill Type:</label>
    <select name="fill_type" id="fill_type">
        <option value="polyester">Polyester Fiberfill</option>
        <option value="down">Down Feather</option>
        <option value="memory_foam">Memory Foam</option>
        <!-- Add more fill type options as needed -->
    </select>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" min="1" max="10">

    <input type="submit" value="Get Price Estimate">
</form>
</body>