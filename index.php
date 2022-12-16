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

    $bdd = new PDO("mysql:host=localhost;dbname=revision_php_securite", "root", "root");
    $sql = "SELECT * FROM book";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultat = $requete->fetchAll();

    //var_dump($resultat);

    ?>

    <h1>Les livres</h1>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($resultat as $book) {
                echo "<tr><td><a href='show_book.php?id=" . $book['id'] . "'>" . $book['title'] . "</a></td><td>" .
                    $book['writer'] . "</td><td><a href='update_form_book.php?id=" . $book['id'] .
                    "'>Modifier le livre</a></td><td><a href='delete_book.php?id=" . $book['id'] .
                    "'>Supprimer le livre</a></td></tr>";
            }

            ?>

        </tbody>
    </table>

</body>

</html>