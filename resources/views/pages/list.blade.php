
@extends ('layouts.header_footer')

@section ('content')

<h3 align="center"> Список всех клиентов</h3>

<h5 align="left"><a href="{{ route('client.add')}}"> Добавить нового клиента</a></h5>

<div class="row">

    <div class="col-sm-7">

        <table class="table">
            <thead class="thead-dark" align="center">
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Дата рождения</th>
                <th>Действия</th>
            </thead>

            <tbody align="center">
                @foreach($clients as $client)
                    <tr>
                        <td> {{ $client -> surname    }}  </td>
                        <td> {{ $client -> name       }}  </td>
                        <td> {{ $client -> patronymic }}  </td>
                        <td> {{ $client -> birthday   }}  </td>
                        <td>
                        <a href="{{ route('client.edit',
                                    ['id'=>$client->id])}}"> Изменить </a> |
                        <a href="{{ route('client.del',
                                    ['id'=>$client->id])}}"> Удалить </a> ||
                        <a href="{{ route('client.reestrs_list',
                                    ['id'=>$client->id])}}" > Реестры </a> |
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


</div>


@endsection
