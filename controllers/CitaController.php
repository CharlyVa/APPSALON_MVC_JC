<?php

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index( Router $router) {

        session_start();

        isAuth();
        
        $router->render('cita/index', [ 
            'nombre' => $_SESSION['nombre'],  // de esta forma se pasa el nombre a la vista
            'id' => $_SESSION['id']
        ]);
    }
}