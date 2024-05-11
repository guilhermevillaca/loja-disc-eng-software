<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Site Teste';
        $data['main_content'] = 'home';

        return view('template', $data);
    }
}
