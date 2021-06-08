<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
   //**Register any application services.
    public function index(Request $request)
    {
        return view('hello.index',['txt'=>'フォームを入力']);
    }
    public function post(Request $request)
    {
        $validate_rule = [
            'name'=>'repuired',
            'email'=>'email',
            'age'=>'numeric|between:0,150'
        ];
        $this->validate($request,$validate_rule);
        return view('hello.index',['txt'=>'正しい入力です']);
    }
}
