<?php

namespace App\Controllers;

class RestClient extends BaseController
{
    public function index()
    {
        $client = \Config\Services::curlrequest();
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InJhaWhhbkBnbWFpbC5jb20iLCJpYXQiOjE2NzQ2MTYyMTgsImV4cCI6MTY3NDYxOTgxOH0.86shWPbK142m6cgxTPsp7u6Xy4UTvvolr2XSvUiwWEE";
        $url = "http://localhost/TA-CYBER/Server/public/movies";
        $headers = [
            'Authorization' => 'Bearer ' . $token
        ];
        $response = $client->request('GET', $url, ['headers'=>$headers, 'http_errors' => false]);
        // print_r($response);
        echo $response->getBody();
    }
}
