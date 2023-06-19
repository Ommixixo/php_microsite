<!-- welcome.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Bienvenido</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php?route=login">Iniciar sesión</a></li>
            <li><a href="index.php?route=register">Registrarse</a></li>
        </ul>
    </nav>

    <main>
        <p>Bienvenido a la aplicación PHP con CRUD y sistema de autenticación.</p>
        <p>Por favor, inicia sesión o regístrate para acceder al panel de control.</p>
    </main>

    <footer>
        <p>© <?php echo date('Y'); ?> Mi Proyecto PHP</p>
    </footer>
</body>
</html>