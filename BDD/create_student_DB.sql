drop database if exists student;
create database student character set utf8;

use student;

drop table if exists Eleves;
create table Eleves(
    ID_Eleve int not null auto_increment primary key,
    Nom varchar(30) not null,
    Prenom varchar(30) not null
)engine=InnoDB;

drop table if exists Matieres;
create table Matieres(
    ID_Matiere int not null auto_increment primary key,
    Libelle_Matiere varchar(20) not null
)engine=InnoDB;

drop table if exists Examens;
create table Examens(
    ID_Examen int not null auto_increment primary key,
    Libelle_Examens varchar(50) not null,
    ID_Matiere int not null
)engine=InnoDB;

drop table if exists Resultats;
create table Resultats(
    ID_Eleve int not null,
    ID_Examen int not null,
    Note int not null,
    constraint PK_RESULTAT primary key (ID_Eleve, ID_Examen)
)engine=InnoDB;


alter table Examens add foreign key (ID_Matiere) references Matieres(ID_Matiere);
alter table Resultats add foreign key (ID_Eleve) references Eleves(ID_Eleve);
alter table Resultats add foreign key (ID_Examen) references Examens(ID_Examen);