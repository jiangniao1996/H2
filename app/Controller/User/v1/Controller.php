<?php

declare(strict_types=1);

namespace App\Controller\User\v1;

use App\Controller\AbstractController;
use EasyWeChat\Factory;

class Controller extends AbstractController
{
    protected $user_mini_program;

    public function __construct()
    {
        parent::__construct();

        $this->user_mini_program = Factory::miniProgram(config('wechat.mini_program.user'));
    }


}