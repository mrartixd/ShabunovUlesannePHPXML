@extends('layouts.app')
@section('title','Добавление новости')
@section('maincontent')
{!! Form::open(['route' => 'new.store']) !!}
<div class="form-group">
<label name="author">Автор: </label>
<input type="text" class="form-control" name="author" id="author" placeholder="{{ Auth::user()->name }}" required>
<label for="title">Заголовок</label>
<input type="text" class="form-control" name="title" id="title" placeholder="Заголовок" required>
</div>
<div class="form-group">
<label for="description">Описание</label>
<input type="text" class="form-control" name="description" id="description" placeholder="Описание статьи" required>
</div>
<div class="form-group">
<label for="category">Категория</label>
<select id="category" name="category" class="form-control" required>
<?php $new =\DB::select('select * from category'); ?>
  <option selected>Выберите категорию</option>
  @foreach ($new as $category)
  <option> {{$category->id}} </option>
  @endforeach
</select>
</div>
<div class="form-group">
  <label for="description">Текст статьи</label>
  <textarea type="text" class="form-control" id="content" name="content" placeholder="Здесь мог быть ваш текст для статьи..." required></textarea>
</div>
<div class="form-group">
    <label for="links">Ссылка на статью</label>
    <input type="text" class="form-control" id="links" name="links" placeholder="www.site.domain" required>
  </div>
<button type="submit" class="btn btn-primary">Добавить новость</button>
{!! Form::close()!!}
@endsection