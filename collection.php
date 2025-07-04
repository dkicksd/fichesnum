<?php
session_start();
$isLoggedIn = isset($_SESSION['user']) && !empty($_SESSION['user']);

$ebooks = [
    [
        'title' => 'Le Pouvoir du Fromage',
        'description' => "Plongez dans ce récit interactif et découvrez comment le fromage peut révolutionner votre quotidien.",
        'icon' => 'fa-cheese',
        'bg' => '#9B8BFF, #ffe360',
        'file' => 'ebook/LePouvoirduFromage.php'
    ],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Collection d'eBooks - Fichesnum">
    <meta name="theme-color" content="#1a1f24">
    <title>Collection d'eBooks - Fichesnum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.php'; ?>
<main class="products" style="padding-top:2rem;">
    <div class="app-container">
        <div class="section-title">
            <h2>Notre collection</h2>
            <p>Parcourez nos ebooks et accédez à chaque fiche détaillée.</p>
        </div>
        <div class="products-grid">
            <?php foreach ($ebooks as $book): ?>
            <div class="product-card">
                <div class="product-img" style="background:linear-gradient(135deg, <?= $book['bg']; ?>);">
                    <div class="product-img-content">
                        <i class="fas <?= $book['icon']; ?>"></i>
                        <h3><?= $book['title']; ?></h3>
                    </div>
                </div>
                <div class="product-content">
                    <h3 class="product-title"><?= $book['title']; ?></h3>
                    <p class="product-description"><?= $book['description']; ?></p>
                    <div class="product-footer">
                        <a href="<?= $book['file']; ?>" class="btn btn-accent">Voir la fiche</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php include 'bottom_nav.php'; ?>
<script src="script.js"></script>
</body>
</html>
