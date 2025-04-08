<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // セッションの値を取得する
    public function getSes(Request $request)
    {
        $data = $request->session()->get('txt');
        return view('/session', ['data' => $data]);
    }
    // セッションの値を保存する
    public function postSes(Request $request)
    {
        $txt = $request->input; // ('txt');必要か？
        $request->session()->put('txt', $txt);
        return redirect('/session');
    }
}
