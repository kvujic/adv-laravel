<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'nationality'];

    // 表示の仕方を変更
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->age . '才' .') '.$this->nationality;
        return $txt;
    }

    // 1対１のリレーション、１つのレコードしか取り出せないため、単数系の名前を使う
    public function book()
    {
        return $this->hasOne('App\Models\Book');
    }

    // 1対多のリレーション、複数のレコードを取り出せるため、複数系の名前を使う
    public function books() {
        return $this->hasMany('App\Models\Book');
    }

}