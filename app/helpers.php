<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/19
 * Time: 20:29
 */

function route_class()
{
//  疑问：  Route::currentRouteName() ? 如何获取路由名？
    return str_replace('.', '-', Route::currentRouteName());
}