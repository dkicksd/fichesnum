<?php
// index.php - Home page for Fiches Numériques IA
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiches Numériques IA</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white text-center p-4">
        <h1>Fiches Numériques IA</h1>
        <p>Créez facilement des fiches numériques intelligentes avec l'aide de l'IA.</p>
    </header>
    <main class="max-w-md mx-auto p-4">
        <form id="note-form" class="flex flex-col gap-2">
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" required class="border border-gray-300 rounded p-2">
            <label for="content">Contenu</label>
            <textarea id="content" name="content" required class="border border-gray-300 rounded p-2"></textarea>
            <button type="submit" class="bg-blue-600 text-white rounded px-4 py-2">Enregistrer</button>
            <button type="button" id="ai-btn" class="bg-blue-600 text-white rounded px-4 py-2">Suggérer avec l'IA</button>
        </form>
        <section id="notes" class="mt-4"></section>
    </main>
    <script src="script.js"></script>
</body>
</html>
