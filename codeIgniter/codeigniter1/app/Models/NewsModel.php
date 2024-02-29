<?php

// un modelo por cada tabla a crear

namespace App\Models;
//Este nuevo modelo carga la base de datos. La clase de base de datos 
// estará disponible a través del objeto $this->db

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'slug', 'body'];

    // Con este código podrás realizar dos consultas diferentes: 
    // - Obtener todos los registros de noticias
    // - Obtener una noticia por su slug

    public function getNews($slug = false)
    {
        // al poner slug false es un método opcional
        // Si no hay slug, mostrará toda la tabla
        if ($slug === false) {
            return $this->findAll();
        }

        // si hay slug, mostrará el que coincida.
        return $this->where(['slug' => $slug])->first();
    }

    // Los dos métodos utilizados (findAll() y first()) los
    // proporciona la clase CodeIgniter\Model.

    // MÉTODO getbyid($id) en el módelo
    public function getById($id){
        return $this->where(['id' => $id])->first();
    }
}
