@extends('index')

@section('content')

    <form action="/lib/createreaders/create">
        <table border="1">
            <tr>
                <td>Фамилия:</td>
                <td><input type="text" name="famil"></td>
            </tr>
            <tr>
                <td>Имя:</td>
                <td><input type="text" name="imya"></td>
            </tr>
            <tr>
                <td>Отчество:</td>
                <td><input type="text" name="otch"></td>
            </tr>
            <tr>
                <td>Адрес:</td>
                <td><input type="text" name="adres"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Записать"></td>
            </tr>
        </table>
    </form>


<table border="1">
    <tr>
        <td>Номер читателя</td>
        <td>Фамиля</td>
        <td>Имя</td>
        <td>Отчество</td>
        <td>Адрес</td>
    </tr>

    @foreach($readers as $item1)
        <tr>
            @foreach($item1 as $key => $initem)
                <td>{{$initem}}</td>
            @endforeach
        </tr>
    @endforeach
</table>
@endsection