

<?php $__env->startSection('container'); ?>

<style>
  
  @import  url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');

  #gambar{
    width: 300px;
    height: 300px;
    
  }

  .card-title{
      color: white;
      font-family: 'Montserrat';
      font-weight: 800;
  }

  #kartu{
    width: 300px;
    height: 370px;
    align-items:  center;
    background-color: lightpink;
  }

  .mid{
    font-family: 'Montserrat';
    font-weight: 800;
  }

  #alert{
    text-align: center;
  }
</style>

<?php if(session()->has('success')): ?>
  <div class="alert alert-success" id="alert"role="alert">
    <?php echo e(session()->get('success')); ?>

  </div>
<?php endif; ?>




<div class="container">

  <br>
  <br>
    <h1 class="mid" style="margin-top: 10px">
        Welcome to Flowelto Shop
    </h1>

    <h2 class="mid" style="margin-top: 10px">
        The Best Flower Shop in Binus University
    </h2>

    <br>
    <br>
</div>

<div class="album">
  
    <div class="container">

      <div class="row">
      <?php $__currentLoopData = $flowerCatQuery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
        <div class="col-lg-4">
          <a href="<?php echo e(route('categoryView',['id'=>$flower->id])); ?>" class="text-decoration-none">
            <div class="card" id="kartu">
              <img src="<?php echo e(asset('/'.$flower->categoryImage)); ?>" id="gambar"  alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo e($flower->categoryName); ?></h5>
                </div>
            </div>
          </a>
        </div>
               
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
    </div>

  </div>

  <br>
  <br>

  <div class="row" style="justify-content: center">
  <?php echo e($flowerCatQuery->links()); ?>

  </div>
 
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbarGuest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learning\resources\views/homeUser.blade.php ENDPATH**/ ?>