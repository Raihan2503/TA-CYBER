<?php

namespace App\Controllers;

use App\Models\ModelOtentikasi;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
 
class Register extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use ResponseTrait;
    public function index()
    {
        helper(['form']);
        $rules = [
            'email' => 'required|valid_email|is_unique[otentikasi.email]',
            'password' => 'required|min_length[6]',
            'confpassword' => 'matches[password]'
        ];
        if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());
        $data = [
            'email'     => $this->request->getVar('email'),
            'password'  => md5($this->request->getVar('password')) 
        ];
        $model = new ModelOtentikasi();
        $registered = $model->save($data);
        $this->respondCreated($registered);
 
    }
 
}
