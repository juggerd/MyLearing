@extends('layouts.app')
@section('content')

    <h1>Редактировать клиента</h1>

    <form method="post" action="{{ route('clients.update', ['id' => $client->id]) }}">
        @csrf
        Фамилия <input type="text" name="surname" value="{{ $client->surname }}"><br>
        Имя <input type="text" name="name" value="{{ $client->name }}"><br>
        Отчество <input type="text" name="patronymic" value="{{ $client->patronymic }}"><br>
        Возраст <input type="number" name="age" value="{{ $client->age }}"><br>
        <button type="submit">Изменить</button>
    </form>

@endsection