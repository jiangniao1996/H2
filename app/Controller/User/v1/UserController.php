<?php

declare(strict_types=1);

namespace App\Controller\User\v1;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use EasyWeChat\Factory;


class UserController extends Controller
{

    public function login(RequestInterface $request, ResponseInterface $response)
    {
        $code = $request->input('code');
        $nickname = $request->input('nickName');

        $response->json(compact('code', 'nickname'));


    }

    public function bindPhone(RequestInterface $request, ResponseInterface $response)
    {

    }

}