<?php

namespace App\Controllers;
use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    public function index(): string
    {
        $model = model(NewsModel::class);

        $data =[
            'news' => $model->getNews(), // array con todas las noticias.- 
            'title' => "News Archive", // variable que nosotros creamos para mostrar en la vista que queramos.- 
        ];

        return view('home/header', $data) // $news $title
            . view('home/index')
            . view('home/footer');    
    }

    public function show($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('home/header', $data)
            . view('home/view')
            . view('home/footer');
    }
}
