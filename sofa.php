<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>
<select id="sofaType">
    <option value="select">--Select a Sofa Type--</option>
    <option value="Sectional Sofas">Sectional Sofas</option>
    <option value="Chesterfield">Chesterfield</option>
    <option value="Lawson Sofa">Lawson Sofa</option>
    <option value="Tuxedo Sofa">Tuxedo Sofa</option>
    <option value="English Rolled Arm Sofa">English Rolled Arm Sofa</option>
    <option value="Bridgewater Sofa">Bridgewater Sofa</option>
    <option value="Cabriole Sofa">Cabriole Sofa</option>
    <option value="Camelback Sofa">Camelback Sofa</option>
    <option value="Chaise Lounge">Chaise Lounge</option>
    <option value="Sleeper Sofas">Sleeper Sofas</option>
    <option value="Loveseats">Loveseats</option>
    <option value="Divan">Divan</option>
    <option value="Settee Sofas">Settee Sofas</option>
    <option value="Recliner Sofas">Recliner Sofas</option>
    <option value="Futon">Futon</option>
    <option value="Knole Sofa">Knole Sofa</option>
    <option value="Mid-century Modern Sofa">Mid-century Modern Sofa</option>
</select>

<div id="sofaMeasurements"></div>

<script>
$(document).ready(function() {
    $("#sofaType").change(function() {
        var sofaType = $(this).val();
        $.ajax({
            url: 'get_sofa_measurements.php',
            type: 'post',
            data: {sofaType: sofaType},
            success: function(response) { 
                $("#sofaMeasurements").html(response);
            }
        });
    });
});
</script>

</body>
</html>
