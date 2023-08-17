<body>
<?php include 'navbar.php'; ?>
<!-- fp.php - Floor Pillows Survey -->
<h2>Floor Pillows Survey</h2>
<form action="calculate_price.php" method="POST">
    <label for="fabric_color">Select Fabric Color:</label>
    <select name="fabric_color" id="fabric_color">
        <option value="orange">Orange</option>
        <option value="teal">Teal</option>
        <option value="purple">Purple</option>
        <!-- Add more color options as needed -->
    </select>

    <label for="size">Select Size:</label>
    <select name="size" id="size">
        <option value="24x24">24x24 inches</option>
        <option value="30x30">30x30 inches</option>
        <option value="36x36">36x36 inches</option>
        <!-- Add more size options as needed -->
    </select>

    <label for="fill_type">Select Fill Type:</label>
    <select name="fill_type" id="fill_type">
        <option value="bean_bag">Bean Bag</option>
        <option value="foam">Foam</option>
        <!-- Add more fill type options as needed -->
    </select>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" min="1" max="10">

    <input type="submit" value="Get Price Estimate">
</form>
</body>