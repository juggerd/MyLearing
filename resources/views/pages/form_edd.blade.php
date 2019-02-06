@extends ('templates.header_footer')

@section ('content')

<h2 align="center"> Изменение данных клиента </h2>

    <form method="post" action="{{ route('client.update',['id'=>$client->id]) }} " >
    @csrf
        <b>Фамилия</b>       <br>  <input type="text" name="surname" value="{{ $client->surname }}">   <br>  
        <b>Имя</b>           <br>  <input type="text" name="name" value="{{ $client->name }}">      <br>
        Отчество      <br>  <input type="text" name="patronymic" value="{{ $client->patronymic }}"><br>
        Дата рождения <br>  <input type="date" name="birthday" value="{{ $client->birthday }}">  
     <br> <br> <button  class="btn btn-primary" type="submit"> Применить </button>
    </form>

<h4 align="left"><a href="{{ route('client.list')}}">Перейти к списку клиентов</a></h4>
@endsection