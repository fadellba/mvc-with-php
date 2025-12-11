<?php
class userController
{
    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    function index()
    {
        $result = $this->model->getAllUser();
        require_once "./view/users/list.php";
    }
    function registerForm()
    {
        require_once "./view/users/add.php";
    }
    function addUserC($nom, $prenom, $age): void
    {
        $this->model->addUser($nom, $prenom, $age);
        header("location: index.php");
    }
    function deleteUserC($id): void
    {
        $this->model->deleteUser($id);
        header("location: index.php");
    }
    function editUserForm($id)
    {
        $result = $this->model->getUserById($id);
        $result = $result->fetch(PDO::FETCH_OBJ);
        require_once "./view/users/edit.php";
    }
    function updateUserC($id, $nom, $prenom, $age): void
    {
        $this->model->updateUser($id, $nom, $prenom, $age);
        header("location: index.php");
    }
}