<?php
session_start();
$isLoggedIn = isset($_SESSION['user']) && !empty($_SESSION['user']);
?>
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
    <?php include 'header.php'; ?>

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
    <?php include 'bottom_nav.php'; ?>

    <script src="script.js"></script>
</body>
</html>
