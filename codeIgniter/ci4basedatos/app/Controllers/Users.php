<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends BaseController{

    public function loginForm($error = null){
        helper('form');
        
    }
}