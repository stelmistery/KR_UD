@extends('index')

@section('content')
    <form action="/lib/createorders/create" method="GET">
        <span>Номер читателя</span><input type="text" name="id_reader"> <br>
        <span>Номер библиотекаря</span><input type="text" name="id_lib"><br>
        <span>Номер книги</span><input type="text" name="id_book"><br>
        <input type="submit" value="Запись">
    </form>
    @endsection