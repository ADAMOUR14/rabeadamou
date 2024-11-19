<?php

require_once("../models/Provider.php");

final class Enseignant {

    public function __construct() {
        // Constructor logic (if needed)
    }

    // Add a new enseignant
    public function add(string $nom = "", string $prenom = "", $sexe = '', string $email = "", string $adresse = "", int $telephone = 0)
    {
        $cons = new Provider();
        $add = $cons->connection()->prepare("INSERT INTO enseignant (nom, prenom, sexe, email, adresse, telephone) VALUES (:nom, :prenom, :sexe, :email, :adresse, :telephone)");
        $add->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'sexe' => $sexe,
            'email' => $email,
            'adresse' => $adresse,  // Fixed the typo here (was 'adress' -> 'adresse')
            'telephone' => $telephone
        ]);
    }

    // Edit an existing enseignant
    public function edit(int $id = 0, string $nom = "", string $prenom = "", $sexe = '', string $email = "", string $adresse = "", int $telephone = 0)
    {
        $cons = new Provider();
        $edit = $cons->connection()->prepare("UPDATE enseignant SET nom = :nom, prenom = :prenom, sexe = :sexe, email = :email, adresse = :adresse, telephone = :telephone WHERE id = :id");
        $edit->bindParam(':nom', $nom);
        $edit->bindParam(':prenom', $prenom);
        $edit->bindParam(':sexe', $sexe);
        $edit->bindParam(':email', $email);
        $edit->bindParam(':adresse', $adresse);
        $edit->bindParam(':telephone', $telephone);
        $edit->bindParam(':id', $id);
        $edit->execute();
    }

    // Get an enseignant by matricule (needs to be implemented)
    public function getByMatricule($matricule)
    {
        $cons = new Provider();
        $query = $cons->connection()->prepare("SELECT * FROM enseignant WHERE matricule = :matricule");
        $query->execute(['matricule' => $matricule]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    // Get all enseignants
    public function getAll()
    {
        $cons = new Provider();
        $query = $cons->connection()->query("SELECT * FROM enseignant");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // Delete an enseignant by ID
    public function delete(int $id)
    {
        $cons = new Provider();
        $delete = $cons->connection()->prepare("DELETE FROM enseignant WHERE id = :id");
        $delete->execute(['id' => $id]);
    }
}
