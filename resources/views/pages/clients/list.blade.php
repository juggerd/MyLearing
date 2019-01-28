@extends('layouts.app')
@section('content')

    <h1>Список клиентов</h1>

    <a href="{{ route('clients.add') }}">+ Добавить</a>

    <table border="1">
        <thead>
        <tr>
            <th>id</th>
            <th>имя</th>
            <th>фамилия</th>
            <th>отчество</th>
            <th>возраст</th>
            <th>действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->surname }}</td>
                <td>{{ $client->patronymic }}</td>
                <td>{{ $client->age }}</td>
                <td>
                    <a href="{{ route('clients.edit', ['id' => $client->id]) }}">Изменить</a>
                    <a href="{{ route('clients.delete', ['id' => $client->id]) }}">Удалить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection