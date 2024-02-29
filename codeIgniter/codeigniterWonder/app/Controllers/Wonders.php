<?php

namespace App\Controllers;
use App\Models\WondersModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Wonders extends BaseController
{
    public function index()
    {
        $model = model(WondersModel::class);

        $data = [
            'wonders'  => $model->getWonders(),
            'title' => 'Wonders archive',
        ];

        return view('templates/header', $data)
            . view('wonders/index')
            . view('templates/footer');
    }

    public function show($id = null)
    {
        $model = model(WondersModel::class);

        $data['wonders'] = $model->getWonderById($id);

        if (empty($data['wonders'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $id);
        }

        $data['title'] = $data['wonders']['wonder'];

        return view('templates/header', $data)
            . view('wonders/view')
            . view('templates/footer');
    }

    public function new(){
        helper("form");

        $model = model(WondersModel::class);
        if ($data['wonders'] = $model->findAll()) {

            return view('templates/header', ['title' => 'Create a wonders item'])
            . view('wonders/create', $data)
            . view('templates/footer');        
        }


    }

    public function create()
    {
        helper('form');

        // Checks whether the submitted data passed the validation rules.
        // Añadimos la variable id_category que viene del formulario en el array de campos a validar.
        if (! $this->validate([
            'wonder' => 'required|max_length[255]|min_length[3]',
            'location'  => 'required|max_length[255]|min_length[3]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->request->getPost();

        $model = model(WondersModel::class);

        // Añadimos la misma variable al array de campos a insertar en la tabla news.
        $model->save([
            'wonder' => $post['wonder'],
            'location'  => $post['location'],
        ]);

        return redirect()->to(base_url('wonders/'));
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
        
                $model = model(WondersModel::class);
                if ($model->getWonderById($id)) {
                    $model->delete($id);
                }else {
                    throw new PageNotFoundException('Selected item does not exist in database.');
                }
        
                return redirect()->to((base_url('wonders/')));
    }

    public function update($id){
        helper('form');

        if ($id == null) {
            throw new PageNotFoundException('Cannot update the item.');
        }

        $model = model(WondersModel::class);

        if ($model->where('id',$id)->find()) {
            $data = [
                'wonders' => $model->getWonderById($id),
                'title' => 'Update item.',
            ];
        }else {
            throw new PageNotFoundException('Selected item does not exist in database.');
        }

        return view('templates/header',$data)
            . view('wonders/update')
            . view('templates/footer');
    }

    public function updatedItem($id)
    {
        helper('form');
 
        // Checks whether the submitted data passed the validation rules.
        if (! $this->validate([
            'wonder' => 'required|max_length[255]|min_length[3]',
            'location'  => 'required|max_length[255]|min_length[3]',
        ])) {
            // The validation fails, so returns the form.
            return $this->update($id);
        }
 
        // Gets the validated data.
        $post = $this->validator->getValidated();
 
        $data = [
            'id' => $id,
            'wonder' => $post['wonder'],
            'location'  => $post['location'],
        ];
        $model = model(WondersModel::class);
        $model->save($data);
       
        return redirect()->to(base_url("wonders/"));
    }
}