<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css"> 
</head>
<body>
    <div class="login-container">
        <div class="logo-container">
            <img src="assets/img/logo.png" alt="Logo de la aplicación" class="logo">
        </div>
        <form method="POST" action="index.php?action=login">
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" name='email' id="email" placeholder="Correo Electrónico" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name='password' id="password" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
            <div class="forgot-password">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
        <?php if (isset($errorMessage)): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
