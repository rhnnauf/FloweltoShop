

<?php $__env->startSection('container'); ?>

<form enctype="multipart/form-data" action="<?php echo e(route('insertFlower')); ?>" method="post">
<div class="container flex-middle" style="margin-bottom: 200px">
<?php echo e(csrf_field( )); ?>

  <h1 class="mid" style="margin-top : 20px">
      Add New Flower
  </h1>

  <br>

    <div class="form-group">
      <label for="category">Category</label>
      <select name="namaKategori" id="category" class="form-control">
      <?php $__currentLoopData = $categoryQuery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->categoryName); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

    <div class="form-group">
      <label for="flowerName">Flower Name</label>
      <input name="namaBunga" type="text" class="form-control" id="flowerName">
      <?php if($errors->has('namaBunga')): ?>
        <div style="color: red">
          <?php echo e($errors->first('namaBunga')); ?>

        </div>
      <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="flowerPrice">Flower Price</label>
        <input name="hargaBunga" type="number" class="form-control" id="flowerPrice">
        <?php if($errors->has('hargaBunga')): ?>
        <div style="color: red">
          <?php echo e($errors->first('hargaBunga')); ?>

        </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="desBunga" class="form-control" id="Description">
      </textarea>
      <?php if($errors->has('desBunga')): ?>
        <div style="color: red">
          <?php echo e($errors->first('desBunga')); ?>

        </div>
      <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="attachment">Flower Image</label>
        <input name="gbrBunga" type="file" class="form-control-file" id="attachment">
        <?php if($errors->has('gbrBunga')): ?>
        <div style="color: red">
          <?php echo e($errors->first('gbrBunga')); ?>

        </div>
        <?php endif; ?>
    </div>

    <button type="submit" class="btn btn-primary" value="submit" style="margin-top: 10px">Submit</button>
    
  

</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarGuest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Sem 5\Web Programming\Projek\learning\resources\views/addFlower.blade.php ENDPATH**/ ?>