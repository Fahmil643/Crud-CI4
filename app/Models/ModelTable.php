<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelTable extends Model
{
    protected $table      = 'prodi';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['kode_prodi', 'nama_prodi'];
}
