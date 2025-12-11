<?php
require_once "./model/database.php";
require_once "./model/userModel.php";
require_once "./controller/userController.php";

$model = new userModel();
$controller = new userController($model);

if(isset($_GET["action"]) && !empty($_GET["action"])) { 

    if ($_GET['action'] == "updateUser") {
        extract($_POST);
        $controller->updateUserC($id, $nom, $prenom, $age);
    }

    if ($_GET['action'] == "editUser") {
        $controller->editUserForm($_GET['id']);
    }

    if ($_GET['action'] == "saveUser") {
        extract($_POST);
        $controller->addUserC($nom, $prenom, $age);
    }
    
    if ($_GET['action'] == "addUser") {
        $controller->registerForm();
    }

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        if ($_GET['action'] == "deleteUser") {
            $controller->deleteUserC($_GET['id']);
        }
    }

} else {
    $controller->index();
}