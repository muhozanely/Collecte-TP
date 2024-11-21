<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
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
        input[type="date"],
        textarea {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
        }
        .form-control {
            margin-top: 15px;
        }
    </style>
</head>
<body>

<?php
include "Menu.php";
include "connection.php";
?>

<h1>Complétez le formulaire ici</h1>
<div class="sugge">
    <form method="POST" action="">
        <table class="tp">
            <tr>
                <td><p></p></td>
            </tr>
            <tr>
                <th>Date</th>
                <td><input type="date" name="Date" size="30" required /></td>
            </tr>
            <tr>
                <td colspan="2" class="form-control">
                    <label for="commentaire">Commentaires</label>
                    <textarea name="commentaire" id="descr" cols="30" rows="5" required></textarea>
                </td>
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
    $recupDate = $_POST["Date"];
    $recupComme = $_POST["commentaire"];
    
    $insertcommentaire = "INSERT INTO feedback(Date, commentaire) VALUES ('$recupDate', '$recupComme')";
    $bdd->exec($insertcommentaire);
}
?>

</body>
</html>

<?php
include "Footer.php";
?>