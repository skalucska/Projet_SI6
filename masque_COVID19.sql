create database masque_COVID19;
  use masque_COVID19;

create table habitants
  (
    id_ha int primary key not null auto increment,
    nom varchar(250),
    prenom varchar(250),
    mail varchar(250),
    mdp varchar(250),
    num_tel int(10),
    nbr_foyer int(11),
    n_rue varchar(10),
    rue varchar(250),
    code_postal char(5),
    ville varchar(100),
    rdv datetime,
    fk_et int(11)

  );

create table personnel_mairie
    (
      id_pe int primary key not null auto increment,
      nom varchar(250),
      prenom varchar(250),
      mail varchar(250),
      mdp varchar(250)
    );

create table etat_demande
  (
    id_et int primary key not null auto increment,
    accepter char(3),
    refuser char(3),
    en_cour char(3)
  );

alter table habitants add foreign key (fk_et) references etat_demande(id_et);
alter table personnel_mairie add foreign key (fk_et) references etat_demande(id_et);

insert into personnel_mairie (id_pe, nom, prenom, mail, mdp)
  values
  (lucas, perreaux, lucas.perreaux@ltpdampierre.fr, lucas),
  (pierson, nicolas, nicolas.pierson@ltpdampierre.fr, nicolas),
  (pelgrim, nathan, nathan.pelgrim@ltpdampierre.fr, nathan);

insert into etat_demande (id_et, accepter, refuser, en_cours)
  values
  (acc),
  (ref),
  (enc);
