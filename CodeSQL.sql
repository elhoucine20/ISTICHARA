CREATE TABLE ville(
    id int PRIMARY KEY AUTO_INCREMENT, 
    name varchar(100) NOT NULL
    );


create table avocats(
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT null,
  specialitée ENUM("Droit_pénal","civil","famille","affaires"),
  consultation_en_ligne bool DEFAULT true,
  annee_experience int ,
  ville_id int ,
  FOREIGN KEY (ville_id) REFERENCES ville(id)
  ON DELETE SET null
);

create table huissiers(
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT null,
  types_actes ENUM("Signification","exécution","constats"),
  annee_experience int ,
  ville_id int ,
  FOREIGN KEY (ville_id) REFERENCES ville(id)
  ON DELETE SET null

);


