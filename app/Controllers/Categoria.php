<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;
use CodeIgniter\HTTP\RedirectResponse;

class Categoria extends BaseController {

    private $categoriaModel;

    public function __construct()
    {
        $this->categoriaModel = new CategoriaModel();
    }

    public function index() :string {

        $data['title'] = 'Site Teste';
        $data['main_content'] = 'categoria/index';

        return view('template', $data);

    }

    public function novo() :string {
        

        $data['title'] = 'Site Teste';
        $data['main_content'] = 'categoria/novo';
        $data['categorias'] = $this->categoriaModel->findAll();

        return view('template', $data);

    }


    public function listar() :string {

        $categoria = $this->categoriaModel->findAll();        
        
        $data['categoria'] = $categoria;
        $data['title'] = 'Site Teste';
        $data['main_content'] = 'categoria/listar';

        return view('template', $data);

    }



    public function editar($id = null) :string {

        $data['title'] = 'Site Teste';
        $data['main_content'] = 'categoria/editar';
        //buscar a categoria especifica para editar
        $data['categoria'] = $this->categoriaModel->find($id);

        //buscar todas as categorias para alimentar a combo
        $data['categorias'] = $this->categoriaModel->findAll();

        return view('template', $data);

    }

    public function delete($id = null) {

        $this->categoriaModel->delete($id);

        return redirect()->to('categoria/listar');

    }

    public function salvar() :RedirectResponse{

        //$this->categoriaModel->save($this->request->getPost());
        $this->categoriaModel->save([
            'id'    => $this->request->getVar('id'),
            'nome' => $this->request->getVar('nome'),
            'descricao'  => $this->request->getVar('descricao'),
            'categoria_pai_id'  => $this->request->getVar('categoria_pai_id') ? $this->request->getVar('categoria_pai_id') : null
        ]);
        

        return redirect()->to('categoria/listar');

    }   
    
}