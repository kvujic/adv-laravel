@extends('layouts.default')
<style>
    th {
        background-color: #289adc;
        color: white;
        padding: 5px 40px;
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
@section('title', 'book.add.blade.php')

@section('content')
@if(count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action="/book/add" method="POST">
    <table>
        @csrf
       <tr>
        <th>author_id:</th>
        <td><input type="id" name="author_id"></td>
       </tr>
       <tr>
        <th>title:</th>
        <td><input type="text" name="title"></td>
       </tr>
    </table>
    <button>送信</button>
</form>
@endsection

