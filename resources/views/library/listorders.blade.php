@extends('index')   

@section('content')
    <form action="/lib/closeorder/close">
       Забрать книгу: <input type="text" name="id_order">
        <input type="submit" value="Забрать">
    </form>

    <table class="table-list" border="1">
        <tr>
            <td>Запись</td>
            <td>Читателя</td>
            <td>Библиотекарь</td>
            <td>Книга</td>
            <td>Дата выдачи</td>
            <td>Дата возврата</td>
            <td>состояние</td>
        </tr>
    @foreach($table as $item1)
        <tr>
        @foreach($item1 as $key => $initem)
            <td>{{$initem}}</td>
            @endforeach
        </tr>
        @endforeach
    </table>
    {{--{{ var_dump($table) }}--}}
    @endsection