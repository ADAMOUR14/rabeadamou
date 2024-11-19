<?php

    require_once("../models/Provider.php");

    final class Salle {

        public function __construct() {
            
        }

        public function add(string $libelle = "", int $Nbrplace = 0)
        {
            $cons = new Provider();
            $add = $cons->connection()->prepare("INSERT INTO salle(libelle, Nbrplace) VALUES (:libelle, :Nbrplace)");
            $add->execute([
                'libelle' => $libelle,
                'Nbrplace' => $Nbrplace,
            ]);
        }

        public function edit(int $id = 0, string $libelle = "", int $Nbrplace = 0)
        {
            $cons = new Provider();
            $edit = $cons->connection()->prepare("UPDATE salle SET libelle = :libelle, Nbrplace = :Nbrplace WHERE id = :id");
            $edit->bindParam(':libelle', $libelle);
            $edit->bindParam(':Nbrplace', $Nbrplace);
            $edit->bindParam(':id', $id);
            $edit->execute();
        }


        public function getByMatricule(int $id = 0)
        {

        }

        public function getAll()
        {
            $cons = new Provider();
            $edit = $cons->connection()->query("SELECT * FROM salle");
            $edit->execute();
            return $edit->fetchAll(PDO::FETCH_OBJ);
        }

        public function delete(int $id = 0)
        {
            $cons = new Provider();
            $delete = $cons->connection()->prepare("DELETE FROM salle WHERE id = $id");
            $delete->execute();
        }
        
    }
    
