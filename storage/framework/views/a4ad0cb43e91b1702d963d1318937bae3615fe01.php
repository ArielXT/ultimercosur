
<?php $__env->startSection('content'); ?>
<div class="container">


<?php if(Session::has('mensaje')): ?>
<div class="alert alert-success alert-dismissible" role="alert">
<?php echo e(Session::get('mensaje')); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

</div>
<?php endif; ?>



<a href="<?php echo e(url('producto/create')); ?>" class="btn btn-success" > Agregar un producto</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Idpais</th>
            <th>Idpais2</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($producto->id); ?></td>

            <td>
            <img class="img-thumbnail img- fluid" src="<?php echo e(asset('storage').'/'.$producto->foto); ?>" width="100" alt="">
            </td>

            <td><?php echo e($producto->nombre); ?></td>
            <td><?php echo e($producto->tipo); ?></td>
            <td><?php echo e($producto->precio); ?></td>
            <td><?php echo e($producto->descripcion); ?></td>
            <td><?php echo e($producto->idpais); ?></td>
            <td><?php echo e($producto->idpais2); ?></td>
            <td>
            <a href="<?php echo e(url('/producto/'.$producto->id.'/edit')); ?>" class="btn btn-warning">
            Editar
            </a>
            |

            <form action="<?php echo e(url('/producto/'.$producto->id )); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?> 
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">

            </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo $productos->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ultmercosur\resources\views/producto/index.blade.php ENDPATH**/ ?>