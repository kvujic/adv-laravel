<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Models\Person;
use App\Models\Author;
use App\Models\Product;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PenController;

/*
データベースに値が保存されているか確認するためのルート
use Illuminate\Support\Facades\Session;
*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthorController::class, 'index']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);
Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/author/{author}', [AuthorController::class, 'bind']);
Route::get('/verror', [AuthorController::class, 'verror']);

Route::prefix('book')->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);
});

Route::get('/relation', [AuthorController::class, 'relate']);

Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

// 論理削除の実行
Route::get('/softdelete', function () {
    Person::find(1)->delete();
});

// 論理削除されたレコードの確認
Route::get('softdelete/get', function () {
    $person = Person::onlyTrashed()->get();
    dd($person);
});

// 削除されたレコードの復元
Route::get('softdelete/store', function () {
    $result = Person::onlyTrashed()->restore();
    echo $result;
});

// 論理削除したレコードの完全削除
Route::get('softdelete/absolute', function () {
    $result = Person::onlyTrashed()->forceDelete();
    echo $result;
});

// uuid
Route::get('uuid', function () {
    $products = Product::all();
    foreach ($products as $product) {
        echo $product . '<br>';
    }
});

Route::get('fill', [PenController::class, 'fillPen']);
Route::get('create', [PenController::class, 'createPen']);
Route::get('insert', [PenController::class, 'insertPen']);


/*　
データベースに値が保存されているか確認するためのルート

セッションに値を保存する
Route::get('/session-test', function() {
    Session::put('test_key', 'これはテストです');
    return 'セッションに値を保存しました。';
});

セッションの値を取得する
Route::get('/session-check', function() {
    $value = Session::get('test_key', 'セッションに値がありません');
    return "セッションの値: " . $value;
});
*/