<?php
require_once 'config/db.php';

class MainController {
    public function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'login';

        switch ($action) {
            case 'login':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                    $password = isset($_POST['password']) ? $_POST['password'] : '';

                    // Verificar las credenciales en la base de datos
                    if ($this->authenticateUser($email, $password)) {
                        // Iniciar sesión y redirigir al dashboard
                        session_start();
                        $_SESSION['email'] = $email;
                        header('Location: index.php?action=dashboard');
                        exit();
                    } else {
                        // Mostrar mensaje de error genérico
                        $errorMessage = "Credenciales incorrectas. Inténtalo de nuevo.";
                        include 'views/login.php';
                    }
                } else {
                    // Mostrar formulario de inicio de sesión
                    include 'views/login.php';
                }
                break;

            // Resto del código...
        }
    }

    private function authenticateUser($email, $password) {
    global $conn;

    try {
        // Consultar la base de datos para verificar las credenciales
        $stmt = $conn->prepare("SELECT contrasena FROM usuarios WHERE correo_electronico = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($dbPassword);
        $stmt->fetch();
        $stmt->close();

        // Verificar la contraseña utilizando password_verify
        if (!empty($dbPassword) && password_verify($password, $dbPassword)) {
            return true; // Las credenciales son correctas
        } else {
            // Mensaje de depuración
            error_log("Contraseña ingresada: $password");
            error_log("Contraseña almacenada en la base de datos: $dbPassword");
        }
    } catch (Exception $e) {
        // Mensaje de depuración
        error_log("Error al autenticar usuario: " . $e->getMessage());
        error_log("Error de la base de datos: " . $e->getMessage());
        return false;
    } finally {
        // Cerrar la conexión
        $conn->close();
    }

    return false; // Las credenciales son incorrectas
}

}
?>


