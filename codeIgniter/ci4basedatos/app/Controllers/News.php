<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{

    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    }

    public function show($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }

    public function new()
    {
        helper('form');

        $model = model(CategoryModel::class);
        if ($data['category'] = $model->findAll()) {

            return view('templates/header', ['title' => 'Create a news item'])
            . view('news/create', $data)
            . view('templates/footer');        
        }

    }
    
    public function create()
    {
        helper('form');

        // Checks whether the submitted data passed the validation rules.
        // Añadimos la variable id_category que viene del formulario en el array de campos a validar.
        if (! $this->validate([
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
            'id_category' => 'required',
            'imagen' => 'uploaded[imagen]|max_size[imagen,1024]|is_image[imagen]', // tiene que tener el name del formulario
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $foto = $this->request->getFile('imagen'); //nombre formulario name
        $fotoName = $foto->getName(); // nombre archivo
        $foto->move(ROOTPATH . 'public/assets/img', $fotoName);

        $model = model(NewsModel::class);

        // Añadimos la misma variable al array de campos a insertar en la tabla news.
        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
            'id_category' => $post['id_category'],
            'imagen' => $fotoName,  // nombre campo base datos
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
        $modelCategory = model(CategoryModel::class);

        if ($model->where('id',$id)->find()) {
            $data = [
                'news' => $model->getById($id),
                'title' => 'Update item.',
                'category' => $modelCategory->findAll(),
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
        // Añadimos la variable id_category que viene del formulario en el array de campos a validar.
        if (! $this->validate([
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
            'id_category' => 'required',
            'imagen' => 'uploaded[imagen]|max_size[imagen,1024]|is_image[imagen]',
        ])) {
            // The validation fails, so returns the form.
            return $this->update($id);
        }
 
        // Gets the validated data.
        $post = $this->validator->getValidated();

        $foto = $this->request->getFile('imagen');
        $fotoName = $foto->getName();
        $foto->move(ROOTPATH . 'public/assets/img', $fotoName);

 
        // añadimos el id de la noticia en la query save() para que sepa que tiene que ejecutar un update.
        // id

        $data = [
            'id' => $id,
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
            'id_category' => $post['id_category'],
            'imagen' => $fotoName,
        ];
        // Añadimos la misma variable al array de campos a insertar en la tabla news.
        // id_category
        $model = model(NewsModel::class);
        $model->save($data);

        return view('templates/header', ['title' => 'Item updated'])
            . view('news/updated')
            . view('templates/footer');        
    }

}