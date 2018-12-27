@extends('index')

@section('content')
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
            @if($key == 'sostoyanie' && $initem = 1)
                <td>
                    <input type="submit" value="Забрать">
                </td>
                @endif
            @endforeach
        </tr>
        @endforeach
    </table>
    {{--{{ var_dump($table) }}--}}
    @endsection