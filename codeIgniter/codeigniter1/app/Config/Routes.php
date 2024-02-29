<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\News;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// MUESTRA TODAS LAS NOTICIAS
$routes->get('news', [News::class, 'index']); // Esto asegura que las solicitudes lleguen al controlador NEWS
                                                // En lugar de directamente al controlador Pages.
// FORMULARIO INSERTAR
$routes->get('news/new', [News::class, 'new']); 
// cuando en la url vaya news/new, se ejecutará el método new de la clase News del 
// controlador News.php

// EJECUTA INSERTAR
$routes->post('news/create', [News::class, 'create']); 
// cuando la url vaya a news y reciba datos con post, se ejecutará el método create de
// la clase News del controlador News.php

// EJECUTA ELIMINAR
$routes->get('news/del/(:segment)', [News::class,'delete']);

// EJECUTA MODIFICAR
$routes->post('news/update/updated/(:segment)', [News::class, 'updatedItem']);
// FORMULARIO MODIFICAR
$routes->get('news/update/(:segment)', [News::class, 'update']);

// MUESTRA UNA NOTICIA SELECCIONADA.-
$routes->get('news/(:segment)', [News::class, 'show']); 
// última línea enruta los URI con un slug al método show ()en el controlador News.


$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

$routes->setAutoRoute(false);