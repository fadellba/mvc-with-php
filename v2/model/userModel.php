<?php
class userModel
{
    function addUser($nom, $prenom, $age): void
    {
        global $connexion;
        $query = "INSERT INTO students (nom,prenom,age)
    VALUES (?,?,?)";
        $stmt = $connexion->prepare($query);
        $stmt->execute([$nom, $prenom, $age]);
        $stmt->closeCursor();
    }
    function getAllUser()
    {
        global $connexion;
        $query = "SELECT * FROM students";
        $stmt = $connexion->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    function updateUser($id, $nom, $prenom, $age): void
    {
        global $connexion;
        $query = "UPDATE students SET nom = ?, prenom = ?, age = ?
    WHERE id = ?";
        $stmt = $connexion->prepare($query);
        $stmt->execute([$nom, $prenom, $age,$id]);
        $stmt->closeCursor();
    }
    function deleteUser($id): void
    {
        global $connexion;
        $query = "DELETE FROM students WHERE id = ?";
        $stmt = $connexion->prepare($query);
        $stmt->execute([$id]);
        $stmt->closeCursor();
    }
    function getUserById($id)
    {
        global $connexion;
        $query = "SELECT * FROM students WHERE id = ?";
        $stmt = $connexion->prepare($query);
        $stmt->execute([$id]);
        return $stmt;
    }
}
