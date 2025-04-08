<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Models\Author;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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
Route::get('/author/{author}', [AuthorController::class,'bind']);
Route::get('/verror', [AuthorController::class, 'verror']);

Route::prefix('book')->group(function() {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);
});

Route::get('/relation', [AuthorController::class, 'relate']);

Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);


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