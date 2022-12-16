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

    $bdd = new PDO("mysql:host=localhost;dbname=revision_php_securite", "root", 'root');
    $sql = "SELECT * FROM book WHERE id = :id";
    $requete = $bdd->prepare($sql);
    $requete->bindValue(":id", $id, PDO::PARAM_INT);
    $requete->execute();

    $resultat = $requete->fetch();

    // var_dump($resultat);
    ?>

    <form action="update_book.php" method="post">
        <input type="number" name="id" id="id" value="<?php echo $resultat['id'] ?>" style="display: none">

        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="<?php echo $resultat['title'] ?>">

        <label for="writer">Auteur</label>
        <input type="text" name="writer" id="writer" value="<?php echo $resultat['writer'] ?>">

        <label for="abstract">Résumé</label>
        <textarea name="abstract" id="abstract" cols="30" rows="10"><?php
                                                                    echo $resultat['abstract'];
                                                                    ?></textarea>

        <input type="submit" value="Enregistrer">
    </form>

</body>

</html>