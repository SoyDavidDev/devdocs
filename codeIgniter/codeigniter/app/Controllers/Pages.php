<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    // ...

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page); 
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter.- Se usa para personalizar el título de la página

        return view('templates/header', $data) // Se cargan las vistas en el orden en que deben mostrarse.
            . view('pages/' . $page)
            . view('templates/footer');
    }
}