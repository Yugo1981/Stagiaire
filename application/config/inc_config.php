<?php
session_start();
const APP_NAME="Stagiaire";
const APP_SLOGAN="Gestion des stagiaires";
$_SESSION["debug"]=false;

//connexion à la base de données
$link = mysqli_connect("localhost","root","","stagiaire");

require "inc_fonction.php";
