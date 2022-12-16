<?php

$bdd = new PDO("mysql:host=localhost;dbname=revision_php_securite", 'root', 'root');
$sql = "UPDATE book SET title = :title, writer = :writer, abstract = :abstract WHERE id = :id";
$requete = $bdd->prepare($sql);
$requete->bindValue(":title", $_POST['title'], PDO::PARAM_STR);
$requete->bindValue(":writer", $_POST['writer'], PDO::PARAM_STR);
$requete->bindValue(":abstract", $_POST['abstract'], PDO::PARAM_STR);
$requete->bindValue(":id", $_POST['id'], PDO::PARAM_INT);
$requete->execute();

var_dump($_POST);

var_dump($requete);

header('Location: index.php');
