{{-- レコードの内容を記述するためのフォーム --}}
@extends('layouts.default')
<style>
    th {
        background-color: #289adc;
        color: white;
        padding: 5px 40px;
    }
    tr:nth-child(odd) td {
        background-color: #ffffff;
    }
    td {
        padding: 25px 40px;
        background-color: #eeeeee;
        text-align: center;
    }
    button {
        background-color: #289adc;
        color: white;
        padding: 10px 20px;
        border: none;
    }
</style>
@section('title', 'add.blade.php')

@section('content')
{{-- formタグ内のaction属性は、ルーティングで指定したパスを使用する --}}
<form action="/add" method="POST">
    <table>
    @csrf
        <tr>
            <th>name</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>age</th>
            <td><input type="text" name="age"</td>
        </tr>
        <tr>
            <th>nationality</th>
            <td><input type="text" name="nationality"></td>
        </tr>
        <tr>
            <th></th>
            <td><button>送信</button></td>
        </tr>
    </table>
</form>
@endsection