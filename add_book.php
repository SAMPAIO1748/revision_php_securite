<?php

$bdd = new PDO("mysql:host=localhost;dbname=revision_php_securite", "root", "root");
$sql = "INSERT INTO book (title, writer, abstract) VALUES (:title, :writer, :abstract)";
$requete = $bdd->prepare($sql);
$requete->bindValue(":title", strip_tags($_POST['title']), PDO::PARAM_STR);
$requete->bindValue(":writer", strip_tags($_POST['writer']), PDO::PARAM_STR);
$requete->bindValue(":abstract", strip_tags($_POST['abstract']), PDO::PARAM_STR);
$requete->execute();
header('Location: index.php');
