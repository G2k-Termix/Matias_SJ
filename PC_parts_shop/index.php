<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "pc_parts_shop";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }
}

class Part {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function displayParts($type) {
        $sql = "SELECT id, name, wattage, price, image_url FROM parts WHERE type='$type'";
        $result = $this->db->query($sql);

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

    public function calculateTotalWattage($partIds) {
        $totalWattage = 0;
        foreach ($partIds as $partId) {
            $sql = "SELECT wattage FROM parts WHERE id=$partId";
            $result = $this->db->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $totalWattage += $row['wattage'];
            }
        }
        return $totalWattage;
    }
}

$db = new Database();
$part = new Part($db);

$totalWattage = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['parts'])) {
    $totalWattage = $part->calculateTotalWattage($_POST['parts']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Parts Shop</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container">
    <header>
        <h1>PC Parts Shop</h1>
    </header>
    <form id="partsForm" action="index.php" method="post">
        <div class="part-category">
            <h2>RAM</h2>
            <?php $part->displayParts('RAM'); ?>
            <h2>Storage</h2>
            <?php $part->displayParts('Storage'); ?>
            <h2>GPU</h2>
            <?php $part->displayParts('GPU'); ?>
            <h2>CPU</h2>
            <?php $part->displayParts('CPU'); ?>
        </div>
        <button type="submit">Calculate Total Wattage</button>
    </form>
    <?php if ($totalWattage > 0): ?>
        <div id="result">
            <h2>Total Wattage: <?php echo $totalWattage; ?>W</h2>
        </div>
    <?php endif; ?>
</div>
<script rel="PC_parts_shop/assets/js/scripts.js"></script>
</body>
</html>
