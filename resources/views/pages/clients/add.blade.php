@extends('layouts.app')
@section('content')

    <h1>Создать нового клиента</h1>

    <form method="post" action="{{ route('clients.save') }}">
        @csrf
        Фамилия <input type="text" name="surname"><br>
        Имя <input type="text" name="name"><br>
        Отчество <input type="text" name="patronymic"><br>
        Возраст <input type="number" name="age"><br>
        <button type="submit">Добавить</button>
    </form>

@endsection