

<?php $__env->startSection('content'); ?>
<div class="container">
<form action="<?php echo e(url('/producto')); ?>" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php echo $__env->make('producto.form', ['modo'=>'Agregar'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ultmercosur\resources\views/producto/create.blade.php ENDPATH**/ ?>