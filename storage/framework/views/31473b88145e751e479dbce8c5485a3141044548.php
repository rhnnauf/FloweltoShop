

<?php $__env->startSection('container'); ?>

<style>
   @import  url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
    #gambar{
    width: 270px;
    height: 300px;
    align-items:  center;
    justify-content: center;
    }

    #kartu{
    width: 270px;
    height: 400px;
    align-items:  center;
    background-color: lightpink;
    align-items:  center;
    justify-content: center;
    margin-bottom: 10px;
    }

    #kartu1{
    width: 270px;
    height: 440px;
    align-items:  center;
    background-color: lightpink;
    align-items:  center;
    justify-content: center;
    margin-bottom: 10px;
    }

    body{
    background-color: #FFD5EA;
    }

    .mid{
      margin-top: 40px;
      text-align: center;
      color: black;
      font-family: 'Montserrat';
      font-weight: 700;
    }

    .card-body{
      text-align: center;
    }

    #button{
      width: 135x;
      font-size: 14px;
      font-family: 'Montserrat';
      font-weight: 700;
    }

    .card-title{
      color: white;
      font-family: 'Montserrat';
      font-weight: 700;
    }
</style>

<div class="container">
    <h1 class="mid">
        <?php echo e($categoryName->categoryName); ?>

    </h1>
</div>

<br>

<div class="container" style="margin-top: 20px;">
<?php if(!Auth::check() || Auth::user()->role==0): ?>
  <div class="row">
  <?php $__currentLoopData = $searchCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
        <div class="col-lg-3">
          <a href="<?php echo e(route('productDetailView',['id'=>$flower->id])); ?>" class="text-decoration-none">
            <div class="card" id="kartu">
              <img src="<?php echo e(asset('/'.$flower->flowerImage)); ?>" id="gambar"  alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo e($flower->name); ?></h5>
                  <h7 class="card-title">Rp. <?php echo e($flower->price); ?></h7>
                </div>
            </div>
          </a>
        </div>
               
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <?php else: ?>
  <div class="row">
    <?php $__currentLoopData = $searchCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
        <div class="col-lg-3">
          <a href="<?php echo e(route('productDetailView',['id'=>$flower->id])); ?>" class="text-decoration-none">
            <div class="card" id="kartu1">
              <img src="<?php echo e(asset('/'.$flower->flowerImage)); ?>" id="gambar"  alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo e($flower->name); ?></h5>
                  <h7 class="card-title">Rp. <?php echo e($flower->price); ?></h7>
                </div>
                <div>
            <a href="<?php echo e(route('updateView',['id'=>$flower->id])); ?>" type="button" id="button" class="btn btn-outline-success">Update Flower</a>
            <form style="display:inline"action="<?php echo e(route('submitDeleteData',['id'=>$flower->id])); ?>" method="post">
                <input type="hidden" name="_method" value="delete">
                <?php echo e(csrf_field( )); ?>

                <button type="submit" id="button" class="btn btn-outline-danger">Delete Flower</button>
            </form>
          </div>
            </div>
          </a>
          
        </div>
               
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <?php endif; ?>

    
</div>
  


  
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbarGuest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learning\resources\views/productUser.blade.php ENDPATH**/ ?>