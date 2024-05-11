<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Models\ProdutoModel;
use CodeIgniter\HTTP\RedirectResponse;

class Produto extends BaseController {


    private $produtoModel;
    private $categoriaModel;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
        $this->categoriaModel = new CategoriaModel();
    }

    public function index() :string {

        $data['title'] = 'Site Teste';
        $data['main_content'] = 'produto/index';

        return view('template', $data);

    }

    public function novo(): string {

        $data['title'] = 'Site Teste';
        $data['main_content'] = 'produto/novo';

        $data['categorias'] = $this->categoriaModel->findAll();

        return view('template', $data);

    }

    public function listar($cat_id = null) :string {

        $produtos = $this->produtoModel->where('categoria_id', $cat_id)->findAll();
        
        $data['produtos'] = $produtos;
        $data['title'] = 'Site Teste';
        $data['main_content'] = 'produto/listar';

        return view('template', $data);

    }

    public function listarTodos() :string {

        $produtos = $this->produtoModel->findAll();
        
        $data['produtos'] = $produtos;
        $data['title'] = 'Site Teste';
        $data['main_content'] = 'produto/listarTodos';

        return view('template', $data);

    }



    public function editar($id = null) :string {

        $data['title'] = 'Site Teste';
        $data['main_content'] = 'produto/editar';
        //buscar a categoria especifica para editar
        $data['produto'] = $this->produtoModel->find($id);

        //buscar todas as categorias para alimentar a combo
        $data['categorias'] = $this->categoriaModel->findAll();

        return view('template', $data);

    }

    public function delete($id = null) {

        $this->categoriaModel->delete($id);

        return redirect()->to('produto/listarTodos');

    }

    public function salvar() :RedirectResponse{

        $this->produtoModel->save($this->request->getPost());
        return redirect()->to('produto/listarTodos');

    }   
}