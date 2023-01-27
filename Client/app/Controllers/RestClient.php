<?php

namespace App\Controllers;

class RestClient extends BaseController
{
    public function index()
    {
        // $client = \Config\Services::curlrequest();
        // $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InJhaWhhbkBnbWFpbC5jb20iLCJpYXQiOjE2NzQ3MTMzMDEsImV4cCI6MTY3NDcxNjkwMX0.uakPAiSf7ULXKbM0l-Mb51FdE94AT0WLRMLds5wCmt0";
        // $url = "http://localhost/TA-CYBER/Server/public/movies/1";
        // $headers = [
        //     'Authorization' => 'Bearer ' . $token
        // ];
        // $response = $client->request('GET', $url, ['headers' => $headers, 'http_error' => false]);
        // echo $response->getBody();

        // Read
        // $url = "http://localhost/TA-CYBER/Server/public/movies/1";
        // $response = $client->request('GET', $url, ['headers'=>$headers, 'http_errors' => false]);
        
        // Create
        // $url = "http://localhost/TA-CYBER/Server/public/movies";
        // $data = [
        //     "judul_movie" => "Spongebob",
        //     "gambar_movie" => "spongebob.jpg",
        //     "detail_movie" => "spongebob film favoriteku",
        //     "type_movie" => "Kartun"
        // ];
        // $response = $client->request('POST', $url, ['form_params' => $data, 'headers'=>$headers, 'http_errors' => false]);
        // print_r($response);

        // Update
        // $url = "http://localhost/TA-CYBER/Server/public/movies/9";
        // $data = [
        //     'judul_movie' => 'Spongebob',
        //     'gambar_movie' => 'spongebob.jpg',
        //     'detail_movie' => 'spongebob film favoriteku',
        //     'type_movie' => 'Anime'
        // ];
        // $response = $client->request('PUT', $url, ['form_params' => $data, 'headers'=>$headers, 'http_errors' => false]);


        // $data = [];
        // $url = "http://localhost/TA-CYBER/Server/public/movies/9";
        // $response = $client->request('DELETE', $url, ['form_params' => $data, 'headers'=>$headers, 'http_errors' => false]);
        // echo $response->getBody();
        helper(['restclient']);
        $url = 'http://localhost/TA-CYBER/Server/public/movies';
        $response = akses_restapi('GET', $url, []);
        $response = json_decode($response, true);
        $data = [
            'dataMovie' => $response
        ];
        return view('index', $data);
    }
}
