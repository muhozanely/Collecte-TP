<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur notre page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #ecf0f1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            color: #333;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            margin-bottom: 20px;
            color: #2c3e50;
        }

        p {
            margin-bottom: 30px;
            font-size: 18px;
            color: #555;
        }

        .button {
            background-color: #3498db;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            text-decoration: none; /* Pour enlever le soulignement */
        }

        .button:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .button:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <?php
    include "connection.php";
    ?>
    <div class="container">
        <h1>Bienvenue sur notre page</h1>
        <p>Nous sommes ravis de vous accueillir dans notre entreprise de collecte des déchets !</p>
        <a href="Menu.php" class="button">Accéder à nos services</a>
    </div>
</body>
</html>
 
