<?php 
namespace App\Controllers;

use App\Models\ModelMovie;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Movies extends ResourceController 
{
    use ResponseTrait;
    // constructor
    public function __construct()
    {
        $this->model = new ModelMovie();
    }


    // ambil semua movie dari database
    public function index()
    {
        // $model = new ModelMovie();
        $data = $this->model->getMovie();
        return $this->respond($data, 200);
    }

    // mengambil satu data
    public function show($id = null)
    {
        $data = $this->model->getMovie($id);
        $id = $this->model->find($id);
        if($id) {
            return $this->respond($data, 200);
        } else {
            return $this->respond(["status" => "ID tidak ditemukan"], 404);
        }
    }

    // tambah movie
    public function create()
    {
        $data = [
            // 'id_movie' => $this->request->getPost('id_movie'),
            'judul_movie' => $this->request->getPost('judul_movie'),
            'gambar_movie' => $this->request->getPost('gambar_movie'),
            'detail_movie' => $this->request->getPost('detail_movie'),
            'type_movie' => $this->request->getPost('type_movie')
            
        ];
        $data = json_decode(file_get_contents("php://input"));
        $data = $this->request->getPost(); 
        $this->model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Data saved'
            ]
        ];
        return $this->respondCreated($response, 201);
    }

    public function update($id = null)
    {
        $id = $this->model->find($id);
          if($id) {
            $input = $this->request->getRawInput();
            $data = [
                'judul_movie' => $input['judul_movie'],
                'gambar_movie' => $input['gambar_movie'],
                'detail_movie' => $input['detail_movie'],
                'type_movie' => $input['type_movie']
            ];
            // Insert to Database
            $this->model->update($id, $data);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Movie berhasil diupdate'
                ]
            ];
            return $this->respond($response);
        }
        return $this->respond(array("status" => "Movie gagal diupdate"), 200);
    }

    // Delete movies
    public function delete($id = null)
    {
        $data = $this->model->find($id);
        if($data){
            $this->model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Movie berhasil dihapus'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('Movie tidak ada');
        }        
    }
}