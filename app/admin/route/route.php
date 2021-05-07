<?php
/**
 * Created by PhpStorm.
 * User: hanwei
 * Date: 2021/5/7
 * Time: 10:28
 */
use think\facade\Route;

Route::get('/','index/index')->middleware(\app\admin\middleware\CheckLogin::class);