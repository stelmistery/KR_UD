@extends('index')

@section('content')
    <form action="/lib/createorders/create" method="GET">
        <table>
            <tr>
                <td><span>Номер читателя</span></td>
                <td><input type="text" name="id_reader"></td>
            </tr>
            <tr>
                <td><span>Номер библиотекаря</span></td>
                <td><input type="text" name="id_lib"></td>
            </tr>
            <tr>
                <td><span>Номер книги</span></td>
                <td><input type="text" name="id_book"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Запись"></td>
            </tr>
        </table>
    </form>
    @endsection