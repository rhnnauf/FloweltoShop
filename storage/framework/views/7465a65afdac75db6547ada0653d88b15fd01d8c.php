

<?php $__env->startSection('container'); ?>

<style>
    #tengah{
        text-align: center;
    }

    #empty{
        text-align: center;
        font-style: italic;
        font-family: 'Montserrat';
        font-weight: 700;
    }
</style>
<div class="container">
    <h1 class="mid">
        <br>
        Your Transaction History
        
    </h1>

    <br>

    <?php if($tQuery->isEmpty()): ?>
        <div class="alert alert-light" id="empty">
            Your cart is empty
        </div>
    <?php else: ?>
        <?php $__currentLoopData = $tQuery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('tDetailPost',['id'=>$t->id])); ?>">
            <div class="alert alert-light" id="tengah" role="alert">
                <?php echo e($t->created_at); ?>

            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarGuest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learning\resources\views/transactionHistory.blade.php ENDPATH**/ ?>