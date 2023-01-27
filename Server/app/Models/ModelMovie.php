<?php 

namespace App\Models;
use CodeIgniter\Model;
// use CodeIgniter\API\ResponseTrait;

class ModelMovie extends Model
{
    protected $table = 'tbl_movie';
    protected $primaryKey = 'id_movie';
    protected $allowedFields = ['judul_movie', 'gambar_movie', 'detail_movie', 'type_movie'];

    protected $validationRules = [
        'judul_movie' => 'required',
        'type_movie' => 'required'
    ];

    protected $validationMessages = [
        'judul_movie' => [
            'required' => 'Silahkan diisi judul movie'
        ]
        ];
}