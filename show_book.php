<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $id = $_GET['id'];

    $bdd = new PDO("mysql:host=localhost;dbname=revision_php_securite", "root", "root");
    $sql = "SELECT * FROM book WHERE id = :id";
    $requete = $bdd->prepare($sql);
    $requete->bindValue(":id", $id, PDO::PARAM_INT);
    $requete->execute();
    $resultat = $requete->fetch();

    //var_dump($resultat);


    ?>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Résumé</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                echo "<td>" . $resultat['title'] . "</td><td>" . $resultat['writer'] . "</td><td>" .
                    $resultat['abstract'] . "</td></tr>";
                ?>
            </tr>
        </tbody>
    </table>

</body>

</html>