<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use think\Route;

/************智库***********/

//详情页路由
Route::rule('single/:id','zhiku/Single/index');
Route::rule('admin','zhiku/Admin/index');
Route::rule('admin/add','zhiku/Admin/add');
Route::rule('post/add','zhiku/Post/add');
Route::rule('post/delete','zhiku/Post/delete');
Route::rule('admin/list','zhiku/Admin/artiList');
Route::rule('login','zhiku/Admin/login');
Route::rule('tt','index/index/index');


