<?php $__env->startSection('title','Новости'); ?>
<?php $__env->startSection('maincontent'); ?>
<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">Title</h4>
    <h6 class="card-subtitle mb-2 text-muted">Date and category</h6>
    <p class="card-text">Description</p>
    <a href="#" class="card-link">link</a>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>