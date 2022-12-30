<?php
    require_once("c://xampp/htdocs/proyecto_crud_php/controller/usernameController.php");
    $obj = new usernameController();
    $obj->delete($_GET['id'])

?>