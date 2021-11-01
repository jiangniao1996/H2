<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use EasyWeChat\Factory;
use EasyWeChat\MiniProgram\Application;

class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();
        $user_mini_program = new Application(config('wechat.mini_program.user'));
        $res = $user_mini_program->auth->getAccessToken();
        return [
            'method' => json_encode($res),
            'message' => "Hello {$user}.",
        ];
    }
}
