<?php

namespace App\Controllers;
use App\Models\ProductsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Products extends BaseController
{
    public function index()
    {
        $model = model(ProductsModel::class);

        $data = [
            'products'  => $model->getProducts(),
            'title' => 'Products archive',
        ];

        return view('templates/header', $data)
            . view('products/index')
            . view('templates/footer');
    }

    public function show($id = null)
    {
        $model = model(ProductsModel::class);

        $data['products'] = $model->getProductById($id);

        if (empty($data['products'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $id);
        }

        $data['title'] = $data['products']['name'];

        return view('templates/header', $data)
            . view('products/view')
            . view('templates/footer');
    }

    public function new(){
        helper("form");

        $model = model(ProductsModel::class);
        if ($data['products'] = $model->findAll()) {

            return view('templates/header', ['title' => 'Create a product item'])
            . view('products/create', $data)
            . view('templates/footer');        
        }


    }

    public function create()
    {
        helper('form');

        if (! $this->validate([
            'name' => 'required|max_length[255]|min_length[3]',
            'brand' => 'required|max_length[255]|min_length[3]',
            'description'  => 'required|max_length[255]|min_length[3]',
        ])) {
            return $this->new();
        }

        $post = $this->request->getPost();

        $model = model(ProductsModel::class);


        $model->save([
            'name' => $post['name'],
            'brand' => $post['brand'],
            'description' => $post['description'],
        ]);

        return redirect()->to(base_url(''));
    }

    public function delete($id){
        if ($id == null) {
            throw new PageNotFoundException("Cannot delete the item");
        }

        $model = model(ProductsModel::class);
        if ($model->getProductById($id)) {
            $model->delete($id);
        }else {
            throw new PageNotFoundException('Selected item does not exist in database.');
        }

        return redirect()->to((base_url('')));
    }

    public function update($id){
        helper('form');

        if ($id == null) {
            throw new PageNotFoundException('Cannot update the item.');
        }

        $model = model(ProductsModel::class);

        if ($model->where('id_product',$id)->find()) {
            $data = [
                'products' => $model->getProductById($id),
                'title' => 'Update product.',
            ];
        }else {
            throw new PageNotFoundException('Selected item does not exist in database.');
        }

        return view('templates/header',$data)
            . view('products/update')
            . view('templates/footer');
    }

    public function updatedItem($id)
    {
        helper('form');
 
        if (! $this->validate([
            'name' => 'required|max_length[255]|min_length[3]',
            'brand' => 'required|max_length[255]|min_length[3]',
            'description'  => 'required|max_length[255]|min_length[3]',
        ])) {
            return $this->update($id);
        }
 
        $post = $this->validator->getValidated();
 
        $data = [
            'id_product' => $id,
            'name' => $post['name'],
            'brand' => $post['brand'],
            'description' => $post['description'],
        ];
        $model = model(ProductsModel::class);
        $model->save($data);
       
        return redirect()->to(base_url(""));
    }

}