<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ArticuloController;
use Controllers\CitaController;
use Controllers\LoginController;
use Controllers\ServicioController;
use Controllers\ClienteController;
use Controllers\mesaController;
use MVC\Router;
$router = new Router();

// Iniciar Sesión BIEN
$router->get('/gestion_billar-main/public/', [LoginController::class, 'login']);
$router->post('/gestion_billar-main/public/', [LoginController::class, 'login']);
$router->get('/gestion_billar-main/public/logout', [LoginController::class, 'logout']);

// CLIENTES BIEN
$router->get('/gestion_billar-main/public/cliente', [ClienteController::class, "index"]);
$router->get('/gestion_billar-main/public/cliente/crear', [ClienteController::class, "crear"]);
$router->post('/gestion_billar-main/public/cliente/crear', [ClienteController::class, "crear"]);
$router->get('/gestion_billar-main/public/cliente/actualizar', [ClienteController::class, "actualizar"]);
$router->post('/gestion_billar-main/public/cliente/actualizar', [ClienteController::class, "actualizar"]);
$router->post('/gestion_billar-main/public/cliente/eliminar', [ClienteController::class, "eliminar"]);

//ARTICULOS BIEN
$router->get('/gestion_billar-main/public/articulo', [ArticuloController::class, "index"]);
$router->get('/gestion_billar-main/public/articulo/crear', [ArticuloController::class, "crear"]);
$router->post('/gestion_billar-main/public/articulo/crear', [ArticuloController::class, "crear"]);
$router->get('/gestion_billar-main/public/articulo/actualizar', [ArticuloController::class, "actualizar"]);
$router->post('/gestion_billar-main/public/articulo/actualizar', [ArticuloController::class, "actualizar"]);
$router->post('/gestion_billar-main/public/articulo/eliminar', [ArticuloController::class, "eliminar"]);

$router->get('/gestion_billar-main/public/mesa', [mesaController::class, "index"]);
$router->get('/gestion_billar-main/public/mesa/ver', [mesaController::class, "ver"]);  
$router->post('/gestion_billar-main/public/mesa/eliminar', [mesaController::class, "eliminar"]);
$router->get('/gestion_billar-main/public/mesa/cortar', [mesaController::class, "cortar"]);
$router->post('/gestion_billar-main/public/mesa/cortar', [mesaController::class, "cortar"]);
$router->get('/gestion_billar-main/public/mesa/historial', [mesaController::class, "indexHistorial"]);

$router->get('/gestion_billar-main/public/clienteArticulo/crear', [mesaController::class, "clienteArticuloCrear"]);
$router->post('/gestion_billar-main/public/clienteArticulo/crear', [mesaController::class, "clienteArticuloCrear"]);
$router->get('/gestion_billar-main/public/clienteArticulo/eliminar', [mesaController::class, "clienteArticuloEliminar"]);

// Recuperar Password
$router->get('/gestion_billar-main/public/olvide', [LoginController::class, 'olvide']);
$router->post('/gestion_billar-main/public/olvide', [LoginController::class, 'olvide']);
$router->get('/gestion_billar-main/public/recuperar', [LoginController::class, 'recuperar']);
$router->post('/gestion_billar-main/public/recuperar', [LoginController::class, 'recuperar']);


$router->comprobarRutas();