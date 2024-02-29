<?php

use App\Controllers\Pages;
use App\Controllers\Wonders;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('wonders', [Wonders::class, 'index']);   
// MUESTRA TODAS LAS MARAVILLAS

// FORMULARIO INSERTAR
$routes->get('wonders/new', [Wonders::class, 'new']);
// cuando en la url vaya news/new, se ejecutará el método new de la clase News del 
// controlador News.php

// EJECUTA INSERTAR
$routes->post('wonders/create', [Wonders::class, 'create']);
// cuando la url vaya a news y reciba datos con post, se ejecutará el método create de
// la clase News del controlador News.php

// EJECUTA ELIMINAR
$routes->get('wonders/del/(:segment)', [Wonders::class,'delete']);

// EJECUTA MODIFICAR
$routes->post('wonders/update/updated/(:segment)', [Wonders::class, 'updatedItem']);
// FORMULARIO MODIFICAR
$routes->get('wonders/update/(:segment)', [Wonders::class, 'update']);


$routes->get('wonders/(:segment)', [Wonders::class, 'show']); 
// MUESTRA UNA MARAVILLA SELECCIONADA.-



$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);