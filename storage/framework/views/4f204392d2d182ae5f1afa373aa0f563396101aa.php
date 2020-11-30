

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
                    <img src="<?php echo e(asset('/'.$updateQuery->categoryImage)); ?>" id="gambar">
                </div>
            </div>
            <form method="POST"  enctype="multipart/form-data" action="<?php echo e(route('submitUpdateCategoryData',['id'=>$updateQuery->id])); ?>">
            <?php echo e(csrf_field( )); ?>

              <div class="col-md-7 col-lg-7 py-5 px-5">
                  <p class="text"style="padding-top: 5px;">Category name:</p>
                  <input name="namaKategori" value="<?php echo e($updateQuery->categoryName); ?>" type="text" class="form-control">
                  <?php if($errors->has('namaKategori')): ?>
                    <div style="color: red">
                      <?php echo e($errors->first('namaKategori')); ?>

                    </div>
                  <?php endif; ?>
                  <p class="text" style="padding-top: 5px;">Category Image:</p>
                  <div class="form-group">
                    <input name="gbrKategori" type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                  
                  <input type="hidden" name="_method" value="put">
                  <button href="<?php echo e(route('home')); ?>"type="submit" class="btn btn-primary" style="margin-top: 10px">Update</button>
                  
              </div>
            </form>
            
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarGuest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learning\resources\views/updateCategory.blade.php ENDPATH**/ ?>