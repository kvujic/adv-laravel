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
        background-color: #eeeeee;
        padding: 25px 40px;
        text-align: center;
    }

    button {
        background-color: #289adc;
        color: white;
        border: none;
        padding: 10px 20px;
    }
</style>
@section('title', 'edit.blade.php')

@section('content')
@if(count($errors) > 0)
<p>入力に誤りがあります</p>
@endif

{{-- formタグ内のaction属性は、ルーティングで指定したパスを使用する --}}
{{-- <input type="hidden" name="_method" value="PUT">はPUTメソッドを指定するために必要 --}}
<form action="/edit" method="POST">
    <table>
        @csrf
        @error('id')
        <tr>
            <th style="background-color: red">ERROR</th>
            <td>{{$errors->first('id')}}</td>
        </tr>
        @enderror
        <tr>
            <th>id</th>
            <td><input type="text" name="id" value="{{$form->id}}"></td>
        </tr>
        @error('name')
        <tr>
            <th style="background-color: red">ERROR</th>
            <td>{{$errors->first('name')}}</td>
        </tr>
        @enderror
        <tr>
            <th>name</th>
            <td><input type="text" name="name" value="{{$form->name}}"></td>
        </tr>
        @error('age')
        <tr>
            <th style="background-color: red">ERROR</th>
            <td>{{$errors->first('age')}}</td>
        </tr>
        @enderror
        <tr>
            <th>age</th>
            <td><input type="text" name="age" value="{{$form->age}}"></td>
        </tr>
        @error('nationality')
        <tr>
            <th style="background-color: red">ERROR</th>
            <td>{{$errors->first('nationality')}}</td>
        </tr>
        @enderror
        <tr>
            <th>nationality</th>
            <td><input type="text" name="nationality" value="{{$form->nationality}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><button>送信</button></td>
        </tr>
    </table>
</form>
@endsection