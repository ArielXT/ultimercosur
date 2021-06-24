
<?php $__env->startSection('contenido'); ?>
<h1>CREAR Usuarios</h1>
<form action="/admin" method="POST">
    <div class="mb-4">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-4">
        <label for="" class="form-label">Email</label>
        <input id="email" name="email" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-4">
        <label for="" class="form-label">Acceso Total</label>
        <input id="fullacces" name="fullacces" type="text" class="form-control" tabindex="3">
    </div>
    <a href="/ultmercosur/public/admin" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabinfex="5">Guardar</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ultmercosur\resources\views/admin/create.blade.php ENDPATH**/ ?>