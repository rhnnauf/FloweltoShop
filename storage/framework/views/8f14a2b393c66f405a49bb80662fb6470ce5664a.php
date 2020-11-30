

<?php $__env->startSection('container'); ?>


<br>
<br>
<body>
<div class="container flex-middle">
<h1 class="mid">
    Register
</h1>
<form action="<?php echo e(route('registerInsert')); ?>" method="post">
<?php echo e(csrf_field( )); ?>

  <div class="form-group" >
    <label for="exampleInputEmail1" style="margin: 10px 10px 0 0">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
    <?php if($errors->has('username')): ?>
      <div style="color: red">
        <?php echo e($errors->first('username')); ?>

      </div>
    <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <?php if($errors->has('email')): ?>
      <div style="color: red">
        <?php echo e($errors->first('email')); ?>

      </div>
    <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <?php if($errors->has('password')): ?>
      <div style="color: red">
        <?php echo e($errors->first('password')); ?>

      </div>
    <?php endif; ?>  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
    <?php if($errors->has('password_confirmation')): ?>
      <div style="color: red">
        <?php echo e($errors->first('password_confirmation')); ?>

      </div>
    <?php endif; ?> 
  </div>

  <div class="form-group">
      Gender
      <br>
      <input type="radio" id="male" name="gender" value="1">
      <label for="male">Male</label>
      <input type="radio" id="female" name="gender" value="2">
      <label for="female">Female</label>

      <?php if($errors->has('gender')): ?>
      <div style="color: red">
        <?php echo e($errors->first('gender')); ?>

      </div>
     <?php endif; ?> 
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Date of Birth</label>
    <input type="date" name="dob" class="form-control" id="date">
    <?php if($errors->has('dob')): ?>
      <div style="color: red">
        <?php echo e($errors->first('dob')); ?>

      </div>
     <?php endif; ?> 
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <textarea name="address" class="form-control" id="address">
    </textarea>
    <?php if($errors->has('address')): ?>
      <div style="color: red">
        <?php echo e($errors->first('address')); ?>

      </div>
    <?php endif; ?> 
  </div>


  <div class="mid">
    <button id="buttonSubmit" type="submit" value="Submit" class="btn btn-primary btn-sm">Submit</button>
  </div>
  

</form>

</body>

<br>
<br>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarGuest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Sem 5\Web Programming\Projek\learning\resources\views/register.blade.php ENDPATH**/ ?>