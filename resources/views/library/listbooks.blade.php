@extends('index')

@section('content')

    <form action="/lib/createbooks/create">
        <table border="1">
            <tr>
                <td>Номер жанра:</td>
                <td><input type="text" name="num_janr"></td>
            </tr>
            <tr>
                <td>Название:</td>
                <td><input type="text" name="nazvanie"></td>
            </tr>
            <tr>
                <td>Автор:</td>
                <td><input type="text" name="avtor"></td>
            </tr>
            <tr><td><input type="submit" value="Записать"></td></tr>
        </table>
    </form>

    <table border="1">
        <tr>
            <td>Номер книги</td>
            <td>Номер жанра</td>
            <td>Название</td>
            <td>Автор</td>
        </tr>

        @foreach($knigi as $item1)
            <tr>
                @foreach($item1 as $key => $initem)
                    <td>{{$initem}}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
@endsection