use student;

insert into Eleves (Nom, Prenom) values
("Fehavoir", "Isse"),
("Cerien", "Jean"),
("Javel", "Aude"),
("Zole", "Camille");

insert into Matieres (Libelle_Matiere) values
("Web"),
("C/C++"),
("Game Design");

insert into Examens (Libelle_Examens, ID_Matiere) values
("Casse-Brique", "2"),
("Pong", "2"),
("Intranet", "1"),
("Mastermind", "1"),
("Formulaire en DOM", "1"),
("Level design protypé", "3");

insert into Resultats values
("1", "1", "10"),
("1", "2", "3"),
("1", "3", "11"),
("1", "4", "0"),
("1", "5", "11"),
("1", "6", "12"),
("2", "1", "9"),
("2", "2", "12"),
("2", "3", "13"),
("2", "4", "2"),
("2", "5", "1"),
("2", "6", "19"),
("3", "1", "12"),
("3", "2", "1"),
("3", "3", "3"),
("3", "4", "5"),
("3", "5", "20"),
("3", "6", "0"),
("4", "1", "20"),
("4", "2", "19"),
("4", "3", "15"),
("4", "4", "17"),
("4", "5", "18"),
("4", "6", "16");