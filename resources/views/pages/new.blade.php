@extends('layouts.app')
@section('title','Добавление новости')
@section('maincontent')
<form role ="form" method="POST" action="{{ url('/register') }}">
  <div class="form-group">
    <label for="inputTitle">Заголовок</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Заголовок статьи">
  </div>
<div class="form-group">
<label for="category">Категория</label>
<select id="category" name="category" class="form-control">
<?php $new =\DB::select('select * from category'); ?>
  <option selected>Выберите категорию</option>
  @foreach ($new as $category)
  <option> {{$category->id}} </option>
  @endforeach
</select>
</div>
<div class="form-group">
  <label for="description">Текст статьи</label>
  <textarea type="text" class="form-control" id="description" name="description" placeholder="Здесь мог быть ваш текст для статьи..."></textarea>
</div>
<button type="submit" class="btn btn-primary">Добавить новость</button>
</form>
@endsection