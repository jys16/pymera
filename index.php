<?php
// Archivo principal

// Cargar controlador y modelo
require_once 'controllers/MainController.php';
require_once 'controllers/DashboardController.php';
require_once 'models/MainModel.php';

// Inicializar controladores
$mainController = new MainController();
$dashboardController = new DashboardController();

// Verificar si la acción está definida en $_GET
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Manejar la solicitud según la acción
if ($action === 'dashboard' || 'compras' || 'perfil' || 'ventas' || 'registro_productos' || 'reportes') {
    // Si la acción es 'dashboard', manejar la solicitud en el DashboardController
    $dashboardController->handleRequest();
} else {
    // De lo contrario, manejar la solicitud en el MainController
    $mainController->handleRequest();
} 
?>
