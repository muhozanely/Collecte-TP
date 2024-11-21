<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicités - Collecte des Déchets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #007bff;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .ad-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .ad {
            background: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            width: 300px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .ad:hover {
            transform: scale(1.05);
        }
        h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        p {
            font-size: 1em;
            line-height: 1.5;
        }
        @media (max-width: 600px) {
            .ad {
                width: 90%;
            }
        }
    </style>
</head>
<body>
<?php
include "Menu.php";
include "connection.php";
?>

<header>
    <h1>Publicités de Collecte des Déchets</h1>
</header>

<div class="ad-container">
    <div class="ad">
        <h2>Collecte Écologique</h2>
        <p>Rejoignez notre service de collecte des déchets écologiques et contribuez à un avenir plus vert!</p>
<img src = "super_user/Image/dechet4.jpg"/>
    </div>
    <div class="ad">
        <h2>Réduction des Déchets</h2>
        <p>Participez à notre programme de réduction des déchets et économisez sur vos frais de collecte!</p>
    </div>
    <div class="ad">
        <h2>Services Personnalisés</h2>
        <p>Nous offrons des solutions sur mesure pour les entreprises et les particuliers. Contactez-nous!</p>
    </div>
    <div class="ad">
        <h2>Propreté Urbaine</h2>
        <p>Aidez-nous à garder nos villes propres. Inscrivez-vous à notre service de collecte régulière!</p>
    </div>
</div>
<?php
include "Footer.php";
?>

</body>
</html>