--
-- Base de données: Stagiaire
--
create database if not exists stagiaire default character set utf8 collate utf8_general_ci;
use stagiaire;
-- --------------------------------------------------------
-- Création des tables

set foreign_key_checks =0;

-- Table stagiaire
drop table if exists stagiaire;
create table stagiaire (
sta_id int not null auto_increment primary key,
sta_nom  varchar(100) not null,
sta_prenom varchar(100) not null,
sta_adresse varchar(500) not null,
sta_ville varchar(100) not null,
sta_code_postal varchar(100) not null,
sta_promotion varchar(100)
)engine=innodb;

set foreign_key_checks =1;
