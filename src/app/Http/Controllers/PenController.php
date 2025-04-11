<?php

namespace App\Http\Controllers;

use App\Models\Pen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenController extends Controller
{
    // fillPenメソッド： fill()
    public function fillPen()
    {
        $pen = new Pen();
        $uuid = (string)Str::uuid();
        $pen->fill([
            'id' => 20, // Eloquent設定により書き換え不可
            'uuid' => $uuid,
            'name' => 'FillPen',
            'price' => 1500,
        ]);
        $pen->save();
    }

    // CreatePenメソッド： create()
    public function createPen()
    {
        $uuid = (string)Str::uuid();
        Pen::create([
            'id' => 20, // Eloquent設定により書き換え不可
            'uuid' => $uuid,
            'name' => 'CreatePen',
            'price' => 1200,
        ]);
    }

    // insertPenメソッド： insert()
    public function insertPen()
    {
        $pen = new Pen();
        $uuid = (string)Str::uuid();
        $pen::insert([
            'id' => 20, // Eloquent設定の影響を受けないため書き換え可能
            'uuid' => $uuid,
            'name' => 'InsertPen',
            'price' => 1800,
        ]);
    }
}
