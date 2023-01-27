<?php 
namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\ModelMovie;

class Movies extends BaseController 
{
   use ResponseTrait;
   function __construct()
   {
        $this->model = new ModelMovie();
   }
   public function index()
   {
        $data = $this->model->orderBy('id_movie', 'ASC')->findAll();
        return $this->respond($data, 200);
   }

   public function show($id = null)
   {
        $data = $this->model->where("id_movie", $id)->findAll();
        if($data) {
            return $this->respond($data, 200);
        } else {
            return $this->failNotFound("Movie tidak ada untuk id : $id");
        }
   }

   public function create()
   {
        $data = [
            'judul_movie' => $this->request->getVar('judul_movie'),
            'gambar_movie' => $this->request->getVar('gambar_movie'),
            'detail_movie' => $this->request->getVar('detail_movie'),
            'type_movie' => $this->request->getVar('type_movie')
        ];

        // $this->model->save($data);
        if(!$this->model->save($data)) {
            return $this->fail($this->model->errors());
        }
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Berhasil memasukan data movie'
            ]
        ];
        return $this->respond($response);
   }

   public function update($id = null)
   {
        $data = $this->request->getRawInput();
        $data['id_movie'] = $id;

        $isExist = $this->model->where('id_movie', $id)->findAll();
        if(!$isExist) {
            return $this->failNotFound("Movie tidak ada untuk id : $id");
        }

        if(!$this->model->save($data)) {
            return $this->fail($this->model->errors());
        }

        $response = [
            'status' => 200,
            'error' => null,
            'messages' => [
                'success' => 'Movie berhasil di update'
            ]
        ];

        return $this->respond($response);
   }

   public function delete($id = null)
   {
        $data = $this->model->where('id_movie', $id)->findAll();
        if($data) {
            $this->model->delete($id);
            $response = [
                'status' => 200,
                'error' => null,
                'messages' => [
                    'success' => 'Movie berhasil dihapus'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound("Movie tidak ditemukan");
        }
   }
}