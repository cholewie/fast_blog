<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

use Hyperf\HttpServer\Router\Router;

//登录，注册，密码找回，不需要中间件
Router::post('/login','App\Controller\Admin\SessionController@login');
Router::post('/sign','App\Controller\Admin\SessionController@sign');
Router::post('/reset','App\Controller\Admin\SessionController@reset');


Router::addGroup('/admin',function(){
    Router::get('/home/{id}','App\Controller\Admin\UserController@home');
},
    [
        'middleware'=>[\App\Middleware\Auth\AdminUserMiddleware::class]
    ]
);