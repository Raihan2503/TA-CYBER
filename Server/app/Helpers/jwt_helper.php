<?php
use App\Models\ModelOtentikasi;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function getJWT($otentikasiHeader) {
    if(is_null($otentikasiHeader)) {
        throw new Exception("Silahkan masukan token");
    }
    return explode(" ", $otentikasiHeader)[1];
}
function validateJWT($encodedToken) 
{
    $key = getenv('JWT_SECRET_KEY');
    // $decodedToken = JWT::decode($encodedToken, $key, ['HS256']);
    $decodedToken = JWT::decode($encodedToken, new Key($key, 'HS256'));
    $modelOtentikasi = new ModelOtentikasi();

    // cek email
    $modelOtentikasi->getEmail($decodedToken->email);
}

function createJWT($email)
{
    $waktuRequest = time();
    $waktuToken = getenv('JWT_TIME_TO_LIVE');
    $waktuExpired = $waktuRequest + $waktuToken;
    $payload = [
        'email' => $email,
        'iat' => $waktuRequest,
        'exp' => $waktuExpired
    ];

    $jwt = JWT::encode($payload, getenv('JWT_SECRET_KEY'), 'HS256');
    return $jwt;
}