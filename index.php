<?php
// index.php - Home page for Fiches Numériques IA
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiches Numériques IA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Fiches Numériques IA</h1>
        <p>Créez facilement des fiches numériques intelligentes avec l'aide de l'IA.</p>
    </header>
    <main>
        <form id="note-form">
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" required>
            <label for="content">Contenu</label>
            <textarea id="content" name="content" required></textarea>
            <button type="submit">Enregistrer</button>
            <button type="button" id="ai-btn">Suggérer avec l'IA</button>
        </form>
        <section id="notes"></section>
    </main>
    <script src="script.js"></script>
</body>
</html>
