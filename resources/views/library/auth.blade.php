@extends('index')

@section('content')
    <form action="/auth" method="POST">
        @csrf
        <table>
            <tr>
                <td>Логин: </td>
                <td><input type="text" name="login" id="loginid"></td>
            </tr>
            <tr>
                <td>Пароль:</td>
                <td><input type="password" name="password" id="passid"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Войти" ></td>
                {{--<td><input type="hidden" name="_token" value="{{ csrf_token() }}" ></td>--}}
            </tr>
        </table>
    </form>

    @endsection