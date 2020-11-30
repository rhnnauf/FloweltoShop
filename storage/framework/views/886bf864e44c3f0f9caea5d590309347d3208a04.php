

<?php $__env->startSection('container'); ?>

<style>
    @import  url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
    #gambar{
    width: 400px;
    height: 400px;
    align-content: center;
    }
    
    #desc{
      width: 300px;
      height: 70px;
    }

    body{
    background-color: #FFD5EA;
    }

    #kartu{
    width: 420px;
    height: 420px;
    align-items:  center;
    justify-content: center;
    background-color: lightgrey;
    flex-wrap: wrap;
    }

    .text{
    color: grey;
    font-family: 'Montserrat';
    font-weight: 700;
    }

    .text1{
    color: black;
    font-family: 'Montserrat';
    font-weight: 700;
    }

    
</style>

<section class="form">
    <div class="container">
        <div class="row">
            <div class="col-md-5 cold-lg-5 py-5">
                <div class="card" id="kartu">
                    <img src="<?php echo e(asset('/'.$updateQuery->flowerImage)); ?>" id="gambar">
                </div>
            </div>
            <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('submitUpdateData',['id'=>$updateQuery->id])); ?>">
            <?php echo e(csrf_field( )); ?>

              <div class="col-md-7 col-lg-7 py-5 px-5">
                  <p class="text" style="padding-top: 5px;">Category:</p>
                  <select name="namaKategori" class="form-control">
                    <?php $__currentLoopData = $categoryQuery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option 
                        <?php if($cat->id == $updateQuery->CategoryID): ?>
                          selected
                        <?php endif; ?>
                          value="<?php echo e($cat->id); ?>">
                        <?php echo e($cat->categoryName); ?>

                      </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>

                  <p class="text"style="padding-top: 5px;">Flower name:</p>
                  <input name="namaBunga" value="<?php echo e($updateQuery->name); ?>" type="text" class="form-control">
                  <?php if($errors->has('namaBunga')): ?>
                    <div style="color: red">
                      <?php echo e($errors->first('namaBunga')); ?>

                    </div>
                  <?php endif; ?>
                  <p class="text" style="padding-top: 5px;">Flower price:</p>
                  <input name="hargaBunga" value="<?php echo e($updateQuery->price); ?>" type="number" class="form-control">
                  <?php if($errors->has('hargaBunga')): ?>
                    <div style="color: red">
                      <?php echo e($errors->first('hargaBunga')); ?>

                    </div>
                  <?php endif; ?>
                  <p class="text" style="padding-top: 5px;">Description:</p>
                  <textarea name="desBunga" class="form-control" id="desc"><?php echo e($updateQuery->desc); ?></textarea>
                  <?php if($errors->has('desBunga')): ?>
                    <div style="color: red">
                      <?php echo e($errors->first('desBunga')); ?>

                    </div>
                  <?php endif; ?>
                  <p class="text" style="padding-top: 5px;">Flower Image:</p>
                  <div class="form-group">
                    <input name="gbrBunga" type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                  
                  <input type="hidden" name="_method" value="put">
                  <button href="<?php echo e(route('home')); ?>"type="submit" class="btn btn-primary" style="margin-top: 10px">Update</button>
                  
              </div>
            </form>
            
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarGuest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learning\resources\views/updateProductManager.blade.php ENDPATH**/ ?>