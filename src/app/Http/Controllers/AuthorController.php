<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// modelファイルを読み込み、データの取得・追加・更新・削除を行う
use App\Models\Author;

class AuthorController extends Controller
{
    // Authorモデルを利用できるようにする
    public function index()
    {
        $authors = Author::all();  // Authorテーブルから全権取得を行なっている
        // 上記でデータ全権を格納した＄authorsをパラメータとしてindex.blade.phpに渡し、viewを呼び出す。　（'index', 'authors') パラメータ'authors'には$authorsが代入されている
        return view('index', ['authors' => $authors]);
    }

    //データ追加ページの呼び出し
    public function add()
    {
        return view('add');
    }

    //データ追加機能
    public function create(Request $request)
    {
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }

    // データ更新用レコードの呼び出し
    public function edit(Request $request)
    {
        $author = Author::find($request->id);
        return view('edit', ['form' => $author]);
    }

    //　データ更新機能
    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Author::find($request->id)->update($form);
        return redirect('/');
    }

    //　データ削除用レコードの呼び出し
    public function delete(Request $request)
    {
        $author = Author::find($request->id);
        return view('delete', ['author' => $author]);
    }

    //　データ削除機能
    public function remove(Request $request)
    {
        Author::find($request->id)->delete();
        return redirect('/');
    }
}
