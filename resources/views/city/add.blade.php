@extends ('layouts.app')

@section ('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">Добавление города
          [<a href="/city">Все города</a>]
        </div>
        <div class="panel-body">
          <form action="/city/add" method="post">
            <div class="form-group">
              <label for="name">Наименование</label>
              <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
            </div>

            {{ csrf_field() }}
            <button type="submit" name="button">Создать</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
