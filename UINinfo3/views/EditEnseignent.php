<?php
require_once("../models/Provider.php");
$id = $_GET['id'];
$cons = new Provider();
$edit = $cons->connection()->prepare("SELECT * FROM enseignant WHERE id = :id");
$edit->bindParam(':id', $id);
$edit->execute();
$key = $edit->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Modification Enseignant</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="index.html">UINinfo3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="../login.php">Connexion</a></li>
                    <li class="nav-item"><a class="nav-link" href="../inscrire.php">S'inscrire</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="../controllers/enseignent.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h3 class="card-title text-center mb-5 fw-light fs-5">Enseignant</h3>
                            <input type="hidden" name="id" value="<?= $key->id ?>">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="nom" value="<?= $key->nom ?>" required>
                                <label for="floatingInput">Nom</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="prenom" value="<?= $key->prenom ?>" required>
                                <label for="floatingInput">Prenom</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="sexe" class="form-control" required>
                                    <option value="">Veuillez choisir le sexe de l'enseignant(e)</option>
                                    <option value="H" <?= ($key->sexe == 'H') ? 'selected' : '' ?>>H</option>
                                    <option value="F" <?= ($key->sexe == 'F') ? 'selected' : '' ?>>F</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email" value="<?= $key->email ?>" required>
                                <label for="floatingInput">E-mail</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="adresse" value="<?= $key->adresse ?>" required>
                                <label for="floatingInput">Adresse</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="telephone" value="<?= $key->telephone ?>" required>
                                <label for="floatingInput">Téléphone</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-info" type="submit" name="modifier">Modifier</button>
                            </div>
                            <hr class="my-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
