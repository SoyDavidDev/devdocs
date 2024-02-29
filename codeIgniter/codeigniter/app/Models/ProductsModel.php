<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_product';
    protected $allowedFields = ['name', 'brand', 'description'];

    public function getProducts()
    {
        return $this->findAll();
    }

    public function getProductById($id_product){
        return $this->where(['id_product' => $id_product])->first();
    }
}
   