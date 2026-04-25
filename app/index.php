<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>E-Commerce</title>
<style>
body { font-family: Arial; text-align:center; }
.card { border:1px solid #ddd; padding:20px; margin:20px; display:inline-block; }
</style>
</head>
<body>

<h1>🛒 E-Commerce Store</h1>

<?php
$result = $conn->query("SELECT * FROM products");

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<h2>".$row['name']."</h2>";
        echo "<p>₹".$row['price']."</p>";
        echo "</div>";
    }
} else {
    echo "No products found";
}
?>

</body>
</html>
