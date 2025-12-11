<?php
require_once "./model/database.php";
require_once "./model/userModel.php";
require_once "./controller/userController.php";

if(isset($_GET["action"]) && !empty($_GET["action"])) {

    // switch($_GET["action"]) {
    //     case "addUser":
    //         registerForm();
    //         break;
    //     case "saveUser":
    //         extract($_POST);
    //         addUserC($_POST["nom"], $_POST["prenom"], $_POST["age"]);
    //         break;
    //     case "deleteUser":
    //         deleteUser($_GET["id"]);            
    //         break;
    // }

    if ($_GET['action'] == "updateUser") {
        extract($_POST);
        updateUserC($id, $nom, $prenom, $age);
    }

    if ($_GET['action'] == "editUser") {
        editUserForm($_GET['id']);
    }

    if ($_GET['action'] == "saveUser") {
        extract($_POST);
        addUserC($nom, $prenom, $age);
    }
    
    if ($_GET['action'] == "addUser") {
        registerForm();
    }

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        if ($_GET['action'] == "deleteUser") {
            deleteUserC($_GET['id']);
        }
    }

} else {
    index();
}