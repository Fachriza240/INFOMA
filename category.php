<?php
$category = $_GET['category'] ?? '';
$items = [
    'vehicles' => [
        ['title' => 'Bandung Rent', 'location' => 'Jl. Sukapura No. 99', 'price' => 'Rp. 200.000'],
        ['title' => 'ABY Transport', 'location' => 'Jl. Sukapura No. 77', 'price' => 'Rp. 150.000']
    ],
    'public_spaces' => [
        ['title' => 'Lalana Space', 'location' => 'Jl. Sukapura No. 75', 'price' => 'Rp. 250.000'],
        ['title' => 'Dago Park', 'location' => 'Jl. Sukapura No. 55', 'price' => 'Rp. 150.000']
    ]
];
$currentItems = $items[$category] ?? [];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infoma - <?php echo ucfirst($category); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php" class="back">Back to Home</a>
    </header>
    <main>
        <h2><?php echo ucfirst($category); ?></h2>
        <div class="items">
            <?php foreach ($currentItems as $item): ?>
                <div class="item">
                    <h3><?php echo $item['title']; ?></h3>
                    <p>Location: <?php echo $item['location']; ?></p>
                    <p>Price: <?php echo $item['price']; ?></p>
                    <button onclick="openModal('<?php echo $item['title']; ?>')">View Details</button>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modal-title"></h2>
            <p>More details about this item will be displayed here.</p>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
