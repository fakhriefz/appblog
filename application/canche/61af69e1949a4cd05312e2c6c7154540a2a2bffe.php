
<?php $__env->startSection('content'); ?>
<br>
<br>
<?php if($notif != null): ?>
<div class="alert alert-info" role="alert">
  <?php echo e($notif); ?>

</div>
<?php endif; ?>
<form method="post" action="<?php echo e(current_url()); ?>">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="<?php echo e(''); ?>">
  </div>
  <div class="mb-3">
    <label for="article" class="form-label">Article</label>
    <textarea class="form-control" name="article"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.backend.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\fakhri web\appblog\application\views/backend/Article/form.blade.php ENDPATH**/ ?>