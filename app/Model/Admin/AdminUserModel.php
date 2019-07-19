<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/17
 * Time: 17:08
 */
namespace App\Model\Admin;

use App\Model\Model;

class AdminUserModel extends Model {

    protected $table = 'admin_users';

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}