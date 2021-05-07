<?php
/**
 * Created by PhpStorm.
 * User: hanwei
 * Date: 2021/5/7
 * Time: 15:20
 */

namespace app\admin\middleware;


use think\facade\Session;

class CheckLogin
{
    public function handle($request, \Closure $next)
    {
        //判断管理员是否登录
        if (!session('admin.id') && !session('admin')) {
            return view('login/index');
        }
        return $next($request);
    }
}