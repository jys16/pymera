<?php
class DashboardController {
    public function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'dashboard';

        switch ($action) {
            case 'dashboard':
                // Lógica para la página principal del dashboard
                $this->showDashboard();
                break;
            case 'perfil':
                // Lógica para la sección de compras
                $this->showPerfil();
                break;
            case 'compras':
                // Lógica para la sección de compras
                $this->showCompras();
                break;
            case 'registro_productos':
                // Lógica para la sección de registro de productos
                $this->showRegistroProductos();
                break;
            case 'ventas':
                // Lógica para la sección de ventas
                $this->showVentas();
                break;
            case 'reportes':
                // Lógica para la sección de reportes
                $this->showReportes();
                break;
            default:
                // Acción no válida, mostrar mensaje de error o redirigir
                $this->showError();
                break;
        }
    }

    private function showDashboard() {
        // Lógica para mostrar la página principal del dashboard
        // Puedes incluir aquí la vista correspondiente al dashboard
        include 'views/dashboard/index.php';
    }

    private function showPerfil() {
        // Lógica para mostrar la sección de compras
        include 'views/dashboard/perfil.php';
    }

    private function showCompras() {
        // Lógica para mostrar la sección de compras
        include 'views/dashboard/compras.php';
    }

    private function showRegistroProductos() {
        // Lógica para mostrar la sección de registro de productos
        include 'views/dashboard/registro_productos.php';
    }

    private function showVentas() {
        // Lógica para mostrar la sección de ventas
        include 'views/dashboard/ventas.php';
    }

    private function showReportes() {
        // Lógica para mostrar la sección de reportes
        include 'views/dashboard/reportes.php';
    }

    private function showError() {
        // Lógica para mostrar un mensaje de error o redirigir
        include 'views/error.php';
    }
}
?>