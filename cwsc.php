<!DOCTYPE html>
<html>
<head>

</head>
<body> 
       <?php include 'navbar.php'; ?>
    <h1>Custom Window Seat Cushions</h1>

    <form action="estimate.php" method="post">
        <h2>Window Type</h2>
        <select name="window_type">
            <option value="bay_window">Bay Window</option>
            <option value="bow_window">Bow Window</option>
            <option value="corner_window">Corner Window</option>
            <option value="straight_window">Straight Window</option>
        </select>

        <h2>Number of Cushions</h2>
        <select name="num_cushions">
            <option value="cushion_1">1 Cushion</option>
            <option value="cushion_2">2 Cushions</option>
            <option value="cushion_3">3 Cushions</option>
        </select>

        <h2>Dimensions of the Cushions</h2>
        <input type="number" name="cushion_length" placeholder="Length" min="0">
        <input type="number" name="cushion_width" placeholder="Width" min="0">
        <input type="number" name="cushion_height" placeholder="Height" min="0">

        <h2>Filling Type</h2>
        <select name="filling_type">
            <option value="poly_foam">Poly Foam</option>
            <option value="luxury_foam">Luxury Foam</option>
            <option value="feather_down">Feather Down</option>
        </select>

        <h2>Fabric Choice</h2>
        <input type="text" name="fabric_choice" placeholder="Enter your fabric choice">

        <h2>Additional Pillows</h2>
        <label><input type="radio" name="add_pillows" value="yes">Yes</label>
        <label><input type="radio" name="add_pillows" value="no">No</label>

        <h2>Number of Additional Pillows</h2>
        <input type="number" name="num_pillows" min="0">

        <h2>Professional Installation</h2>
        <label><input type="radio" name="installation" value="yes">Yes</label>
        <label><input type="radio" name="installation" value="no">No</label>

        <h2>Delivery Options</h2>
        <select name="delivery">
            <option value="in_store_pickup">In-Store Pickup</option>
            <option value="standard_delivery">Standard Delivery</option>
            <option value="expedited_delivery">Expedited Delivery</option>
        </select>

        <h2>Any special instructions or comments?</h2>
        <textarea name="special_instructions"></textarea>

        <button type="submit">Get Estimate</button>
    </form>
</body>
</html>
