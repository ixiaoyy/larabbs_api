<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 引入用户模型
use App\Models\User;

use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    // 创建一个 show 方法展示用户个人页面
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
      * Desc: 编辑用户页面
      * User: YuY
      * Date: 2020/3/30
      */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
      * Desc: 更新用户方法
      * User: YuY
      * Date: 2020/3/30
      */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功!');
    }
}
