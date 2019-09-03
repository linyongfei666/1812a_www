<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function add()
    {
        $data = [
            'uname' => 'zhangsan',
        ];
        $uid =User::insertGetId($data);
        var_dump($uid);
    }

    public function redisTest()
    {
        $key = 'abc';
        $val = Redis::get($key);
        var_dump($val);
    }
}
