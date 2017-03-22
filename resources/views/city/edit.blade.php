@extends ('layouts.app')

@section ('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">Редактирование города
        [<a href="/city">Все города</a>]
      </div>
        <div class="panel-body">
          <form action="/city/edit/{{ $city->id }}" method="post">
            <div class="form-group">
              <label for="name">Наименование</label>
              <input type="text" name="name" value="{{ $city->name }}" class="form-control" required>
            </div>

            {{ csrf_field() }}
            <button type="submit" name="button">Сохранить</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
