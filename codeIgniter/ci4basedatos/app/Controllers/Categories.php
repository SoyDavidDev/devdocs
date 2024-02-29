<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use CodeIgniter\Exceptions\PageNotFoundException; 

class Categories extends BaseController
{
    public function index()
    {
        $model = model(CategoryModel::class);

        $data = [
            'categories' => $model->getCategories(), // este nombre es el array en index.php
            'title' => 'Categories archive',
        ];

        return view('templates/header')
            . view('categories/index', $data)
            . view('templates/footer');    
    }

    public function show($id = null){
        $model = model(CategoryModel::class);

        $data['categories'] = $model->getById($id);

        if (empty($data['categories'])) {
            throw new PageNotFoundException("Cannot find the categories item");
        }

        $data['title'] = $data['categories']['category'];

        return view('templates/header', $data)
            . view('categories/view', $data)
            . view('templates/footer');
    }

    public function new()
    {
        helper('form');

        $model = model(CategoryModel::class);

        $data['categories'] = $model->findAll();

        return view('templates/header', ['title' => 'Create a new Category'])
            . view('categories/create', $data)
            . view('templates/footer');
    }

    public function create(){
        helper('form');

        if (!$this->validate([
            'category' => 'required|max_length[255]|min_length[3]',
        ])) {
            return $this->new();
        }

        $post = $this->validator->getValidated();

        $model = model(CategoryModel::class);

        $model->save([
            'category' => $post['category']
        ]);

        return view('templates/header', ['title' => 'Create a category item'])
        . view('categories/success')
        . view('templates/footer');
    }

    public function delete($id){
        if ($id === null) {
            throw new PageNotFoundException("Cannot delte the item");
        }

        $model = model(CategoryModel::class);
        $category = $model->getById($id);

        if ($category) {
            $model->delete($id);
        }else {
            throw new PageNotFoundException("Selected item does not exist");
        }

        return view('templates/header', ['title' => 'Delete item'])
            . view('categories/deleted')
            . view('templates/footer');
    }

    public function update($id){
        helper('form');

        if ($id === null) {
            throw new PageNotFoundException("Cannot update the item");
        }

        $model = model(CategoryModel::class);

        if ($model->find($id)) {
            $data = [
                'categories' => $model->getById($id),
                'title' => 'Update item',
            ];
        }else {
            throw new PageNotFoundException("Selected item does not exist");
        }
        return view("templates/header", $data)
            . view('categories/update')
            . view('templates/footer');
    }

    public function updatedItem($id){
        helper('form');

        if (! $this->validate([
            'category' => 'required|max_length[255]|min_length[3]',
        ])) {
            return $this->update($id);
        }

        $post = $this->validator->getValidated();

        $model = model(CategoryModel::class);

        $data = [
            'id' => $id,
            'category' => $post['category'],
        ];

        $model->save($data);

        return view('templates/header', ['title' => 'Item updated'])
            . view('categories/updated')
            . view('templates/footer');
    }
}