<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title>Etudiants</title>
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
      <a class="navbar-brand" href="index.html">UINinfo3</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="../index.php">Acceuil</a></li>
          <li class="nav-item"><a class="nav-link" href="../login.php"> Connexion </a></li>
          <li class="nav-item"><a class="nav-link" href="../inscrire.php">S'incrire</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <form action="../controllers/etudiant.php" method="POST">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h3 class="card-title text-center mb-5 fw-light fs-5">Etudiants</h3>
              <form action="connexion.php" method="POST">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="nom" placeholder="Nom" required>
                  <label for="floatingInput">Nom</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="prenom" placeholder="Prenom" required>
                  <label for="floatingInput">Prenom</label>
                </div>
                <div class="form-floating mb-3">
                  <select name="sexe" required>
                    <option value="">Veuillez choisir le sexe de l'étudiant(e)</option>
                    <option value="H">H</option>
                    <option value="F">F</option>
                  </select>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="matricule" placeholder="matricule" required>
                  <label for="floatingInput">Matricule</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="telephone" placeholder="telephone" required>
                  <label for="floatingInput">Téléphone</label>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="ajouter"> Ajouter </button>
                </div>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>