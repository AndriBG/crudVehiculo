<?php

namespace App\Models;

use CodeIgniter\Model;

class VehiculoModel extends Model
{
    protected $table  = 'vehiculo';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true; // si se quiere hacer borrado lógico o físico.

    protected $allowedFields = ['modelo', 'marca', 'precio'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [
        "modelo"=>"required",
        "marca"=>"required",
        "precio"=>"required"
    ];

    protected $skipValidation = false;
}
