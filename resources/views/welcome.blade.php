@extends('layouts.app')
@section('title','Новости')
@section('maincontent')
<?php $news =\DB::select('select * from news'); ?>
  @foreach ($news as $new)
  <div class="card" style="width: 20rem; margin-bottom: 20px;">
  <div class="card-body">
    <h4 class="card-title">{{$new->title}} <br> {{$new->created_at}} &nbsp; {{$new->idcategory}}</h4>
    <h6 class="card-subtitle mb-2 text-muted"> {{$new->description}}</h6>
    <p class="card-text">{{$new->content}}</p>
    <a href="{{$new->slug}}" class="card-link">{{$new->slug}}</a>
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