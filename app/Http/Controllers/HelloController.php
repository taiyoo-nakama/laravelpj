<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'content' => '自由に入力してください',
        ];
        return view('hello.index', $data);
    }
    public function post(Request $request)
    {
        $content = $request->content;
        $data = [
            'content' => $content.'とにゅうりょくしましたね'
        ];
        return view('hello.index',$data);
    }
}
