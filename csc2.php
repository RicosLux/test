<!DOCTYPE html>
<html>
<head>
    <?php include 'navbar.php'; ?>
    <title>Fabric Yardage Calculator - Custom Sofa Cushions</title>
</head>
<body>
    <h1>Fabric Yardage Calculator - Custom Sofa Cushions</h1>
    <form id="csc2CalcForm">
        <label for="cushionWidth">Cushion Width (inches):</label>
        <input type="number" id="cushionWidth" required>
        <br>
        
        <label for="cushionLength">Cushion Length (inches):</label>
        <input type="number" id="cushionLength" required>
        <br>
        
        <label for="cushionThickness">Cushion Thickness (inches):</label>
        <input type="number" id="cushionThickness" required>
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
        function calculateFabricYardage() {
            const cushionWidth = parseFloat(document.getElementById("cushionWidth").value);
            const cushionLength = parseFloat(document.getElementById("cushionLength").value);
            const cushionThickness = parseFloat(document.getElementById("cushionThickness").value);
            const quantity = parseFloat(document.getElementById("quantity").value);
            const fabricPattern = parseFloat(document.getElementById("fabricPattern").value);
            const weltOption = document.getElementById("weltOption").value;
            const fabricRollWidth = 54; 

            let fabricYardage = 0;

            // Check if we can fit the cushion width and a side within the fabric width.
            if ((cushionWidth + fabricPattern) + (cushionThickness + fabricPattern) <= fabricRollWidth) {
                fabricYardage += (2 * cushionLength + 2 * cushionThickness) / 36;
            } else if (cushionWidth + fabricPattern <= fabricRollWidth) {
                fabricYardage += (2 * cushionLength) / 36;
                fabricYardage += (2 * cushionThickness * cushionWidth) / 36;
            } else {
                fabricYardage += (2 * cushionLength + 2 * cushionThickness) * cushionWidth / 36; 
            }

            fabricYardage *= quantity;

            if (weltOption === "yes") {
                fabricYardage += 0.5 * quantity;
            }

            document.getElementById("result").innerText = `Fabric Yardage Needed: ${fabricYardage.toFixed(2)} yards`;
        }
    </script>
</body>
</html>
