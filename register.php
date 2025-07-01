<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inscription - Fichesnum">
    <meta name="theme-color" content="#1a1f24">
    <title>Inscription - Fichesnum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
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
                    <button class="icon-btn">
                        <i class="fas fa-user"></i>
                    </button>
                    <button class="icon-btn">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">3</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="app-container">
            <div class="signup-container">
                <h2>Créer un compte</h2>
                <form id="signup-form" action="#" method="post">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" required>

                    <label for="email">Adresse e-mail</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Mot de passe</label>
                    <div class="password-field">
                        <input type="password" id="password" name="password" required>
                        <i class="fas fa-eye toggle-password"></i>
                    </div>

                    <label for="confirm_password">Confirmer le mot de passe</label>
                    <div class="password-field">
                        <input type="password" id="confirm_password" name="confirm_password" required>
                        <i class="fas fa-eye toggle-password"></i>
                    </div>

                    <div id="password-strength" class="password-strength"></div>

                    <button type="submit" class="btn btn-accent">S'inscrire</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Bottom Navigation -->
    <nav class="bottom-nav">
        <div class="bottom-nav-content">
            <a href="index.php" class="nav-item">
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
        </div>
    </nav>

    <script src="script.js"></script>
</body>
</html>
