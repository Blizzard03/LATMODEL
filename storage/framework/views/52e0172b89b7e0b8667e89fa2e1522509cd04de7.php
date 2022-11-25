 
<?php $__env->startSection('title', 'Tambah Buku'); ?> 

<?php $__env->startSection('content'); ?>
<div class="container mb-3 mt-3">
  <h2><?php echo e(__('form.title')); ?></h2>
  <form method="post" action="/savebuku">
     <?php echo csrf_field(); ?>
	  <input type="hidden" name="locale" value="<?php echo e($locale); ?>">
	  <div class="mb-3 mt-3">	
		<label for="judul" class="form-label"><?php echo e(__('form.input.judul')); ?></label>
		<input type="text" class="form-control <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
		       id="judul" name="judul" value="<?php echo e(old('Judul')); ?>">
		<?php $__errorArgs = ['judul'];
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
		<label for="penulis" class="form-label"><?php echo e(__('form.input.penulis')); ?></label>
		<input type="text" class="form-control <?php $__errorArgs = ['penulis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
		       id="penulis" name="penulis" value="<?php echo e(old('Penulis')); ?>">
	  	<?php $__errorArgs = ['penulis'];
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
		<label for="penerbit" class="form-label"><?php echo e(__('form.input.penerbit')); ?></label>
		<input type="text" class="form-control <?php $__errorArgs = ['penerbit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
		       id="Penerbit" name="penerbit" value="<?php echo e(old('Penerbit')); ?>">		
		<?php $__errorArgs = ['penerbit'];
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
		<label for="radio1" class="form-label"><?php echo e(__('form.input.kategori')); ?></label>
        <div class="form-check">
			<input type="radio" class="form-check-input" id="radio1" name="kodekat" value="S" checked>
			<label class="form-check-label" for="radio1"><?php echo e(__('form.input.pilihan_kategori.sains')); ?></label>
		</div>
		<div class="form-check">
			<input type="radio" class="form-check-input" id="radio2" name="kodekat" value="F">
			<label class="form-check-label" for="radio2"><?php echo e(__('form.input.pilihan_kategori.fiksi')); ?></label>
		</div>
	  </div>
 	  <div class="mb-3 mt-3">
		<label for="harga" class="form-label"><?php echo e(__('form.input.harga')); ?></label>
		<input type="text" class="form-control <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
		       id="harga" name="harga" value="<?php echo e('Rp'.' ' .number_format(old('hargabuku'),2,',','.')); ?>">		
	  	<?php $__errorArgs = ['harga'];
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
	    <button class="btn btn-success mb-2" type="submit"><?php echo e(__('form.input.tombol1')); ?></button>
        <button class="btn btn-success mb-2" type="reset"><?php echo e(__('form.input.tombol2')); ?></button>
      </div>
  </form>
  <a href="/createbuku/en">English</a>
  <a href="/createbuku">Indonesia</a> 
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LATMODEL\resources\views/createbuku.blade.php ENDPATH**/ ?>