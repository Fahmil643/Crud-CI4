<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelas extends Model
{
    protected $table      = 'data';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['kode', 'nama', 'dosen', 'studi', 'semester'];
}
