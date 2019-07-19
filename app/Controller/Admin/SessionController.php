<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/17
 * Time: 20:21
 */
namespace App\Controller\Admin;
use App\Controller\Controller;

class SessionController extends Controller {

    public function login()
    {
        return [
            'code'=>1,
            'token'=>'007'
        ];
    }
    public function sign()
    {
        return [
            'code'=>1,
            'token'=>'007'
        ];
    }
    public function reset()
    {
        return [
            'code'=>1,
            'token'=>'007'
        ];
    }
}