@extends('layouts.app')
@section('title','Новости')
@section('maincontent')
<?php $news =\DB::select('select * from news'); ?>
  @foreach ($news as $new)
  <div class="card" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">{{$new->title}}</h4>
    <h6 class="card-subtitle mb-2 text-muted">{{$new->pubdate}} &nbsp; {{$new->id_category}}</h6>
    <p class="card-text">{{$new->description}}</p>
    <a href="{{$new->link}}" class="card-link">{{$new->link}}</a>
  </div>
</div>
@endforeach
@empty($news)
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Нету Новостей!</h4>
  <p>Зарегистрируйтесь и добавьте первую запись</p>
  <hr>
  <p class="mb-0">Или войдите и добавьте первую запись</p>
</div>
@endempty
@endsection