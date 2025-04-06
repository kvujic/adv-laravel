<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// modelファイルを読み込み、データの取得・追加・更新・削除を行う
use App\Models\Author;

//　 formリクエストを利用するために、AuthorRequestを読み込む
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{
    // Authorモデルを利用できるようにする
    public function index()
    {
        $authors = Author::all();  // Authorテーブルから全権取得を行なっている

        // debug用
        //dd($authors);

        // 上記でデータ全権を格納した＄authorsをパラメータとしてindex.blade.phpに渡し、viewを呼び出す。　（'index', 'authors') パラメータ'authors'には$authorsが代入されている
        return view('index', ['authors' => $authors]);
    }

    //データ追加ページの呼び出し
    public function add()
    {
        return view('add');
    }

    //データ追加機能 Request -> AuthorRequest
    // AuthorRequestを利用することで、バリデーションを行うことができる
    public function create(AuthorRequest $request)
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
    public function update(AuthorRequest $request)
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

    //　エラーメッセージの表示
    public function verror()
    {
        return view('verror');
    }

    //　name属性を利用して検索
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Author::where('name', 'LIKE', "%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item,
        ];
        return view('find', $param);
    }

    // bindメソッドを利用して、URLのパラメータを取得。パラメータは、ルーティングで指定した{author}に格納され,その数値がauthorのidを示す値として扱われる。
    public function bind(Author $author)
    {
        $data = [
            'item' => $author,
        ];
        return view('author.binds', $data);
    }

    //　リレーションの確認
    public function relate()
    {
        $hasItems = Author::has('book')->get();
        $noItems = Author::doesntHave('book')->get();
        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('author.index', $param);
    }
}
