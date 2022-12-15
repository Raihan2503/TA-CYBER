<?php 

namespace App\Models;
use CodeIgniter\Model;

class ModelMovie extends Model 
{
    protected $table = 'tbl_movie';
    protected $primaryKey = 'id_movie';
    protected $allowedFields = ['judul_movie', 'gambar_movie', 'detail_movie', 'type_movie'];

    public function getMovie($id = null)
    {
        if($id === null) {
            return $this->findAll();
        }
        return $this->where(['id_movie' => $id])->first();
    }
}