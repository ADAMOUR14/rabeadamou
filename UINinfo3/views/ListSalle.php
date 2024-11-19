<?php
require_once("../models/Salle/salle.php");
$salle = new Salle();
$objet = $salle->getAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title> Liste des Salles </title>
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
                    
                    <li class="nav-item"><a class="nav-link" href="../index.php"> Connexion </a></li><br>
                    <li class="nav-item"><a class="nav-link" href="../inscrire.php">S'incrire</a></li><br>
                </ul>
            </div>
        </div>
    </nav>
    <br> <br> <br> <br>
    <h1 style="text-align: left;"> Liste des Salles </h1> <br>
    <p style="padding-right: 20%;"> <a href="../views/AjoutSalle.php"> Ajouter </a> </p>
    <table class="table table-bordered  table-hover">
        <thead>
            <tr>
                <th style="background-color : blue">&nbsp; ID &nbsp;</th>
                <th style="background-color : blue">&nbsp; LIBELLE &nbsp;</th>
                <th style="background-color : blue">&nbsp; PLACE &nbsp;</th>
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
                <td>&nbsp; <?= $key->libelle ?> &nbsp;</td>
                <td>&nbsp; <?= $key->Nbrplace ?> &nbsp;</td>
                <td style="color: green;">&nbsp; <a href="../views/EditSalle.php?id=<?= $key->id ?>"> MODIFIER </a> &nbsp;</td>
                <td>&nbsp; <a href="../controllers/salle.php?action=supprimer&id=<?= $key->id ?>"> SUPPRIMER </a> &nbsp;</td>
            </tr>
        <?php
                }
        ?>
        </tr>
        </tbody>
    </table>
</body>

</html>