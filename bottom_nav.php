<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isLoggedIn = !empty($_SESSION['user']);
?>
<nav class="bottom-nav">
    <div class="bottom-nav-content">
        <a href="index.php" class="nav-item<?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? ' active' : ''; ?>">
            <i class="fas fa-home"></i>
            <span>Accueil</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-th-large"></i>
            <span>Catégories</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-search"></i>
            <span>Rechercher</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-shopping-cart"></i>
            <span>Panier</span>
        </a>
        <a href="#faq" class="nav-item">
            <i class="fas fa-question-circle"></i>
            <span>FAQ</span>
        </a>
        <?php if ($isLoggedIn): ?>
            <a href="#" class="nav-item">
                <i class="fas fa-user"></i>
                <span>Compte</span>
            </a>
        <?php else: ?>
            <a href="register.php" class="nav-item">
                <i class="fas fa-sign-in-alt"></i>
                <span>Connexion</span>
            </a>
        <?php endif; ?>
    </div>
</nav>
