<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title" style="width: 100%;text-align: center;color:#FFFFFF">
                                <font size="+2"><strong>
                                <?php echo e(__('Tabla de Usuarios')); ?>

                                </strong></font>
                            </span>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-dark table-bordered table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th class="text-center">No</th>
                                        
										<th class="text-center">Name</th>
										<th class="text-center">Email</th>
										<th class="text-center">Administrador</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><?php echo e(++$i); ?></td>
                                            
											<td class="text-center"><?php echo e($user->name); ?></td>
											<td class="text-center"><?php echo e($user->email); ?></td>
											<td class="text-center"><?php echo e($user->fullacces); ?></td>

                                            <td>
                                                <form class="text-center" action="<?php echo e(route('user.destroy',$user->id)); ?>" method="POST">
                                                    <a class="btn btn-primary " href="<?php echo e(route('user.show',$user->id)); ?>"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $users->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ultmercosur\resources\views/user/index.blade.php ENDPATH**/ ?>