<?php

namespace App\Filters;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

use CodeIgniter\HTTP\ResponseTrait;
use Exception;
use CodeIgniter\Config\Services;

class FilterJwt implements FilterInterface
{
    use ResponseTrait;
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        $header = $request->getServer('HTTP_AUTHORIZATION');
        try {
            helper('jwt');
            $encodedToken = getJWT($header);
            validateJWT($encodedToken);
            return $request;
        } catch(Exception $e) {
            return Services::response()->setJSON(
                [
                 'error' => $e->getMessage()
                ]
            )->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}