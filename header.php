<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isLoggedIn = !empty($_SESSION['user']);
?>
<header>
    <div class="app-container">
        <div class="header-content">
            <a href="index.php" class="logo">
                <i class="fas fa-book-open"></i>
                <span>fichesnum</span>
            </a>
            <nav class="nav-menu">
                <a href="index.php"><i class="fas fa-home"></i> <span>Accueil</span></a>
                <a href="#"><i class="fas fa-th-large"></i> <span>Catégories</span></a>
                <a href="#"><i class="fas fa-fire"></i> <span>Nouveautés</span></a>
                <a href="#"><i class="fas fa-trophy"></i> <span>Best-sellers</span></a>
                <a href="#faq"><i class="fas fa-question-circle"></i> <span>FAQ</span></a>
            </nav>
            <div class="nav-actions">
                <button class="icon-btn">
                    <i class="fas fa-search"></i>
                </button>
                <?php if ($isLoggedIn): ?>
                    <a href="#" class="icon-btn"><i class="fas fa-user"></i></a>
                <?php else: ?>
                    <a href="register.php" class="icon-btn"><i class="fas fa-sign-in-alt"></i></a>
                <?php endif; ?>
                <button class="icon-btn">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">3</span>
                </button>
            </div>
        </div>
    </div>
</header>
