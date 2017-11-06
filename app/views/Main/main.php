<?php defined('BASEPATH') or exit('No se permite acceso directo');
 require_once 'app/models/Database/database.php';

 $controller = 'alumno';
// Todo esta lógica hara el papel de un FrontController
  require_once "app/controllers/Alumno/AlumnoController.php";
  $controller = ucwords($controller) . 'Controller';
  $controller = new $controller;
  $controller->Index();

?>
