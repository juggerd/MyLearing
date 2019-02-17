@extends ('layouts.header_footer')

@section ('content')

<h2 align="center"> Добавление нового клиента </h2>

    <form method="post" action="{{ route('client.create') }} " >
        @csrf
        Фамилия       <br>  <input type="text" name="surname" value="{{ old('surname')}}">   <br>
        Имя           <br>  <input type="text" name="name" value="{{ old('name')}}" >       <br>
        Отчество      <br>  <input type="text" name="patronymic" value="{{ old('patronymic')}}"> <br>
        Дата рождения <br>  <input type="date" name="birthday" value="{{ old('birthday')}}">
        <br> <br> <button class="btn btn-primary" type="submit"> Применить </button>
    </form>

<h4 align="left"><a href="{{ route('client.list')}}">Перейти к списку клиентов</a></h4>
@endsection
