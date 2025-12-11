<?php
$serveur = "localhost";
$port = "5432";
$user = "postgres";
$pwd = "passer";
$dbname = "isi_db";

$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

if(!$connexion) {
    echo "echec";
} else {
    echo "succes";
}
