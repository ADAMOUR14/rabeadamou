

CREATE TABLE IF NOT EXISTS enseignant(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    sexe CHAR(1) NOT NULL CHECK(sexe in('H', 'F')),
    email VARCHAR(30) NOT NULL,
    adresse VARCHAR(50) NOT NULL,
    telephone Int (15) NOT NULL
);
CREATE TABLE IF NOT EXISTS etudiant(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    sexe CHAR(1) NOT NULL CHECK(sexe in('H', 'F')),
    matricule VARCHAR(50) NOT NULL,
    telephone Int (15) NOT NULL
);
CREATE TABLE IF NOT EXISTS Salle(
    id INT PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(50) NOT NULL,
    Nbrplace INTEGER NOT NULL DEFAULT 0
);
CREATE TABLE IF NOT EXISTS Cour(
    id INT PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(50) NOT NULL,
    niveau VARCHAR(50) NOT NULL,
    idEn INT NOT NULL,
    idSal INT NOT NULL,
    Foreign Key (idEn) REFERENCES Enseignent (id) ON DELETE CASCADE,
    Foreign Key (idSal) REFERENCES Salle (id) ON DELETE CASCADE
);
CREATE TABLE login ( 
    nom VARCHAR(50) NOT NULL, 
    prenom VARCHAR(50) NOT NULL, 
    email VARCHAR(50) NOT NULL, 
    sexe VARCHAR(50) NOT NULL, 
    passe VARCHAR(214) NOT NULL );