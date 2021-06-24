
<?php $__env->startSection('contenido'); ?>
<a href="admin/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Acceso Total</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user -> id); ?></td>
            <td><?php echo e($user -> name); ?></td>
            <td><?php echo e($user -> email); ?></td>
            <td><?php echo e($user -> fullacces); ?></td>
            <td>
                <a href="/ultmercosur/public/admin/<?php echo e($user -> id); ?>/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ultmercosur\resources\views/admin/index.blade.php ENDPATH**/ ?>