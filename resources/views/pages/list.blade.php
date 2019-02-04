
@extends ('templates.header_footer')

@section ('content')
<h3 align="center">Список всех клиентов</h3>
<table class="table">
    <thead class="thead-dark">
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Дата рождения</th>
        <th>Операции</th>
    </thead>

    <tbody>
       @foreach($clients as $client)
            <tr>
                <td> {{ $client-> surname    }}  </td>
                <td> {{ $client-> name       }}  </td>
                <td> {{ $client-> patronymic }}  </td>
                <td> {{ $client-> birthday   }}  </td>
                <td>
                    <a href="{{ route('client.edit', ['id'=>$client->id])}}"> Изменить   </a> |
                    <a href="{{ route('client.del',  ['id'=>$client->id])}}" >  Удалить     </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('client.add')}}"> <h3 align="center">Добавить нового клиента</h3> </a>
@endsection
