<!-- cpsc.php -->
<!DOCTYPE html>
<html>
<head>
<?php include 'navbar.php'; ?>
    <title>Fabric Yardage Calculator - Custom Porch Swing Cushions</title>
</head>
<body>
    <h1>Fabric Yardage Calculator - Custom Porch Swing Cushions</h1>
    <form id="cpscCalcForm">
        <label for="cushionWidth">Cushion Width (inches):</label>
        <input type="number" id="cushionWidth" required>
        <br>
        <label for="cushionLength">Cushion Length (inches):</label>
        <input type="number" id="cushionLength" required>
        <br>
        <label for="quantity">Number of Cushions:</label>
        <input type="number" id="quantity" value="1">
        <br>
        <label for="fabricPattern">Fabric Pattern (inches):</label>
        <input type="number" id="fabricPattern" value="0">
        <br>
        <label for="weltOption">Welt Option:</label>
        <select id="weltOption">
            <option value="no">No Welt</option>
            <option value="yes">Welt Included</option>
        </select>
        <button type="button" onclick="calculateFabricYardage()">Calculate Fabric Yardage</button>
    </form>
    <p id="result"></p>
    <script>
        // JavaScript code for cpsc.php
        function calculateFabricYardage() {
            const cushionWidth = parseFloat(document.getElementById("cushionWidth").value);
            const cushionLength = parseFloat(document.getElementById("cushionLength").value);
            const quantity = parseFloat(document.getElementById("quantity").value);
            const fabricPattern = parseFloat(document.getElementById("fabricPattern").value);
            const weltOption = document.getElementById("weltOption").value;
            const fabricRollWidth = 54; // Width of fabric roll in inches

            // Calculate fabric yardage for custom porch swing cushions
            const facesWidth = (cushionWidth + fabricPattern) * 2;
            const facesLength = (cushionLength + fabricPattern) * 2;
            const fabricYardage = (facesWidth / 36) + (facesLength / 36) * quantity;

            // Include welt if selected
            if (weltOption === "yes") {
                fabricYardage += 0.5 * quantity;
            }

            // Display the result
            document.getElementById("result").innerText = `Fabric Yardage Needed: ${fabricYardage.toFixed(2)} yards`;
        }
    </script>
</body>
</html>
