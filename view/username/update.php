<?php
    require_once("c://xampp/htdocs/proyecto_crud_php/controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'],$_POST['nombre']);
?>