<?php $__env->startSection('template_title'); ?>
    <?php echo e($user->name ?? 'Show User'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="width:100%; text-align: center;color:#FFFFFF"><font size="+2">Datos de Usuario</font></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('user.index')); ?>">Ir al Inicio</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group" style="color:#FFFFFF">
                            <font size="+2"><strong>Nombre de Usuario:</strong></font>
                            <font size="+2"><?php echo e($user->name); ?></font>
                        </div>
                        <div class="form-group" style="color:#FFFFFF">
                            <font size="+2"><strong>Correo:</strong></font>
                            <font size="+2"><?php echo e($user->email); ?></font>
                        </div>
                        <div class="form-group" style="color:#FFFFFF">
                            <font size="+2"><strong>¿Es Administrador?:</strong></font>
                            <font size="+2"><?php echo e($user->fullacces); ?></font>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ultmercosur\resources\views/user/show.blade.php ENDPATH**/ ?>