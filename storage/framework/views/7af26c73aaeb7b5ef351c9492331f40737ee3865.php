<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('name')); ?>

            <?php echo e(Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name'])); ?>

            <?php echo $errors->first('name', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('email')); ?>

            <?php echo e(Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email'])); ?>

            <?php echo $errors->first('email', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('fullacces')); ?>

            <?php echo e(Form::text('fullacces', $user->fullacces, ['class' => 'form-control' . ($errors->has('fullacces') ? ' is-invalid' : ''), 'placeholder' => 'Fullacces'])); ?>

            <?php echo $errors->first('fullacces', '<div class="invalid-feedback">:message</p>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div><?php /**PATH D:\xampp\htdocs\ultmercosur\resources\views/user/form.blade.php ENDPATH**/ ?>