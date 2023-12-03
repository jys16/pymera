<?php
// Archivo principal

// Cargar controlador y modelo
require_once 'controllers/MainController.php';
require_once 'models/MainModel.php';

// Inicializar controlador principal
$controller = new MainController();
$controller->handleRequest();
?>
