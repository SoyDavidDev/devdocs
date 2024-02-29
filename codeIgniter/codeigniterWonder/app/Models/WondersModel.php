<?php

namespace App\Models;

use CodeIgniter\Model;

class WondersModel extends Model
{
    protected $table = '7wonders';
    protected $allowedFields = ['wonder', 'location'];

    public function getWonders()
    {
        return $this->findAll();
    }

    public function getWonderById($id){
        return $this->where(['id' => $id])->first();
    }
}
   