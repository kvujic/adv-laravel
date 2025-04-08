{{-- 親の内容を子に継承（’親レイアウトのディレクトリ名’, ’親レイアウトのファイル名’ --}}
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

    svg.w-5.h-5 {
        wiedth: 30px;
        height: 30px;
    }
</style>

{{-- @yield('title')として'index.blade.php'が表示される --}}
@section('title', 'index.blade.php')

{{-- 以下の表が@yield('content')として表示される --}}
@section('content')
<table>
    <tr>
        <th>DATA</th>
    </tr>

    {{-- $authorsには複数のレコードが複数の連想配列となって格納されているため、一つ一つ取り出し、繰り返し表示する --}}
    @foreach ($authors as $author)
    <tr>
        <td>{{$author->getDetail()}}</td>
    </tr>
    @endforeach
</table>
{{ $authors->links() }}
{{-- $authorsの中にあるページネーションの情報を表示するためにlinks()メソッドを使用 --}}
{{-- これにより、ページネーションのリンクが表示される --}}
@endsection