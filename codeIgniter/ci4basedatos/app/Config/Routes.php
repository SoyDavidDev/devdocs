<?php

use App\Controllers\Categories;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\News; 

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(false); // Establecer a false para que no intente buscar rutas
                            // en otros directorios, sólo lea este archivo para encontrar
                            // las rutas.

$routes->get('/', 'Home::index');  // Página web inicial

$routes->get('news', [News::class, 'index']);   // MUESTRA TODAS LAS NOTICIAS
// Esto asegura que las solicitudes lleguen al controlador NEWS
// En lugar de directamente al controlador Pages.

// MUESTRA FORMULARIO INICIO SESIÓN.- 

// $routes->get('admin', [Users::class, 'loginForm']);

// MUESTRA TODAS LAS CATEGORÍAS
$routes->get('categories', [Categories::class,'index']);

// FORMULARIO INSERTAR
$routes->get('news/new', [News::class, 'new']);
// cuando en la url vaya news/new, se ejecutará el método new de la clase News del 
// controlador News.php

// EJECUTA INSERTAR
$routes->post('news/create', [News::class, 'create']);
// cuando la url vaya a news y reciba datos con post, se ejecutará el método create de
// la clase News del controlador News.php


// FORMULARIO INSERTAR
$routes->get('categories/new', [Categories::class, 'new']);
// cuando en la url vaya news/new, se ejecutará el método new de la clase News del 
// controlador News.php

// EJECUTA INSERTAR
$routes->post('categories/create', [Categories::class, 'create']);
// cuando la url vaya a news y reciba datos con post, se ejecutará el método create de
// la clase News del controlador News.php



// EJECUTA ELIMINAR
$routes->get('news/del/(:segment)', [News::class,'delete']);

// EJECUTA ELIMINAR
$routes->get('categories/del/(:segment)', [Categories::class,'delete']);


// EJECUTA MODIFICAR
$routes->post('news/update/updated/(:segment)', [News::class, 'updatedItem']);
// FORMULARIO MODIFICAR
$routes->get('news/update/(:segment)', [News::class, 'update']);

// EJECUTA MODIFICAR
$routes->post('categories/update/updated/(:segment)', [Categories::class, 'updatedItem']);
// FORMULARIO MODIFICAR
$routes->get('categories/update/(:segment)', [Categories::class, 'update']);


$routes->get('news/(:segment)', [News::class, 'show']); // MUESTRA UNA NOTICIA SELECCIONADA.-
// última línea enruta los URI con un slug al método show ()en el controlador News.

// MUESTRA UNA CATEGORÍA SELECCIONADA
$routes->get('categories/(:segment)', [Categories::class, 'show']);


$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);