

<?php $__env->startSection('container'); ?>



<div class="container flex-middle">

<br>
<br>
<h1 class="mid">
    Login
</h1>
<form action="<?php echo e(route('dataLogin')); ?>" method="post">
<?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  


  <?php if($errors->any()): ?>
      <div style="color: red">
        <?php echo e($errors->first()); ?>

      </div>
      <br>
  <?php endif; ?> 

  <a href="#">Forgot password?</a>

  <div class="form-check">
  
      <input  type="checkbox" class="form-check-input" id="exampleCheck1">
      <label  class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
    <br>

  <div class="mid">
    <button id="buttonSubmit" type="submit" value="Submit" class="btn btn-primary btn-sm">Submit</button>
  </div>
  
  
</form>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarGuest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Sem 5\Web Programming\Projek\learning\resources\views/login.blade.php ENDPATH**/ ?>