<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page introuvable - Bâtisseurs & Propriétés</title>
    <style>
        :root {
            --primary-color: #FF8C00;  /* Orange - Call to action */
            --secondary-color: #1E3A8A; /* Bleu foncé - Thème professionnel */
            --dark-color: #121212;     /* Fond principal */
            --light-color: #1E1E1E;    /* Conteneurs */
            --gray-color: #A0A0A0;     /* Texte secondaire */
            --white: #FFFFFF;          /* Texte principal */
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--dark-color);
            color: var(--white);
            text-align: center;
            padding: 0;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), 
                              url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .container {
            background-color: rgba(30, 30, 30, 0.9);
            padding: 40px;
            border-radius: 8px;
            max-width: 600px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.5);
            border: 1px solid var(--secondary-color);
        }
        
        h1 {
            font-size: 5rem;
            margin: 0;
            color: var(--primary-color);
            font-weight: 700;
        }
        
        h2 {
            font-size: 1.8rem;
            margin: 15px 0;
            color: var(--white);
        }
        
        p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: var(--gray-color);
            line-height: 1.6;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary-color);
            color: var(--white);
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s;
            margin: 10px;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        .btn-secondary {
            background-color: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }
        
        .btn-secondary:hover {
            background-color: var(--primary-color);
            color: var(--white);
        }
        
        .icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .logo {
            max-width: 180px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Remplacez par votre logo -->
        <div class="icon">🏗️</div>
        <h1>404</h1>
        <h2>Propriété ou équipement introuvable</h2>
        <p>Nous n'avons pas trouvé ce que vous cherchiez. Peut-être que le bien a été vendu ou que l'équipement n'est plus disponible à la location.</p>
        
        <div class="action-buttons">
            <a href="/" class="btn">Retour à l'accueil</a>
            <a href="/listings" class="btn btn-secondary">Voir nos propriétés</a>
            <a href="/equipments" class="btn btn-secondary">Louer un équipement</a>
        </div>
    </div>
</body>
</html>