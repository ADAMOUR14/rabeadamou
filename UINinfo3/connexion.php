<?php

require_once("models/Provider.php");

$PDO = new Provider();

if (isset($_POST['connecter'])) {
    $cons = $PDO->connection()->prepare("SELECT * FROM login WHERE email = ? AND passe = ?");
    $cons->execute([$_POST['email'], $_POST['passe']]);
    $tab = $cons->fetch(PDO::FETCH_OBJ);

        header("Location: form.php");
}


if (isset($_POST['inscrire'])) {
    $cons = $PDO->connection()->prepare('INSERT INTO login (nom, prenom, email, sexe, passe) VALUES (:nom, :prenom, :email, :sexe, :passe)');
    if ($cons->execute([
        'nom' => $_POST["nom"],
        'prenom' => $_POST["prenom"],
        'email' => $_POST["email"],
        'sexe' => $_POST["sexe"],
        'passe' => $_POST["passe"]
    ])) {
        header("Location: index.php");
        exit();
    }
}
?>
