@extends ('layouts.header_footer')

<div class="container-fluid">

<div class="row">
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Работа с клиентами и реестрами </h5>
        <p class="card-text">Поиск,добавление и редактирование клиентов и реестров услуг</p>
        <a href= "{{ route('client.list') }}" class="btn btn-primary">Перейти...</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Отчет</h5>
        <p class="card-text">Формирование форм отчетов</p>
        <a href="#" class="btn btn-primary">Перейти...</a>
      </div>
    </div>
  </div>
</div>

</div>
