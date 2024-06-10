<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pc_parts_shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function displayParts($type) {
    global $conn;
    $sql = "SELECT id, name, wattage, price, image_url FROM parts WHERE type='$type'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="part">';
            echo '<input type="checkbox" name="parts[]" value="' . $row['id'] . '" data-wattage="' . $row['wattage'] . '" data-price="' . $row['price'] . '">';
            echo '<img src="' . $row['image_url'] . '" alt="' . $row['name'] . '">';
            echo '<label>' . $row['name'] . ' - ' . $row['wattage'] . 'W ($' . $row['price'] . ')</label>';
            echo '</div>';
        }
    } else {
        echo "<p>No parts available.</p>";
    }
}

$totalWattage = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['parts'])) {
    foreach ($_POST['parts'] as $partId) {
        $sql = "SELECT wattage FROM parts WHERE id=$partId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $totalWattage += $row['wattage'];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Parts Shop</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
<div class="container">
    <header>
        <h1>PC Parts Shop</h1>
    </header>
    <form id="partsForm" action="index.php" method="post">
        <div class="part-category">
            <h2>CPU</h2>
            <?php displayParts('CPU'); ?>
        </div>
        <div class="part-category">
            <h2>GPU</h2>
            <?php displayParts('GPU'); ?>
        </div>
        <div class="part-category">
            <h2>RAM</h2>
            <?php displayParts('RAM'); ?>
        </div>
        <div class="part-category">
            <h2>Storage</h2>
            <?php displayParts('Storage'); ?>
        </div>
        <button type="submit">Calculate Total Wattage</button>
    </form>
    <?php if ($totalWattage > 0): ?>
        <div id="result">
            <h2>Total Wattage: <?php echo $totalWattage; ?>W</h2>
        </div>
    <?php endif; ?>
</div>
<script>
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            let totalWattage = 0;
            document.querySelectorAll('input[type="checkbox"]:checked').forEach(checked => {
                totalWattage += parseInt(checked.dataset.wattage);
            });
            document.getElementById('result').innerText = 'Total Wattage: ' + totalWattage + 'W';
        });
    });
</script>
</body>
</html>
