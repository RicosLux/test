<!DOCTYPE html>
<html>
<head>
<?php include 'navbar.php'; ?>
    <title>Fabric Yardage Calculator - Custom Bay Window Cushions</title>
</head>
<body>
    <h1>Fabric Yardage Calculator - Custom Bay Window Cushions</h1>
    <form id="customBayWindowCushionCalcForm">
        <label for="cushionWidth">Cushion Width (inches):</label>
        <input type="number" id="cushionWidth" required>
        <br>
        <label for="cushionLength">Cushion Length (inches):</label>
        <input type="number" id="cushionLength" required>
        <br>
        <label for="cushionThickness">Cushion Thickness (inches):</label>
        <input type="number" id="cushionThickness" required>
        <br>
        <label for="fabricPattern">Fabric Pattern (inches):</label>
        <input type="number" id="fabricPattern" value="0">
        <br>
        <label for="orientation">Orientation:</label>
        <input type="radio" id="railroad" name="orientation" value="railroad" required>
        <label for="railroad">Railroad</label>
        <input type="radio" id="uptheroll" name="orientation" value="uptheroll" required>
        <label for="uptheroll">Up the Roll</label>
        <br>
        <label for="weltOption">Welt Option:</label>
        <select id="weltOption">
            <option value="no">No Welt</option>
            <option value="yes">Welt Included</option>
        </select>
        <br>
        <label for="quantity">Number of Cushions:</label>
        <input type="number" id="quantity" value="1" required>
        <br>
        <button type="button" onclick="calculateFabricYardage()">Calculate Fabric Yardage</button>
    </form>
    <p id="result"></p>
    <script>
        function calculateFabricYardage() {
            const cushionWidth = parseFloat(document.getElementById("cushionWidth").value);
            const cushionLength = parseFloat(document.getElementById("cushionLength").value);
            const cushionThickness = parseFloat(document.getElementById("cushionThickness").value);
            const fabricPattern = parseFloat(document.getElementById("fabricPattern").value);
            const fabricRollWidth = 54; // Width of fabric roll in inches
            const weltOption = document.getElementById("weltOption").value;
            const quantity = parseFloat(document.getElementById("quantity").value); // Number of cushions

            // Calculate fabric yardage for Custom Bay Window Cushions
            let fabricYardage;
            let bandWidth;
            let bandLength;
            let facesWidth;
            let facesLength;
            let cushionDiameterAdjusted;

            // Calculate yardage for square/rectangular cushions
            facesWidth = cushionWidth * 2  + fabricPattern;
            facesLength = cushionLength * 2 +  + fabricPattern;

            const orientation = document.querySelector('input[name="orientation"]:checked').value;

            if (orientation === "railroad") {
                fabricYardage = (facesWidth  + (facesLength / 36)) * quantity;
            } else {
                const totalWidth = facesWidth;
                const totalLength = facesLength + cushionLength + fabricPattern;

                if (totalLength < 27) {
                    fabricYardage = (totalWidth / 36) * quantity;
                } else {
                    bandWidth = totalWidth;
                    bandLength = totalLength;
                    const leftoverWidth = fabricRollWidth - bandWidth;

                    if (leftoverWidth >= bandWidth) {
                        fabricYardage = (bandWidth / 36) * quantity;
                    } else {
                        fabricYardage = ((facesWidth / 36) + (facesLength / 36)) * quantity;
                    }
                }
            }

            // Include welt if selected
            if (weltOption === "yes") {
                fabricYardage += 0.25 * quantity;
            }

            // Display the result
            document.getElementById("result").innerText = `Fabric Yardage Needed: ${fabricYardage.toFixed(2)} yards`;
        }
    </script>
</body>
</html>
 