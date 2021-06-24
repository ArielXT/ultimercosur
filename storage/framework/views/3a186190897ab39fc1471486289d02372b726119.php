<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="width: 100%;text-align: center;color:#FFFFFF"><font size="+2"><?php echo e(__('Sesion iniciada !')); ?></font></div>
                <div class="card-body" style="width: 100%;text-align: center;color:#FFFFFF">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <font size="+1"><?php echo e(__('Bienvenido Usuario!')); ?></font>
                    <br>
                    <br>
                    <a class="btn btn-success btn-lg btn-block" href="<?php echo e(URL::route('producto.index')); ?>">Ir a ver Productos</a>
                </div>                 
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ultmercosur\resources\views/usuario.blade.php ENDPATH**/ ?>