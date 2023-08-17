<body>
<?php include 'navbar.php'; ?>
<!-- pcphp - Pillow Covers Survey -->
<h2>Pillow Covers Survey</h2>
<form action="calculate_price.php" method="POST">
    <label for="fabric_color">Select Fabric Color:</label>
    <select name="fabric_color" id="fabric_color">
        <option value="navy_blue">Navy Blue</option>
        <option value="magenta">Magenta</option>
        <option value="gray">Gray</option>
        <!-- Add more color options as needed -->
    </select>

    <label for="size">Select Size:</label>
    <select name="size" id="size">
        <option value="16x16">16x16 inches</option>
        <option value="18x18">18x18 inches</option>
        <option value="20x20">20x20 inches</option>
        <!-- Add more size options as needed -->
    </select>

    <label for="zipper_type">Select Zipper Type:</label>
    <select name="zipper_type" id="zipper_type">
        <option value="invisible">Invisible Zipper</option>
        <option value="standard">Standard Zipper</option>
        <!-- Add more zipper type options as needed -->
    </select>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" min="1" max="10">

    <input type="submit" value="Get Price Estimate">
</form>
</body>