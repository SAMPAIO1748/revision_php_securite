<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Ajout d'un livre</h1>

    <form action="add_book.php" method="post">
        <label for="title">Titre</label>
        <input type="text" name="title" id="title">

        <label for="writer">Auteur</label>
        <input type="text" name="writer" id="writer">

        <label for="abstract">Résumé</label>
        <textarea name="abstract" id="abstract" cols="30" rows="10"></textarea>

        <input type="submit" value="Enregistrer">

    </form>

</body>

</html>