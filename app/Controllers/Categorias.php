<?php
namespace App\Controllers;

use App\Models\CategoriaModel;
use CodeIgniter\RESTful\ResourceController;

class Categorias extends ResourceController {


    private $categoriaModel;
    private $forma = 'json';

    public function __construct()
    {
        $this->categoriaModel = new CategoriaModel();
    }


    public function index(){
        return $this->respond($this->categoriaModel->findAll());
    }
}