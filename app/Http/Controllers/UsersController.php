<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 引入用户模型
use App\Models\User;

class UsersController extends Controller
{
    // 创建一个 show 方法展示用户个人页面
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
