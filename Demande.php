<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Service</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .sugge {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            margin: 0 auto;
        }
        .tp {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            text-align: left;
            padding: 10px;
            color: #555;
        }
        td {
            padding: 10px;
        }
        input[type="text"],
        select {
            width: calc(100% - 20px);
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
            transform: translateY(-1px);
        }
        .max {
            max-width: 300px;
        }
        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }
            input[type="submit"],
            input[type="reset"] {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<?php
include "Menu.php";
include "connection.php";
?>

<h1>Si vous voulez faire des commandes, complétez le formulaire ici</h1>
<div class="sugge">
    <form method="POST" action="">
        <table class="tp">
            <tr>
                <th>Service que vous voulez</th>
                <td>
                    <select name="service" required>
                        <option value="" label="Choisir ici"></option>
                        <option value="Dechets menagers">Déchets ménagers</option>
                        <option value="Dechets organique">Déchets organique</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><p></p></td>
            </tr>
            <tr>
                <th>Nom</th>
                <td><input type="text" name="Nom" size="30" required /></td>
            </tr>
            <tr>
                <th>Email</th>
                <td class="max"><input type="text" name="email" size="30" required /></td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td class="max"><input type="text" name="Telephone" size="30" required /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="envoyer" value="Valider" />
                    <input type="reset" value="Annuler" />
                </td>
            </tr>
        </table>
    </form>
</div>

<?php
if(isset($_POST["envoyer"])){
    $recupNom = $_POST["Nom"];
    $recupemail = $_POST["email"];
    $recupTelephone = $_POST["Telephone"];
    $recupService = $_POST["service"];

    $insertutilisateur = "INSERT INTO utilisateurs(Nom, email, Telephone, service) VALUES ('$recupNom', '$recupemail', '$recupTelephone', '$recupService')";
    $bdd->exec($insertutilisateur);
    echo "<p style='text-align:center; color: green;'>Merci d'avoir accédé à nos services.</p>";
}
?>

<?php
include "Footer.php";
?>

</body>
</html>