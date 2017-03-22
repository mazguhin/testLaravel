@extends ('layouts.app')

@section ('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">Просмотр города
        [<a href="/city">Все города</a>]
        </div>
        <div class="panel-body">
          <table>
            <thead>
              <th>Наименование</th>
            </thead>
            <tbody>
              <tr>
                <td>{{ $city->name }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@stop
