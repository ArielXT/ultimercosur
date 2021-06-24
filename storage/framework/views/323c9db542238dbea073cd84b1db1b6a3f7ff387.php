
<?php $__env->startSection('contenido'); ?>
<h1>Editar Usuarios</h1>
<form action="admin/<?php echo e($user->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-4">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" value="<?php echo e($user->name); ?>">
    </div>
    <div class="mb-4">
        <label for="" class="form-label">Email</label>
        <input id="email" name="email" type="text" class="form-control" value="<?php echo e($user->email); ?>">
    </div>
    <div class="mb-4">
        <label for="" class="form-label">Acceso Total</label>
        <input id="fullacces" name="fullacces" type="text" class="form-control" value="<?php echo e($user->fullacces); ?>">
    </div>
    <a href="/ultmercosur/public/admin" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ultmercosur\resources\views/admin/edit.blade.php ENDPATH**/ ?>