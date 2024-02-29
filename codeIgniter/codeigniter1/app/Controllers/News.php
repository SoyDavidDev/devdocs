<?php

namespace App\Controllers;

// en este controlador creamos e incluimos el modelo News. (anterior CrudUsuarios.php)
use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{

    // La función auxiliar model() se utiliza para crear la instancia NewsModel. En nuestra aplicación anterior era:
    // $dataBase = new Usuarios();
    // $usuarios = $dataBase->showUsuarios();

    // método para ver todas las noticias.
    public function index()
    {
        $model = model(NewsModel::class);

        // de getNews() sale de NEwsModel.php
        //se pasa la variable $slug y devolverá la noticia específica.

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        // pasamos los datos a la vista en routes.php. 
        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    }

    // - show(): para ver una noticia especificada en el slug
    public function show($slug = null)
    {
        $model = model(NewsModel::class);

        // de getNews() sale de NEwsModel.php
        //se pasa la variable $slug y devolverá la noticia específica.
        $data['news'] = $model->getNews($slug);

        // si query no devuelve nada, está vacío:
        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        // pasamos los datos a la vista en routes.php. 
        return view('templates/header', $data) // pasa el título
            . view('news/view') // pasa la noticia con titulo y body
            . view('templates/footer'); // Footer
    }

    // método para mostrar el formulario HTML para poder insertar datos
    public function new()
    {
        // cargamos el helper del formulario. la mayoría de las funciones
        // auxiliares requieren que el asistente se cargue antes de su uso
        helper('form');

        return view('templates/header', ['title' => 'Create a news item'])
            . view('news/create')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');


        // Checks whether the submitted data passed the validation rules.
        if (! $this->validate([
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(NewsModel::class);

        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
        ]);

        return view('templates/header', ['title' => 'Create a news item'])
            . view('news/success')
            . view('templates/footer');
    }

    public function delete($id){
        
        // si no hay nada de url, mensaje error
        if ($id == null) {
            throw new PageNotFoundException("Cannot delete the item");
        }

        // apuntamos a la tabla news 

        /*if($model->where('id', $id)->find()){
            $model->where('id', $id)->delete();
        }else{
            throw new PageNotFoundException('Selected item does not exist in database');
        } */

        $model = model(NewsModel::class);
        if ($model->getById($id)) {
            $model->delete($id);
        }else {
            throw new PageNotFoundException('Selected item does not exist in database.');
        }

        return view('templates/header', ['title' => 'Delete item'])
            . view('news/deleted')
            . view('templates/footer');
    }

    public function update($id){
        helper('form');

        if ($id == null) {
            throw new PageNotFoundException('Cannot update the item.');
        }

        $model = model(NewsModel::class);

        if ($model->where('id',$id)->find()) {
            $data = [
                'news' => $model->getById($id),
                'title' => 'Update item.',
            ];
        }else {
            throw new PageNotFoundException('Selected item does not exist in database.');
        }

        return view('templates/header',$data)
            . view('news/update')
            . view('templates/footer');
    }

    public function updatedItem($id)
    {
        helper('form');
 
        // Checks whether the submitted data passed the validation rules.
        if (! $this->validate([
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->update($id);
        }
 
        // Gets the validated data.
        $post = $this->validator->getValidated();
 
        $data = [
            'id' => $id,
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
        ];
        $model = model(NewsModel::class);
        $model->save($data);
       
        return view('templates/header', ['title' => 'Item updated'])
            . view('news/upd')
            . view('templates/footer');
    }
}