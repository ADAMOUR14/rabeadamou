<?php

var_dump($_POST);  // Pour vérifier les données envoyées

require('../models/Salle/salle.php');

$salle = new Salle();

if (isset($_POST['ajouter'])) {
    // Vérification si 'Nbrplace' est défini et est un nombre entier
    if (isset($_POST['libelle']) && isset($_POST['Nbrplace']) && is_numeric($_POST['Nbrplace'])) {
        $Nbrplace = (int)$_POST['Nbrplace'];  // Conversion explicite en entier
        $salle->add($_POST['libelle'], $Nbrplace);
        header("Location:../views/ListSalle.php");
        exit;
    } else {
        echo "Veuillez fournir un nombre valide pour le nombre de places.";
    }
}

if (isset($_POST['modifier'])) {
    // Vérification similaire pour la modification
    if (isset($_POST['id']) && isset($_POST['libelle']) && isset($_POST['Nbrplace']) && is_numeric($_POST['Nbrplace'])) {
        $Nbrplace = (int)$_POST['Nbrplace'];  // Conversion explicite en entier
        $salle->edit($_POST['id'], $_POST['libelle'], $Nbrplace);
        header("Location:../views/ListSalle.php");
        exit;
    } else {
        echo "Veuillez fournir un nombre valide pour le nombre de places.";
    }
}

if (isset($_GET['action']) && $_GET['action'] == "supprimer") {
    if (isset($_GET['id'])) {
        $salle->delete($_GET['id']);
        header("Location:../views/ListSalle.php");
        exit;
    } else {
        echo "ID de la salle manquant pour la suppression.";
    }
}

?>
