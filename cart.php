<?php
session_start();

// Database connection
$servername = "localhost";
$username = "drodz";
$password = "";
$dbname = "furnitureinvoices";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Code to handle deletion of cart items
if(isset($_POST['remove_id'])){
    $id = $_POST['remove_id'];
    unset($_SESSION['cart'][$id]);
    header("Location: view_cart.php"); 
    exit();  // make sure execution stops after redirect
}

// Code to insert cart items into the database
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    foreach ($_SESSION['cart'] as $id => $item) {
        
        // Dynamically extract keys and values
        $fields = array_keys($item);
        $values = array_values($item);

        // Sanitize values for SQL query
        $values = array_map(function($value) use ($conn) {
            return $conn->real_escape_string($value);
        }, $values);

        // Create SQL query
        $sql = sprintf(
            "INSERT INTO products (%s) VALUES ('%s')",
            implode(", ", $fields),
            implode("', '", $values)
        );
        
        try {
            if ($conn->query($sql) !== TRUE) {
                throw new Exception("Error: " . $conn->error);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Cart</title>
    <style>
        table {
            width: 100%;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <a href="navbar.php">Back to Home</a>
    <h1>Your Cart</h1>
  
    <?php
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        echo "<table>";
        // Get the first item to use for table headers
        $first_item = reset($_SESSION['cart']);
        echo "<tr>";
        foreach ($first_item as $key => $value) {
            echo "<th>" . ucwords(str_replace('_', ' ', $key)) . "</th>";
        }
        echo "<th>Action</th></tr>";

        foreach ($_SESSION['cart'] as $id => $item) {
            echo "<tr>";
            foreach ($item as $key => $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "<td><form action='view_cart.php' method='post'>
            <input type='hidden' name='remove_id' value='".$id."'>
            <input type='submit' value='Delete'>
        </form></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Your cart is empty.";
    }
    ?>
</body>
</html>
