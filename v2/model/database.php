<?php
$host = "localhost";
$port = "5432";
$user = "postgres";
$pwd = "passer";
$dbname = "isi_db";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $connexion = new PDO($dsn, $user, $pwd);
} catch (PDOException $e) {
    die($e->getMessage());
}
