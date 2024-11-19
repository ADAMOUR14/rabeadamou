<?php
require('../models/Enseignant/enseignant.php');

$enseignant = new Enseignant();

if (isset($_POST['ajouter'])) {
    $enseignant->add(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['sexe'],
        $_POST['email'],
        $_POST['adresse'],
        $_POST['telephone']
    );
    header("Location: ../views/ListEnseignent.php");
     // Ajout de exit pour éviter l'exécution de code supplémentaire
}

if (isset($_POST['modifier'])) {
    $enseignant->edit(
        $_POST['id'],
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['sexe'],
        $_POST['email'],
        $_POST['adresse'],
        $_POST['telephone']
    );
    header("Location: ../views/ListEnseignent.php");
}

if($_GET['action'] == "supprimer") {
    $enseignant->delete($_GET['id']);
    header("Location:../views/ListEnseignent.php");
}
?>
