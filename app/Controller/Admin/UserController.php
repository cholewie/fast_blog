<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/17
 * Time: 19:42
 */
namespace App\Controller\Admin;
use App\Controller\Controller;
use App\Model\Admin\AdminUserModel;

class UserController extends Controller {

    public function home(int $id)
    {
        $admin = AdminUserModel::query()->find($id);
        return $admin->toArray();
    }
}