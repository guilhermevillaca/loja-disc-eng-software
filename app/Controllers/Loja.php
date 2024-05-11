<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Models\ProdutoModel;

class Loja extends BaseController {

    private $categoriaModel;
    private $produtoModel;

    public function __construct(){
        $this->categoriaModel = new CategoriaModel();
        $this->produtoModel = new ProdutoModel();  
        
    }

    public function index() :string {

        $data['title'] = 'Loja Virtual';
        $data['categorias'] = $this->categoriaModel->findAll();
        $data['produtos'] = $this->produtoModel->findAll();
        $data['main_content'] = 'loja/index';
        return view('loja/template', $data);

    }

    public function detalhes($id = null) :string {
        $produto = $this->produtoModel->find($id);
        $data['categorias'] = $this->categoriaModel->findAll();
        $data['title'] = 'Detalhes do Produto ' . $produto['nome'];
        $data['main_content'] = 'loja/detalhes';
        $data['produto'] = $produto;
        return view('loja/template', $data);
    }

    public function produtos($catId = null) : string {
        $produtos = $this->produtoModel->where('categoria_id', $catId)->findAll();
        $data['title'] = 'Loja Virtual';
        $data['categorias'] = $this->categoriaModel->findAll();
        $data['produtos'] = $produtos;
        $data['main_content'] = 'loja/index';
        return view('loja/template', $data);
    }

    public function comprar($id = null) :string {
        $produto = $this->produtoModel->find($id);        
        $data['title'] = 'Detalhes do Produto ' . $produto['nome'];
        $data['main_content'] = 'loja/comprar';
        $data['produto'] = $produto;
        return view('template', $data);
    }


}