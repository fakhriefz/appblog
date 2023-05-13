

<?php $__env->startSection('content'); ?>
<br>
<br>

<?php if($notif != null): ?>
<div class="alert alert-info" role="alert">
 <?php echo e($notif); ?>

</div>
<?php endif; ?>


<form method="post"action="<?php echo e(current_url()); ?>">
  <div class="mb-3">
    <label for="Username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username" value="<?php echo e($user->username); ?>"> 
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="text" class="form-control" name="password" id="password" value="<?php echo e($user->password); ?>">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.backend.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\fakhri web\appblog\application\views/backend/User/profile.blade.php ENDPATH**/ ?>