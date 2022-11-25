 
<?php $__env->startSection('title', 'Tambah Perpustakaan'); ?> 

<?php $__env->startSection('content'); ?>

<div class="container mb-3 mt-3">
  <h2><?php echo e(__('form3.title')); ?></h2>  
  <form method="post" action="/saveperpustakawan">
     <?php echo csrf_field(); ?>
	  <div class="mb-3 mt-3">
		<label for="NIP" class="form-label"><?php echo e(__('form3.input.NIP')); ?></label>
		<input type="text" class="form-control <?php $__errorArgs = ['NIP'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="NIP" name="NIP" value="<?php echo e(old('NIP')); ?>">
		<?php $__errorArgs = ['NIP'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
		<div class="text-danger"><?php echo e($message); ?></div>
		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>		
	  </div>  
	  <div class="mb-3 mt-3">
		<label for="Nama" class="form-label"><?php echo e(__('form3.input.Nama')); ?></label>
		<input type="text" class="form-control <?php $__errorArgs = ['Nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Nama" name="Nama" value="<?php echo e(old('Nama')); ?>">
	<?php $__errorArgs = ['Nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	</div>  
	  <div class="mb-3 mt-3">
		<label for="Golongan" class="form-label"><?php echo e(__('form3.input.Golongan')); ?></label>
		<input type="text" class="form-control <?php $__errorArgs = ['Golongan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Golongan" name="Golongan" value="<?php echo e(old('Golongan')); ?>">
		<?php $__errorArgs = ['Golongan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	  </div> 
      <div class="mb-3 mt-3">
        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit"><?php echo e(__('form3.input.tombol1')); ?></button>
            <button class="btn btn-success mb-2" type="reset"><?php echo e(__('form3.input.tombol2')); ?></button>
        </div>
      </div>
  </form>

  
  <a href="/createperpustakawan/en">English</a>
  <a href="/createperpustakawan">Indonesia</a> 
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LATMODEL\resources\views/createperpustakawan.blade.php ENDPATH**/ ?>