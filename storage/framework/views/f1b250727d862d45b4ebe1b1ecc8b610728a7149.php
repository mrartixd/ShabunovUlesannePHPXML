<?php $__env->startSection('title','Новости'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $news =\DB::select('select * from news'); ?>
  <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card" style="margin-bottom: 20px;">
  <div class="card-body">
    <h4 class="card-title"><?php echo e($new->title); ?> <br> <?php echo e($new->created_at); ?> &nbsp; <?php echo e($new->idcategory); ?></h4>
    <h6 class="card-subtitle mb-2 text-muted"> <?php echo e($new->description); ?></h6>
    <p class="card-text"><?php echo e($new->content); ?></p>
    <a href="<?php echo e($new->slug); ?>" class="card-link"><?php echo e($new->slug); ?></a>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if(empty($news)): ?>
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Нету Новостей!</h4>
  <p>Зарегистрируйтесь и добавьте первую запись</p>
  <hr>
  <p class="mb-0">Или войдите и добавьте первую запись</p>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>