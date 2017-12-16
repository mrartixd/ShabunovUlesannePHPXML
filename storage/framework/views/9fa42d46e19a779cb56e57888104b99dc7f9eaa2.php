<?php $__env->startSection('title','Добавление новости'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php echo Form::open(['route' => 'new.store']); ?>

<div class="form-group">
<label name="author">Автор: </label>
<input type="text" class="form-control" name="author" id="author" placeholder="<?php echo e(Auth::user()->name); ?>" required>
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
  <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option> <?php echo e($category->id); ?> </option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>