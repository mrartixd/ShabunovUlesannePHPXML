<?php $__env->startSection('title','Добавление новости'); ?>
<?php $__env->startSection('maincontent'); ?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Ура!</h4>
  <p>Ваша запись была добавлена</p>
  <hr>
  <p class="mb-0">Можете вернуться на главную страницу</p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>