<?php
session_start();
$isLoggedIn = isset($_SESSION['user']) && !empty($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fichesnum - Votre boutique d'eBooks premium">
    <meta name="theme-color" content="#1a1f24">
    <title>Fichesnum - eBooks Premium</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="app-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Votre bibliothèque numérique premium</h1>
                    <p>Découvrez des milliers d'eBooks dans tous les domaines, disponibles en téléchargement immédiat. Connaissance, divertissement et expertise à portée de main.</p>
                    <div class="hero-buttons">
                        <a href="collection.php" class="btn">Explorer la collection</a>
                        <a href="#" class="btn btn-accent">Voir les best-sellers</a>
                    </div>
                </div>
                
                <div class="hero-image">
                    <div class="hero-img-container">
                        <i class="fas fa-book-reader"></i>
                        <h2>Lisez. Apprenez. Grandissez.</h2>
                        <p>Votre prochain livre préféré vous attend</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="categories">
        <div class="app-container">
            <div class="section-title">
                <h2>Catégories populaires</h2>
                <p>Parcourez nos collections thématiques pour trouver les eBooks qui correspondent à vos centres d'intérêt</p>
            </div>
            
            <div class="categories-grid">
                <div class="category-card tech">
                    <div class="category-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Technologie</h3>
                    <p>Programmation, IA, cybersécurité et innovations tech</p>
                </div>
                
                <div class="category-card business">
                    <div class="category-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Business</h3>
                    <p>Management, entrepreneuriat, finance et marketing</p>
                </div>
                
                <div class="category-card health">
                    <div class="category-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Santé</h3>
                    <p>Bien-être, nutrition, médecine et développement personnel</p>
                </div>
                
                <div class="category-card education">
                    <div class="category-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Éducation</h3>
                    <p>Ressources pédagogiques, méthodes d'apprentissage</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="products">
        <div class="app-container">
            <div class="products-header">
                <h2>Nouveautés à découvrir</h2>
                <div class="filter-options">
                    <button class="filter-btn active"><i class="fas fa-star"></i> Populaires</button>
                    <button class="filter-btn"><i class="fas fa-fire"></i> Nouveautés</button>
                    <button class="filter-btn"><i class="fas fa-tag"></i> Promotions</button>
                </div>
            </div>
            
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-img" style="background:linear-gradient(135deg, #2c3e50, #4a6fa5);">
                        <div class="product-img-content">
                            <i class="fas fa-brain"></i>
                            <h3>Neurosciences</h3>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category science">Science</span>
                        <h3 class="product-title">Comprendre le cerveau</h3>
                        <p class="product-description">Découvrez les mystères du cerveau humain et ses capacités extraordinaires à travers les dernières recherches.</p>
                        <div class="product-footer">
                            <div>
                                <div class="product-price">18,99€</div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <button class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-img" style="background:linear-gradient(135deg, #8e44ad, #3498db);">
                        <div class="product-img-content">
                            <i class="fas fa-code"></i>
                            <h3>Python Avancé</h3>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category programming">Programmation</span>
                        <h3 class="product-title">Maîtrise du Python 3</h3>
                        <p class="product-description">Devenez expert en Python avec des techniques avancées et des projets concrets pour maîtriser ce langage polyvalent.</p>
                        <div class="product-footer">
                            <div>
                                <div class="product-price">22,50€</div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <button class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-img" style="background:linear-gradient(135deg, #27ae60, #8DD9B9);">
                        <div class="product-img-content">
                            <i class="fas fa-seedling"></i>
                            <h3>Finance</h3>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category economy">Économie</span>
                        <h3 class="product-title">Investir intelligemment</h3>
                        <p class="product-description">Stratégies éprouvées pour bâtir un patrimoine solide et investir sur les marchés financiers en toute confiance.</p>
                        <div class="product-footer">
                            <div>
                                <div class="product-price">16,75€</div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <button class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-img" style="background:linear-gradient(135deg, #9B8BFF, #6c5ce7);">
                        <div class="product-img-content">
                            <i class="fas fa-history"></i>
                            <h3>Histoire</h3>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category history">Histoire</span>
                        <h3 class="product-title">Les grandes civilisations</h3>
                        <p class="product-description">Un voyage à travers les civilisations qui ont façonné notre monde moderne, de l'Égypte ancienne à nos jours.</p>
                        <div class="product-footer">
                            <div>
                                <div class="product-price">14,99€</div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <button class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="features">
        <div class="app-container">
            <div class="section-title">
                <h2>Pourquoi choisir Fichesnum ?</h2>
                <p>Une expérience d'achat et de lecture incomparable pour vos eBooks préférés</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon" style="color: var(--trust-blue);">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Accès instantané</h3>
                    <p>Téléchargez vos eBooks immédiatement après l'achat, sans attente</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon" style="color: var(--creative-orange);">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Mises à jour gratuites</h3>
                    <p>Recevez gratuitement les nouvelles éditions de vos eBooks achetés</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon" style="color: var(--calm-teal);">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Multi-appareils</h3>
                    <p>Lisez sur tous vos appareils, synchronisez votre progression</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon" style="color: var(--soft-purple);">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Paiement sécurisé</h3>
                    <p>Transactions 100% sécurisées avec cryptage de niveau bancaire</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="faq">
        <div class="app-container">
            <div class="section-title">
                <h2>Questions Fréquentes</h2>
                <p>Trouvez les réponses aux questions les plus posées sur notre boutique</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Comment télécharger mes eBooks après achat ?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Après votre achat, vous recevrez un email avec un lien de téléchargement. Vous pouvez également accéder à vos eBooks depuis votre compte client dans la section "Mes téléchargements". Tous les eBooks sont disponibles au format PDF et EPUB.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Quels sont les modes de paiement acceptés ?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Nous acceptons les cartes de crédit/débit (Visa, MasterCard, American Express), PayPal, et les virements bancaires. Toutes les transactions sont sécurisées par un cryptage SSL de niveau bancaire.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Puis-je lire mes eBooks sur plusieurs appareils ?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Absolument ! Vous pouvez télécharger vos eBooks sur jusqu'à 5 appareils différents. Vos livres sont accessibles sur smartphones, tablettes, ordinateurs et liseuses sans aucune restriction.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Comment fonctionne la garantie satisfait ou remboursé ?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Nous offrons une garantie satisfait ou remboursé de 30 jours. Si vous n'êtes pas satisfait d'un eBook, contactez notre service client avec votre numéro de commande et nous procéderons au remboursement intégral sans poser de questions.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Est-ce que je peux offrir un eBook à quelqu'un ?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Oui, lors du processus d'achat, vous aurez l'option "Offrir ce produit". Vous pourrez alors entrer l'adresse email du destinataire et un message personnel. Le destinataire recevra un email avec son cadeau !</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bottom Navigation -->
    <?php include 'bottom_nav.php'; ?>

    <script src="script.js"></script>
</body>
</html>
