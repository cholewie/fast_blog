<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/17
 * Time: 18:43
 */
namespace App\Model\Admin;
use App\Model\Model;

class ResetModel extends Model {

    protected $table = 'password_reset';

    protected $fillable = [
        'token',
        'email'
    ];
}