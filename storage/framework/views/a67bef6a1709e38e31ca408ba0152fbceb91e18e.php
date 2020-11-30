

<?php $__env->startSection('title','Change Password'); ?>

<?php $__env->startSection('container'); ?>


<div class="container flex-middle">
<br>
<h2 class="mid" style="margin-top: 10px; padding-bottom: 10px;">
    Change Password
</h2>
  <form action="<?php echo e(route('submitPassword')); ?>" method="POST">
  <?php echo e(csrf_field( )); ?>

    <div class="form-group">
      <label for="password">Your Password</label>
      <input name="oldPassword" type="password" class="form-control" id="password">
    </div>
    <?php if(session()->has('error1')): ?>
    <div style="color: red">
        <?php echo e(session()->get('error1')); ?>

      </div>
    <?php endif; ?>
    <div class="form-group">
      <label for="newPassword">New Password</label>
      <input name="newPassword" type="password" class="form-control" id="newPassword">
    </div>
    <?php if($errors->has('newPassword')): ?>
      <div style="color: red">
        <?php echo e($errors->first('newPassword')); ?>

      </div>
    <?php endif; ?>

    <?php if(session()->has('error2')): ?>
    <div style="color: red">
        <?php echo e(session()->get('error2')); ?>

      </div>
    <?php endif; ?>
    <div class="form-group">
      <label for="confirmNewpassword">Confirm New Password</label>
      <input name="newPassword_confirmation" type="password" class="form-control" id="confirmNewpassword">
    </div>
    

      <button type="submit" class="btn btn-primary" style="margin-top: 20px">Submit</button>
  </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarGuest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Sem 5\Web Programming\Projek\learning\resources\views/changePassword.blade.php ENDPATH**/ ?>