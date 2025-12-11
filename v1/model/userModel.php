<?php
function addUser($nom,$prenom,$age) : void {
    global $connexion;
    $query = "INSERT INTO students (nom,prenom,age)
    VALUES ('$nom','$prenom',$age)";
    pg_query($connexion, $query);
}
function getAllUser(){
    global $connexion;
    $query = "SELECT * FROM students";
    return pg_fetch_all(pg_query($connexion, $query));
}
function updateUser($id, $nom, $prenom, $age): void
{
    global $connexion;
    $query = "UPDATE students SET nom = '$nom', prenom = '$prenom', age = '$age'
    WHERE id = $id";
    pg_query($connexion, $query);
}
function deleteUser($id): void
{
    global $connexion;
    $query = "DELETE FROM students WHERE id = $id";
    pg_query($connexion, $query);
}
function getUserById($id)
{
    global $connexion;
    $query = "SELECT * FROM students WHERE id = $id";
    return pg_fetch_assoc(pg_query($connexion, $query));
}

