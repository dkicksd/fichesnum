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
    <style>
        :root {
            /* Couleur de fond principale */
            --anthracite: #1a1f24;
            
            /* Palette psychologiquement attrayante */
            --trust-blue: #4A6FA5;        /* Confiance, fiabilité */
            --creative-orange: #FF7E6B;   /* Créativité, énergie */
            --calm-teal: #8DD9B9;         /* Calme, sérénité */
            --warm-yellow: #FFD166;       /* Optimisme, joie */
            --soft-purple: #9B8BFF;      /* Imagination, sagesse */
            
            /* Couleurs de texte */
            --text-white: #F5F5F5;
            --text-light: #E0E0E0;
            --text-gray: #B0B0B0;
            
            /* Autres variables */
            --shadow: rgba(0, 0, 0, 0.3);
            --transition: all 0.3s ease;
            --border-radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--anthracite);
            color: var(--text-white);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #1a1f24 0%, #0e1217 100%);
            padding-bottom: 70px; /* Espace pour la navbar mobile */
        }

        h1, h2, h3, h4 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .app-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
        }

        /* Header */
        header {
            background-color: rgba(26, 31, 36, 0.9);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px var(--shadow);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--trust-blue);
            text-decoration: none;
        }

        .logo i {
            font-size: 2rem;
            color: var(--soft-purple);
        }

        .nav-menu {
            display: flex;
            gap: 1.8rem;
        }

        .nav-menu a {
            color: var(--text-light);
            text-decoration: none;
            font-size: 1.1rem;
            transition: var(--transition);
            padding: 0.5rem 0;
            position: relative;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-menu a i {
            font-size: 1.1rem;
        }

        .nav-menu a:hover {
            color: var(--soft-purple);
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(to right, var(--soft-purple), var(--trust-blue));
            transition: var(--transition);
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 1.2rem;
        }

        .btn {
            background: linear-gradient(135deg, var(--trust-blue), #3a5c8a);
            color: var(--text-white);
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: 30px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            box-shadow: 0 4px 15px rgba(74, 111, 165, 0.3);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(74, 111, 165, 0.4);
        }

        .btn-accent {
            background: linear-gradient(135deg, var(--creative-orange), #e66c59);
        }

        .btn-accent:hover {
            box-shadow: 0 6px 20px rgba(255, 126, 107, 0.4);
        }

        .icon-btn {
            background: none;
            border: none;
            color: var(--text-light);
            font-size: 1.4rem;
            cursor: pointer;
            position: relative;
            transition: var(--transition);
        }

        .icon-btn:hover {
            color: var(--creative-orange);
            transform: scale(1.1);
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--creative-orange);
            color: var(--anthracite);
            font-size: 0.75rem;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            padding: 6rem 0 4rem;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -10%;
            width: 60%;
            height: 150%;
            background: radial-gradient(circle, rgba(155, 139, 255, 0.15) 0%, transparent 70%);
            z-index: -1;
        }

        .hero-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 3rem;
        }

        .hero-text {
            flex: 1;
            max-width: 600px;
        }

        .hero h1 {
            font-size: 3.2rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            background: linear-gradient(to right, var(--text-white), var(--soft-purple));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero p {
            font-size: 1.25rem;
            color: var(--text-gray);
            margin-bottom: 2.5rem;
            max-width: 500px;
        }

        .hero-buttons {
            display: flex;
            gap: 1.2rem;
            flex-wrap: wrap;
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            position: relative;
        }

        .hero-img-container {
            width: 100%;
            max-width: 500px;
            height: 300px;
            border-radius: var(--border-radius);
            background: linear-gradient(135deg, #2c3e50, #4a6491);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            text-align: center;
        }

        .hero-img-container i {
            font-size: 4rem;
            color: var(--warm-yellow);
            margin-bottom: 1.5rem;
        }

        .hero-img-container h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--text-white);
        }

        .hero-img-container p {
            color: var(--text-light);
            font-size: 1.1rem;
        }

        /* Categories */
        .categories {
            padding: 4rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3.5rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--text-white);
        }

        .section-title p {
            color: var(--text-gray);
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
        }

        .category-card {
            background: linear-gradient(145deg, #1e2329, #1a1f24);
            border-radius: var(--border-radius);
            padding: 2.5rem 1.5rem;
            text-align: center;
            transition: var(--transition);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.05);
            cursor: pointer;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            border-color: var(--trust-blue);
        }

        .category-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
        }

        .tech .category-icon { color: var(--trust-blue); }
        .business .category-icon { color: var(--creative-orange); }
        .health .category-icon { color: var(--calm-teal); }
        .education .category-icon { color: var(--soft-purple); }

        .category-card h3 {
            font-size: 1.4rem;
            margin-bottom: 0.8rem;
            color: var(--text-white);
        }

        .category-card p {
            color: var(--text-gray);
            font-size: 0.95rem;
        }

        /* Products */
        .products {
            padding: 4rem 0;
        }

        .products-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .filter-options {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            background-color: #1e2329;
            color: var(--text-light);
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .filter-btn.active, .filter-btn:hover {
            background: linear-gradient(135deg, var(--trust-blue), #3a5c8a);
            color: var(--text-white);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2.2rem;
        }

        .product-card {
            background: linear-gradient(145deg, #1e2329, #1a1f24);
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: var(--transition);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            border-color: var(--trust-blue);
        }

        .product-img {
            width: 100%;
            height: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .product-img-content {
            padding: 1.5rem;
            text-align: center;
            z-index: 2;
        }

        .product-img-content i {
            font-size: 4.5rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 1rem;
        }

        .product-img-content h3 {
            font-size: 1.6rem;
            color: var(--text-white);
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .product-content {
            padding: 1.8rem;
        }

        .product-category {
            font-size: 0.9rem;
            text-transform: uppercase;
            margin-bottom: 0.8rem;
            display: block;
            font-weight: 500;
        }

        .science .product-category { color: var(--trust-blue); }
        .programming .product-category { color: var(--creative-orange); }
        .economy .product-category { color: var(--calm-teal); }
        .history .product-category { color: var(--soft-purple); }

        .product-title {
            font-size: 1.35rem;
            margin-bottom: 0.8rem;
            color: var(--text-white);
        }

        .product-description {
            color: var(--text-gray);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            height: 4rem;
            overflow: hidden;
        }

        .product-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-price {
            font-weight: bold;
            font-size: 1.5rem;
            color: var(--text-white);
        }

        .product-rating {
            color: var(--warm-yellow);
            font-size: 0.9rem;
        }

        .add-to-cart {
            background: linear-gradient(135deg, var(--trust-blue), #3a5c8a);
            color: var(--text-white);
            border: none;
            padding: 0.8rem;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(74, 111, 165, 0.3);
        }

        .add-to-cart:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(74, 111, 165, 0.4);
        }

        /* Features */
        .features {
            padding: 5rem 0;
            background: linear-gradient(to right, #1a1f24, #1e2329);
            position: relative;
            overflow: hidden;
        }

        .features::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 60%;
            height: 150%;
            background: radial-gradient(circle, rgba(141, 217, 185, 0.1) 0%, transparent 70%);
            z-index: 0;
        }

        .features-content {
            position: relative;
            z-index: 2;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.03);
            border-radius: var(--border-radius);
            padding: 2.5rem;
            text-align: center;
            transition: var(--transition);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
            border-color: var(--calm-teal);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-white);
        }

        .feature-card p {
            color: var(--text-gray);
            font-size: 1.05rem;
        }

        /* FAQ Section */
        .faq {
            padding: 5rem 0;
            background: linear-gradient(to bottom, #1a1f24, #0e1217);
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            margin-bottom: 1.2rem;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .faq-question {
            background: linear-gradient(145deg, #1e2329, #1a1f24);
            padding: 1.5rem;
            font-size: 1.2rem;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }

        .faq-question:hover {
            background: linear-gradient(145deg, #232930, #1e2329);
        }

        .faq-question i {
            transition: var(--transition);
        }

        .faq-question.active i {
            transform: rotate(180deg);
        }

        .faq-answer {
            background: rgba(255, 255, 255, 0.03);
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }

        .faq-question.active + .faq-answer {
            padding: 1.5rem;
            max-height: 500px;
        }

        /* Footer */
        footer {
            background-color: #1e2329;
            padding: 4rem 0 1.5rem;
            margin-top: auto;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2.5rem;
            margin-bottom: 3rem;
        }

        .footer-column h3 {
            font-size: 1.4rem;
            margin-bottom: 1.8rem;
            position: relative;
            padding-bottom: 0.8rem;
            color: var(--text-white);
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(to right, var(--trust-blue), var(--soft-purple));
            border-radius: 3px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 1rem;
        }

        .footer-links a {
            color: var(--text-gray);
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-links a i {
            width: 20px;
            color: var(--calm-teal);
        }

        .footer-links a:hover {
            color: var(--calm-teal);
            padding-left: 5px;
        }

        .newsletter p {
            color: var(--text-gray);
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .newsletter-form {
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
        }

        .newsletter-input {
            flex: 1;
            padding: 0.9rem 1.2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background-color: rgba(255, 255, 255, 0.03);
            border-radius: 8px;
            color: var(--text-white);
            min-width: 200px;
        }

        .newsletter-input::placeholder {
            color: var(--text-gray);
        }

        .social-links {
            display: flex;
            gap: 1.2rem;
            margin-top: 1.5rem;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-gray);
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: linear-gradient(135deg, var(--trust-blue), var(--soft-purple));
            color: var(--text-white);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            color: var(--text-gray);
            font-size: 0.95rem;
        }

        /* Bottom Navigation */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(145deg, #1e2329, #1a1f24);
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            z-index: 1000;
            padding: 0.8rem 0;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.3);
        }

        .bottom-nav-content {
            display: flex;
            justify-content: space-around;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: var(--text-gray);
            font-size: 0.85rem;
            transition: var(--transition);
            padding: 0.5rem;
            border-radius: 10px;
            flex: 1;
        }

        .nav-item i {
            font-size: 1.4rem;
            margin-bottom: 0.3rem;
        }

        .nav-item:hover, .nav-item.active {
            color: var(--soft-purple);
            background: rgba(155, 139, 255, 0.1);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }
            
            .hero-text {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            
            .hero h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .header-content {
                flex-wrap: wrap;
                gap: 1rem;
            }
            
            .nav-menu {
                display: none;
            }
            
            .hero h1 {
                font-size: 2.3rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .products-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            body {
                padding-bottom: 70px;
            }
        }

        @media (min-width: 769px) {
            .bottom-nav {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .nav-actions {
                gap: 0.8rem;
            }
            
            .hero {
                padding: 4rem 0 2rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .bottom-nav-content {
                padding: 0 10px;
            }
            
            .nav-item {
                font-size: 0.7rem;
                padding: 0.3rem;
            }
            
            .nav-item i {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="app-container">
            <div class="header-content">
                <a href="#" class="logo">
                    <i class="fas fa-book-open"></i>
                    <span>fichesnum</span>
                </a>
                
                <nav class="nav-menu">
                    <a href="#"><i class="fas fa-home"></i> <span>Accueil</span></a>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="app-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Votre bibliothèque numérique premium</h1>
                    <p>Découvrez des milliers d'eBooks dans tous les domaines, disponibles en téléchargement immédiat. Connaissance, divertissement et expertise à portée de main.</p>
                    <div class="hero-buttons">
                        <a href="#" class="btn">Explorer la collection</a>
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
    <footer>
        <div class="app-container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Fichesnum</h3>
                    <p>Votre destination premium pour les eBooks de qualité dans tous les domaines de la connaissance.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Navigation</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Accueil</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Catégories</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Nouveautés</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Best-sellers</a></li>
                        <li><a href="#faq"><i class="fas fa-chevron-right"></i> FAQ</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Légal</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Conditions générales</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Politique de confidentialité</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Mentions légales</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Politique de cookies</a></li>
                    </ul>
                </div>
                
                <div class="footer-column newsletter">
                    <h3>Newsletter</h3>
                    <p>Inscrivez-vous pour recevoir les nouveautés, promotions et conseils de lecture.</p>
                    <form class="newsletter-form">
                        <input type="email" class="newsletter-input" placeholder="Votre adresse email">
                        <button type="submit" class="btn">S'abonner</button>
                    </form>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2023 Fichesnum.fr - Tous droits réservés
            </div>
        </div>
    </footer>

    <!-- Bottom Navigation -->
    <nav class="bottom-nav">
        <div class="bottom-nav-content">
            <a href="#" class="nav-item active">
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

    <script>
        // Add to cart functionality
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productCard = this.closest('.product-card');
                const title = productCard.querySelector('.product-title').textContent;
                const price = productCard.querySelector('.product-price').textContent;
                
                // Animation feedback
                const icon = this.querySelector('i');
                icon.className = 'fas fa-check';
                
                setTimeout(() => {
                    icon.className = 'fas fa-shopping-cart';
                }, 2000);
                
                // Update cart count
                const cartCount = document.querySelector('.cart-count');
                let count = parseInt(cartCount.textContent);
                count++;
                cartCount.textContent = count;
                
                // Show notification
                const notification = document.createElement('div');
                notification.innerHTML = `
                    <div style="position: fixed; bottom: 70px; right: 20px; background: var(--creative-orange); color: white; padding: 15px 25px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.3); z-index: 1000; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-check-circle"></i>
                        <span>Ajouté au panier: ${title}</span>
                    </div>
                `;
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.remove();
                }, 3000);
            });
        });

        // Category cards animation
        document.querySelectorAll('.category-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Filter buttons
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                this.classList.add('active');
            });
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });

        // PWA Installation Prompt
        window.addEventListener('beforeinstallprompt', (e) => {
            // Prevent the mini-infobar from appearing on mobile
            e.preventDefault();
            
            // Show custom install button
            const installBtn = document.createElement('button');
            installBtn.className = 'btn';
            installBtn.style.margin = '20px auto';
            installBtn.style.display = 'block';
            installBtn.innerHTML = '<i class="fas fa-download"></i> Installer l\'app';
            
            const featuresSection = document.querySelector('.features');
            featuresSection.parentNode.insertBefore(installBtn, featuresSection.nextSibling);
            
            installBtn.addEventListener('click', () => {
                // Hide our install button
                installBtn.style.display = 'none';
                // Show the install prompt
                e.prompt();
                // Wait for the user to respond to the prompt
                e.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the install prompt');
                    } else {
                        console.log('User dismissed the install prompt');
                    }
                });
            });
        });
        
        // Bottom Navigation Active State
        document.querySelectorAll('.bottom-nav .nav-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.bottom-nav .nav-item').forEach(el => {
                    el.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>
