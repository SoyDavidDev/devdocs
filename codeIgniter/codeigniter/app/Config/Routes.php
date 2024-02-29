<?php

use App\Controllers\Pages;
use App\Controllers\Products;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Products::index'); // es para la ruta de inicio.- 

$routes->get('products', [Products::class, 'index']);   
// MUESTRA TODAS LOS PRODUCTOS

// FORMULARIO INSERTAR
$routes->get('products/new', [Products::class, 'new']);


// EJECUTA INSERTAR
$routes->post('products/create', [Products::class, 'create']);

// EJECUTA ELIMINAR
$routes->get('products/del/(:segment)', [Products::class,'delete']);

// EJECUTA MODIFICAR
$routes->post('products/update/updated/(:segment)', [Products::class, 'updatedItem']);
// FORMULARIO MODIFICAR
$routes->get('products/update/(:segment)', [Products::class, 'update']);

$routes->get('products/(:segment)', [Products::class, 'show']); 
// MUESTRA UN PRODUCTO SELECCIONADO.-



$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);