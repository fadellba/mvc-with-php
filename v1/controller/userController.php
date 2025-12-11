<?php
function index(){
    $result = getAllUser();
    require_once "./view/users/list.php";
}
function registerForm(){
    require_once "./view/users/add.php";
}
function addUserC($nom, $prenom, $age): void
{
    addUser($nom, $prenom, $age);
    header("location: index.php");
}
function deleteUserC($id): void
{
    deleteUser($id);
    header("location: index.php");
}
function editUserForm($id)
{
    $result = getUserById($id);
    require_once "./view/users/edit.php";
}
function updateUserC($id, $nom, $prenom, $age): void
{
    updateUser($id, $nom, $prenom, $age);
    header("location: index.php");
}