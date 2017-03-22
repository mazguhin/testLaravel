@extends ('layouts.app')

@section ('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">Просмотр всех городов
          [<a href="/city/add">Добавить</a>]
        </div>
        <div class="panel-body">
          @if (count($cities)>0)
          <table>
            <thead>
              <th>Наименование</th>
              <th></th>
            </thead>
            <tbody>
              @foreach ($cities as $city)
              <tr>
                <td>{{ $city->name }}</td>
                <td>
                  [<a href="/city/{{$city->id}}">Просмотреть</a>]
                  [<a href="/city/edit/{{$city->id}}">Редактировать</a>]
                  [<a id="deleteBtn{{$city->id}}" href="#">Удалить</a>]

                  <script>
                  $( "#deleteBtn{{$city->id}}" ).click(function() {
                    if (confirm("Удалить город?")) {
                        location="/city/delete/{{ $city->id }}";
                      }
                  });
                  </script>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @endif
        </div>
      </div>
    </div>
  </div>
@stop
