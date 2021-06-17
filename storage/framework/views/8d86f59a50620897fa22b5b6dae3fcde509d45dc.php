
<H1> <?php echo e($modo); ?> Producto</H1>

<?php if(count($errors)>0): ?>

    <div class="alert alert-danger" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="form-group">
<label for="Foto"> Producto: </label>
<?php if(isset($producto->foto)): ?>
<img class="img-thumbnail img- fluid" src="<?php echo e(asset('storage').'/'.$producto->foto); ?>" width="100" alt="">
<?php endif; ?>
<input type="file" class="form-control" name="Foto" value="" id="Foto">
</div>

<div class="form-group">
<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="Nombre" value="<?php echo e(isset($producto->nombre)?$producto->nombre:old('Nombre')); ?>" id="Nombre">
</div>

<div class="form-group">
<label for="Tipo"> Tipo </label>
<input type="text" class="form-control" name="Tipo" value="<?php echo e(isset($producto->tipo)?$producto->tipo:old('Tipo')); ?>" id="Tipo">
</div>


<div class="form-group">
<label for="Precio"> Precio </label>
<input type="text" class="form-control" name="Precio" value="<?php echo e(isset($producto->precio)?$producto->precio:old('Precio')); ?>" id="Precio">
</div>

<div class="form-group">
<label for="Descripcion"> Descripcion </label>
<input type="text" class="form-control" name="Descripcion" value="<?php echo e(isset($producto->descripcion)?$producto->descripcion:old('Descripcion')); ?>" id="Descripcion">
</div>

<div class="form-group">
<label for="idpais"> idpais </label>
<input type="text" class="form-control" name="idpais" value="<?php echo e(isset($producto->idpais)?$producto->idpais:old('idpais')); ?>" id="idpais">
</div>

<div class="form-group">
<label for="idpais2"> idpais2 </label>
<input type="text" class="form-control" name="idpais2" value="<?php echo e(isset($producto->idpais2)?$producto->idpais2:old('idpais2')); ?>" id="idpais2">
</div>

<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> Producto">
<a class="btn btn-primary" href="<?php echo e(url('producto/')); ?>"> Volver al inicio</a><?php /**PATH D:\xampp\htdocs\ultmercosur\resources\views/producto/form.blade.php ENDPATH**/ ?>