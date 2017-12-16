<?php $__env->startSection('title','Добавление новости'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php echo Form::open(['route' => 'new.store']); ?>

<form role ="form">
  <div class="form-group">
    <label for="inputTitle">Заголовок</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Заголовок статьи">
  </div>
<div class="form-group">
<label for="category">Категория</label>
<select id="category" name="category" class="form-control">
<?php $new =\DB::select('select * from category'); ?>
  <option selected>Выберите категорию</option>
  <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option> <?php echo e($category->id); ?> </option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
<div class="form-group">
  <label for="description">Текст статьи</label>
  <textarea type="text" class="form-control" id="description" name="description" placeholder="Здесь мог быть ваш текст для статьи..."></textarea>
</div>
<div class="form-group">
    <label for="inputTitle">Ссылка на статью</label>
    <input type="text" class="form-control" id="links" name="links" placeholder="www.site.domain">
  </div>
<button type="submit" class="btn btn-primary">Добавить новость</button>
</form>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>