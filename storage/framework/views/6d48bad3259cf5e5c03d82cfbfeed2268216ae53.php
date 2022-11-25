
<?php $__env->startSection('title', 'Edit Perpustakawan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mb-3 mt-3">
    
<div class="container mb-3 mt-3">
    <h2>Edit Data Perpustakawan</h2>
    <form method="post" action="<?php echo e(route('modifperpustakawan', $perpustakawan->id)); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3 mt-3">
            <label for="NIP" class="form-label">NIP :</label>
            <input type="text" class="form-control <?php $__errorArgs = ['NIP'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="NIP" name="NIP" value="<?php echo e($perpustakawan->NIP); ?>">
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
            <label for="Nama" class="form-label">Nama :</label>
            <input type="text" class="form-control <?php $__errorArgs = ['Nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Nama" name="Nama" value="<?php echo e($perpustakawan->Nama); ?>">
			<?php $__errorArgs = ['Nama'];
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
            <label for="Golongan" class="form-label">Golongan :</label>
            <input type="text" class="form-control <?php $__errorArgs = ['Golongan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Golongan" name="Golongan" value="<?php echo e($perpustakawan->Golongan); ?>">
			<?php $__errorArgs = ['Golongan'];
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LATMODEL\resources\views/editperpustakawan.blade.php ENDPATH**/ ?>