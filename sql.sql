CREATE TABLE utilisateurs(
    id_utilisateur     INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nom_utilisateur     VARCHAR (25) NOT NUL,
    prenom_utilisateur     VARCHAR (25) NOT NUL,
    mail_utilisateur     VARCHAR (50) NOT NUL,
    password_utilisateur     VARCHAR (100) NOT NUL,
    id_type_utilisateur_types_utilisateurs     INT NOT NUL,
    id_constante_constantes     INT,
)ENGINE=InnoDB;

CREATE TABLE notes (
    id_note INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    date_note DATE NOT NULL,
    contenu_note TEXT NOT NULL,
    utilisateur_concerne INT NOT NULL,
    auteur_note INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE notes
ADD CONSTRAINT FK_notes_auteur_note
FOREIGN KEY (auteur_note)
REFERENCES utilisateurs(id_utilisateur);

ALTER TABLE notes
ADD CONSTRAINT FK_notes_utilisateur_concerne
FOREIGN KEY (utilisateur_concerne)
REFERENCES utilisateurs(id_utilisateur);


