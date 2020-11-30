

<?php $__env->startSection('container'); ?>
<style>
    @import  url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
    @import  url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    #gambar{
    width: 400px;
    height: 400px;
    align-content: center;
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
    text-align: center;
    }

    .text1{
    color: black;
    font-family: 'Montserrat';
    font-weight: 700;
    }

    #gbr{
        width: 60px;
        height: 60px;
        float: left;
    }

    #kotak1{
        width: 66px;
        height: 66px;
    }

    #alert{
    text-align: center;
    }

    #empty{
        text-align: center;
        font-style: italic;
        font-family: 'Montserrat';
        font-weight: 700;
    }

    #total1{
        font-family: 'Poppins';
        font-weight: 800;
        font-size: 18px;
    }

    #total2{
        font-family: 'Poppins';
        font-weight: 800;
        font-size: 28px;
    }

    
</style>
<?php if(session()->has('success')): ?>
  <div class="alert alert-success" id="alert" role="alert">
    <?php echo e(session()->get('success')); ?>

  </div>
<?php endif; ?>
<br>

<div class="container" >
    <h1 class="text">
        My Cart
    </h1>
    <br>

    <?php if($cekLength==0): ?>
        <div class="alert alert-light" id="empty">
            Your cart is empty
        </div>
    <?php else: ?>
    <div class="alert alert-light"> 
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">PRODUCT</th>
            <th scope="col"></th>
            <th scope="col">PRICE</th>
            <th scope="col">QUANTITY</th>
            </tr>
        </thead>
        <tbody>
            
            <?php $__currentLoopData = $cartQuery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($cart->Quantity>0): ?>
            <tr>
            <td id="kotak1">
                <div>
                <img src="<?php echo e($cart->Image); ?>" id="gbr">
                </div>
            </td>
            <td>
                <div style="font-weight: bold; margin-top: 7px;">
                    <?php echo e($cart->Name); ?>

                </div>
                <div class="text1" style="font-style: italic;">
                    Category : <?php echo e($cart->Category); ?>

                </div>
            </td>
            <td class="text1" >
                <div style=" margin-top: 17px;">
                    Rp. <?php echo e($cart->Price); ?>

                </div>
            </td>
            <td>
                <form action="<?php echo e(route('submitUpdateQty',['id'=>$cart->FlowerID])); ?>" method="POST"  enctype="multipart/form-data">
                <?php echo e(csrf_field( )); ?>

                    <input class="text1" min="0" max="100" name="qty" style=" margin-top: 15px; width: 50px;" type="number" value="<?php echo e($cart->Quantity); ?>">
                    <button type="submit"  class="btn btn-outline-secondary">Update</button>
                </form>
            </td>
            
            
            </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        <div class="alert alert-light" role="alert">
            <div id="total1">
                Total Price: 
            </div>
            <div id="total2">
                Rp. <?php echo e($count); ?>

            </div>
        </div>
        
        <div class="mid">
            <form action="<?php echo e(route('checkOut')); ?>" method="POST"  enctype="multipart/form-data">
            <?php echo e(csrf_field( )); ?>

                <button type="submit" class="btn btn-info">Check Out</button>
            </form>
        </div>
        <?php endif; ?>
    </div>
        

    


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarGuest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learning\resources\views/myCart.blade.php ENDPATH**/ ?>