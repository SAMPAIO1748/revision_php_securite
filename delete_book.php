<?php

$id = $_GET['id'];

$bdd = new PDO("mysql:host=localhost;dbname=revision_php_securite", "root", "root");
$sql = "DELETE FROM book WHERE id = :id";
$requete = $bdd->prepare($sql);
$requete->bindValue(':id', $id, PDO::PARAM_INT);
$requete->execute();

header('Location: index.php');
