<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model {

    protected $table = 'produto';
    protected $allowedFields = ['nome', 'descricao', 'valor', 'quantidade_estoque', 'categoria_id'];


}