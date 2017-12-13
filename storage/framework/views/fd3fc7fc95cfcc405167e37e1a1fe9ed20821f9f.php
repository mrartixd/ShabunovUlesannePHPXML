<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <title>Shabunov UlesannePHPXML - <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="<?php echo e(URL::to('css/bootstrap.min.css')); ?>" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">UlesannePHPXML</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/home')); ?>">Новости</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Категории
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Заменить</a>
          <a class="dropdown-item" href="#">Заменить</a>
          <a class="dropdown-item" href="#">Заменить</a>
        </div>
      </li>
      <!-- Authentication Links -->
      <?php if(Auth::guest()): ?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(url('/login')); ?>">Войти<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(url('/register')); ?>">Регистрация<span class="sr-only">(current)</span></a>
      </li>
      <?php else: ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
        </a>
      <ul class="dropdown-menu" role="menu">
      <li>
          <a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Добавить новость </a>
            <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;"><?php echo e(csrf_field()); ?></form>
        </li>
        <li>
          <a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход </a>
            <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;"><?php echo e(csrf_field()); ?></form>
        </li>
        
      </ul>
      </li>
         <?php endif; ?>
    </ul>
  </div>
</nav>
<p class="lead"> 
<div class="container" style="padding-top:20px; padding-bottom:20px;">
<div class="row">
<div class="col-12 col-md-12">
	<div class="card" style="width: 20rem;">
  <div class="card-header">
    Задание
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Создать БД NewsBD</li>
    <li class="list-group-item"> Таблицы Users, News, Category </li>
    <li class="list-group-item">Зарегистрированные пользователи добавляют новости</li>
	  <li class="list-group-item">RSS XML экспорт</li>
	  <li class="list-group-item">Отображение новостей</li>
  </ul>
</div>
</div>
    <?php echo $__env->yieldContent('maincontent'); ?>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
<footer> <div class="fixed-bottom p-3  bg-white text-black"><hr><center>Artur Shabunov 2017</center></div></footer>
</html>