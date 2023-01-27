<?php
use App\Models\ModelToken;

function akses_restapi($method, $url, $data)
{
    $client = \Config\Services::curlrequest();
    $modelToken = new ModelToken();
    $idToken = "1";
    $token = $modelToken->getToken($idToken);

    $tokenPart = explode(".", $token);
    $payload = $tokenPart[1];
    $decode = base64_decode($payload);
    $json = json_decode($decode, true);
    $exp = $json['exp'];
    $waktuSekarang = time();
    if($exp <= $waktuSekarang) {
        $url = 'http://localhost/TA-CYBER/Server/public/otentikasi';
        $form_params = [
            'email' => 'raihan@gmail.com',
            'password' => '123456'
        ];
        $response = $client->request('POST', $url, ['http_errors' => false, 'form_params' => $form_params]);
        $response = json_decode($response->getBody(), true);
        $token = $response['access_token'];
        $dataToken = [
            'id' => $idToken,
            'token' => $token
        ];
        $modelToken->save($dataToken);
    }

    // mengirim request
    $headers = [
        'Authorization' => 'Bearer ' . $token
    ];

    $response = $client->request($method, $url, ['headers' => $headers, 'http_errors' => false, 'form_params' => $data]);
    return $response->getBody();
}