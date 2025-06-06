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
@section('title', 'delete.blade.php')

@section('content')
<table>
    <tr>
        <th>id</th>
        <td>{{$author->id}}</td>
    </tr>
    <tr>
        <th>name</th>
        <td>{{$author->name}}</td>
    </tr>
    <tr>
        <th>age</th>
        <td>{{$author->age}}</td>
    </tr>
    <tr>
        <th>nationality</th>
        <td>{{$author->nationality}}</td>
    </tr>
    <tr>
        <th></th>
        <td>
            <form action="/delete?id={{$author->id}}" method="POST">
                @csrf
                <button>送信</button>
            </form>
        </td>
    </tr>
</table>
@endsection