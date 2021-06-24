
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



<a href="<?php echo e(url('producto/create')); ?>" class="btn btn-success btn-lg btn-block" > Agregar un producto</a>
<br>
<table class="table table-striped table-dark table-bordered">
    <thead class="thead-light">
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Foto</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Tipo</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Descripcion</th>
            <th class="text-center">Idpais</th>
            <th class="text-center">Idpais2</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center"><?php echo e($producto->id); ?></td>

            <td align="center">
            <img class="img-thumbnail img- fluid" src="<?php echo e(asset('storage').'/'.$producto->foto); ?>" width="100" alt="">
            </td>

            <td class="text-center"><?php echo e($producto->nombre); ?></td>
            <td class="text-center"><?php echo e($producto->tipo); ?></td>
            <td class="text-center"><?php echo e($producto->precio); ?></td>
            <td class="text-center"><?php echo e($producto->descripcion); ?></td>
            <td class="text-center"><?php echo e($producto->idpais); ?></td>
            <td class="text-center"><?php echo e($producto->idpais2); ?></td>
            <td class="text-center">
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