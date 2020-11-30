

<?php $__env->startSection('title','Login'); ?>

<?php $__env->startSection('container'); ?>


<div class="container flex-middle">
<h2 class="mid" style="margin-top: 10px; padding-bottom: 10px;">
    Change Password
</h2>
  <form>
    <div class="form-group">
      <label for="password">Your Password</label>
      <input type="password" class="form-control" id="password">
    </div>
    <div class="form-group">
      <label for="newPassword">New Password</label>
      <input type="password" class="form-control" id="newPassword">
    </div>
    <div class="form-group">
      <label for="confirmNewpassword">Confirm New Password</label>
      <input type="password" class="form-control" id="confirmNewpassword">
    </div>

      <button type="button" class="btn btn-primary" style="margin-top: 20px">Submit</button>
  </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learning\resources\views/changePasswordUser.blade.php ENDPATH**/ ?>