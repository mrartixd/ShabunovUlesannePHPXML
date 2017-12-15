@extends('layouts.app')
@section('title','Добавление новости')
@section('maincontent')
<form>
  <div class="form-group">
    <label for="inputTitle">Заголовок</label>
    <input type="text" class="form-control" id="inputTitle" placeholder="Заголовок статьи">
  </div>
<div class="form-group">
<label for="inputState">Категория</label>
<select id="inputState" class="form-control">
  <option selected>Выберите категорию</option>
  <option>...</option>
</select>
</div>
<div class="form-group">
  <label for="inputtext">Текст статьи</label>
  <textarea type="text" class="form-control" id="inputtext" placeholder="Здесь мог быть ваш текст для статьи..."></textarea>
</div>
<button type="submit" class="btn btn-primary">Добавить новость</button>
</form>
@endsection