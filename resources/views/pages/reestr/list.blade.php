
@extends ('layouts.header_footer')

@section ('content')

<div class="row">

      <div class="col-sm-4">
          <h3 align="center"> Список реестров</h3>
          <table class="table">
                  <thead  class="thead-dark" align="center">
                      <th>Начало</th>
                      <th>Окончание</th>
                  </thead>

                  <tbody align="center">
                      @foreach($reestrs as $reestr)
                          <tr>
                              <td> {{ $reestr -> date_from}} </td>
                              <td> {{ $reestr -> date_to}} </td>
                          </tr>
                      @endforeach
                  </tbody>
          </table>
      </div>
</div>
<h5 align="left"><a href="{{ route('reestr.add')}}"> Добавить новый реестр</a></h5>


@endsection
