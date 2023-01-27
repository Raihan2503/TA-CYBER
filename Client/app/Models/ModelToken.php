<?php
namespace App\Models;
use CodeIgniter\Model;

class ModelToken extends Model {
    protected $table = 'token';
    protected $primarykey = 'id';

    protected $allowedFields = ['id', 'token'];

    function getToken($id) {
        $builder = $this->table('token');
        $data = $builder->where('id', $id)->first();
        return $data['token'];
    }
}