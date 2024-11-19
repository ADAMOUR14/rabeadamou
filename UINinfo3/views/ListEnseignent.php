<?php
require_once("../models/Enseignant/enseignant.php");
$enseignant = new Enseignant();
$objet = $enseignant->getAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title> Liste des Enseignants </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="index.html">UINinfo3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-brand ms-auto mb-4 mb-lg-0">
                    
                    <li class="nav-item"><a class="nav-link" href="../index.php"> Connexion </a></li>
                    <li class="nav-item"><a class="nav-link" href="../inscrire.php">S'incrire</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br> <br> <br> <br>
    <h1 style="text-align: left;"> Liste des Enseignants </h1> <br>
    <p style="padding-rigth: 20%;"> <a href="../views/AjoutEnseignent.php"> Ajouter </a> </p>

    <table class="table table-bordered  table-hover">
        <thead>
            <tr class="warning">
                <th style="background-color : blue">&nbsp; ID &nbsp;</th>
                <th style="background-color : blue">&nbsp; NOM &nbsp;</th>
                <th style="background-color : blue">&nbsp; PRENOM &nbsp;</th>
                <th style="background-color : blue">&nbsp; SEXE &nbsp;</th>
                <th style="background-color : blue">&nbsp; EMAIL &nbsp;</th>
                <th style="background-color : blue">&nbsp; ADRESSE &nbsp;</th>
                <th style="background-color : blue">&nbsp; TELEPHONE &nbsp;</th>
                <th colspan="2" style="background-color : blue">&nbsp; OPERATION &nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                foreach ($objet as $key) {
                ?>
            <tr>
                <td>&nbsp; <?= $key->id ?> &nbsp;</td>
                <td>&nbsp; <?= $key->nom ?> &nbsp;</td>
                <td>&nbsp; <?= $key->prenom ?> &nbsp;</td>
                <td>&nbsp; <?= $key->sexe ?> &nbsp;</td>
                <td>&nbsp; <?= $key->email ?> &nbsp;</td>
                <td>&nbsp; <?= $key->adresse ?> &nbsp;</td>
                <td>&nbsp; <?= $key->telephone ?> &nbsp;</td>
                <td>&nbsp; <a href="../views/EditEnseignent.php?id=<?= $key->id ?>"> MODIFIER </a> &nbsp;</td>
                <td>&nbsp; <a href="../controllers/enseignent.php?action=supprimer&id=<?= $key->id ?>"> SUPPRIMER </a> &nbsp;</td>
            </tr>
        <?php
                }
        ?>
        </tr>
        </tbody>
    </table>
           
</body>

</html>