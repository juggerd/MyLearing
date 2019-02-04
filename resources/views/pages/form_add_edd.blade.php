@extends ('templates.header_footer')

@section ('content')

<h2 align="center"> {{ $form_caption }}</h2>

<?if ($form_caption=="Добавление нового клиента"):?>
    <form method="post" action="{{ route('client.create') }} " >
        @csrf
        Фамилия       <br>  <input type="text" name="surname">   <br>
        Имя           <br>  <input type="text" name="name">      <br>
        Отчество      <br>  <input type="text" name="patronymic"><br>
        Дата рождения <br>  <input type="date" name="birthday">
        <br> <br> <button class="btn btn-primary" type="submit"> Применить </button>
    </form>
<?endif?>

<?if ($form_caption=="Изменение данных клиента"):?>
    <form method="post" action="{{ route('client.update',['id'=>$client->id]) }} " >
    @csrf
        Фамилия       <br>  <input type="text" name="surname" value="{{ $client->surname }}">   <br>
        Имя           <br>  <input type="text" name="name" value="{{ $client->name }}">      <br>
        Отчество      <br>  <input type="text" name="patronymic" value="{{ $client->patronymic }}"><br>
        Дата рождения <br>  <input type="date" name="birthday" value="{{ $client->birthday }}">
     <br> <br> <button  class="btn btn-primary" type="submit"> Применить </button>
    </form>
<?endif?>
<!-- xcv -->
@endsection
