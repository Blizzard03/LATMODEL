 
<?php $__env->startSection('title', 'Edit Buku'); ?> 

<?php $__env->startSection('content'); ?>
<div class="container mb-3 mt-3">
<h2>Edit Data Buku</h2>  
  
  <form method="post" action="<?php echo e(route('modifbuku', $buku->id)); ?>">
     <?php echo csrf_field(); ?>
	  <div class="mb-3 mt-3">
		<label for="judul" class="form-label">Judul Buku :</label>
		<input type="text" class="form-control <?php $__errorArgs = ['Judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
		       id="Judul" name="Judul" value="<?php echo e($buku->Judul); ?>">
		<?php $__errorArgs = ['Judul'];
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
		<label for="penulis" class="form-label">Penulis :</label>
		<input type="text" class="form-control <?php $__errorArgs = ['Penulis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
		       id="Penulis" name="Penulis" value="<?php echo e($buku->Penulis); ?>">
	  	<?php $__errorArgs = ['Penulis'];
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
		<label for="Penerbit" class="form-label">Penerbit :</label>
		<input type="text" class="form-control <?php $__errorArgs = ['Penerbit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
		       id="Penerbit" name="Penerbit" value="<?php echo e($buku->Penerbit); ?>">		
		<?php $__errorArgs = ['Penerbit'];
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
		<label for="radio1" class="form-label">Kategori :</label>
        <div class="form-check">
			<input type="radio" class="form-check-input" id="radio1" name="kodekat" value="S" 
			 <?php if($buku->Kode_Kategori == 'S'){print('checked');} ?>>
			<label class="form-check-label" for="radio1">Sains</label>
		</div>
		<div class="form-check">
			<input type="radio" class="form-check-input" id="radio2" name="kodekat" value="F"
			 <?php if($buku->Kode_Kategori == 'F'){print('checked');} ?>>			
			<label class="form-check-label" for="radio2">Fiksi</label>
		</div>
	  </div>
 	  <div class="mb-3 mt-3">
		<label for="harga" class="form-label">Harga Buku:</label>
		<input type="text" class="form-control <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
		       id="harga" name="harga" value="<?php echo e('Rp'.' ' .number_format($buku->hargabuku,2,',','.')); ?>">		
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
	    <button class="btn btn-success mb-2" type="submit">Simpan</button>
        <button class="btn btn-success mb-2" type="reset">Batal</button>
      </div>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LATMODEL\resources\views/editbuku.blade.php ENDPATH**/ ?>