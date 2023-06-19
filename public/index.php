<?php
// Archivo index.php

// Cargar los archivos necesarios
require_once 'controllers/WelcomeController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/RegisterController.php';
require_once 'controllers/DashboardController.php';
require_once 'middlewares/AuthMiddleware.php';

// Obtener la ruta de la solicitud actual
$route = isset($_GET['route']) ? $_GET['route'] : '';

// Crear una instancia del middleware de autenticación
$authMiddleware = new AuthMiddleware();

// Rutas y acciones correspondientes
switch ($route) {
    case '':
        $welcomeController = new WelcomeController();
        $welcomeController->index();
        break;

    case 'login':
        $loginController = new LoginController();
        $loginController->index();
        break;

    case 'login/authenticate':
        $loginController = new LoginController();
        $loginController->authenticate();
        break;

    case 'register':
        $registerController = new RegisterController();
        $registerController->index();
        break;

    case 'register/store':
        $registerController = new RegisterController();
        $registerController->store();
        break;

    case 'dashboard':
        if ($authMiddleware->check()) {
            $dashboardController = new DashboardController();
            $dashboardController->index();
        } else {
            // Redireccionar a la página de inicio de sesión si no se ha autenticado
            header('Location: index.php?route=login');
        }
        break;

    default:
        // Mostrar una página de error o redireccionar a una página predeterminada
        echo "Página no encontrada";
        break;
}