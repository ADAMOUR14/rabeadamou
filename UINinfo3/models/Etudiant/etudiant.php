<?php

require_once("../models/Provider.php");

final class Etudiant {

    public function __construct() {
        // Vous pouvez initier des propriétés ici si nécessaire.
    }

    // Méthode d'ajout d'un étudiant
    public function add(string $nom = "", string $prenom = "", $sexe = '', string $matricule = "", int $telephone = 0)
    {
        $cons = new Provider();
        $add = $cons->connection()->prepare("INSERT INTO etudiant(nom, prenom, sexe, matricule, telephone) VALUES (:nom, :prenom, :sexe, :matricule, :telephone)");
        $add->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'sexe' => $sexe,
            'matricule' => $matricule,
            'telephone' => $telephone
        ]);
    }

    // Méthode de mise à jour d'un étudiant
    public function edit(int $id = 0, string $nom = "", string $prenom = "", $sexe = '', string $matricule = "", int $telephone = 0)
    {
        $cons = new Provider();
        $edit = $cons->connection()->prepare("UPDATE etudiant SET nom = :nom, prenom = :prenom, sexe = :sexe, matricule = :matricule, telephone = :telephone WHERE id = :id");
        $edit->bindParam(':nom', $nom);
        $edit->bindParam(':prenom', $prenom);
        $edit->bindParam(':sexe', $sexe);
        $edit->bindParam(':matricule', $matricule);
        $edit->bindParam(':telephone', $telephone);
        $edit->bindParam(':id', $id, PDO::PARAM_INT);  // Assurez-vous que l'id est lié comme un entier
        $edit->execute();
    }

    // Méthode de récupération d'un étudiant par matricule
    public function getByMatricule(string $matricule = "")
    {
        $cons = new Provider();
        $query = $cons->connection()->prepare("SELECT * FROM etudiant WHERE matricule = :matricule");
        $query->bindParam(':matricule', $matricule, PDO::PARAM_STR);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ); // Retourne un étudiant par matricule
    }

    // Méthode pour obtenir tous les étudiants
    public function getAll()
    {
        $cons = new Provider();
        $edit = $cons->connection()->query("SELECT * FROM etudiant");
        $edit->execute();
        return $edit->fetchAll(PDO::FETCH_OBJ); // Retourne tous les étudiants sous forme d'un tableau d'objets
    }

    // Méthode pour supprimer un étudiant
    public function delete(int $id = 0)
    {
        $cons = new Provider();
        $delete = $cons->connection()->prepare("DELETE FROM etudiant WHERE id = :id");
        $delete->bindParam(':id', $id, PDO::PARAM_INT);  // Utilisation d'un paramètre lié pour éviter l'injection SQL
        $delete->execute();
    }
}

?>
