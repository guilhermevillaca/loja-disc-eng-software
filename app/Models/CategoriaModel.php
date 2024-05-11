<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model {

    protected $table = 'categoria';
    protected $allowedFields = ['nome', 'descricao', 'categoria_pai_id'];

}