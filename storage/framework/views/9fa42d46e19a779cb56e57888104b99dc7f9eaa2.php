<?php $__env->startSection('title','Добавление новости'); ?>
<?php $__env->startSection('maincontent'); ?>
<form role ="form" method="POST" action="<?php echo e(url('/register')); ?>">
  <div class="form-group">
    <label for="inputTitle">Заголовок</label>
    <input type="text" class="form-control" id="inputTitle" placeholder="Заголовок статьи">
  </div>
<div class="form-group">
<label for="inputState">Категория</label>
<select id="inputState" class="form-control">
  <option selected>Выберите категорию</option>
  <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option> <?php echo e($category->namecategory); ?> </option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
<div class="form-group">
  <label for="inputtext">Текст статьи</label>
  <textarea type="text" class="form-control" id="inputtext" placeholder="Здесь мог быть ваш текст для статьи..."></textarea>
</div>
<button type="submit" class="btn btn-primary">Добавить новость</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>