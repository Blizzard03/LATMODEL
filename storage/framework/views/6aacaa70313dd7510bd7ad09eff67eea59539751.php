
<?php $__env->startSection('title', 'Tambah Anggota'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mb-3 mt-3">
    <h2><?php echo e(__('form2.title')); ?></h2>
    <form method="post" action="/saveanggota">
        <?php echo csrf_field(); ?>
        <div class="mb-3 mt-3">
            <label for="NPM" class="form-label"> <?php echo e(__('form2.input.NPM')); ?> :</label>
            <input type="text" class="form-control <?php $__errorArgs = ['NPM'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="NPM" name="NPM" value="<?php echo e(old('NPM')); ?>">
            <?php $__errorArgs = ['NPM'];
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
            <label for="Nama_Anggota" class="form-label"><?php echo e(__('form2.input.Nama_Anggota')); ?></label>
            <input type="text" class="form-control <?php $__errorArgs = ['Nama_Anggota'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Nama_Anggota" name="Nama_Anggota" value="<?php echo e(old('Nama_Anggota')); ?>">
            <?php $__errorArgs = ['Nama_Anggota'];
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
            <label for="radio1" class="form-label"><?php echo e(__('form2.input.Kode_Gender')); ?></label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="Kode_Gender" value="Laki-Laki" checked>
                <label class="form-check-label" for="radio1"><?php echo e(__('form2.input.pilihan_Kode_Gender.Laki-Laki')); ?></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="Kode_Gender" value="Perempuan">
                <label class="form-check-label" for="radio2"><?php echo e(__('form2.input.pilihan_Kode_Gender.Perempuan')); ?></label>
            </div>
        </div>

        <div class="mb-3 mt-3">
            <label for="Alamat" class="form-label"><?php echo e(__('form2.input.Alamat')); ?></label>
            <input type="text" class="form-control <?php $__errorArgs = ['Alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Alamat" name="Alamat" value="<?php echo e(old('Nama_Anggota')); ?>">
            <?php $__errorArgs = ['Alamat'];
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
            <button class="btn btn-success mb-2" type="submit"><?php echo e(__('form2.input.tombol1')); ?></button>
            <button class="btn btn-success mb-2" type="reset"><?php echo e(__('form2.input.tombol2')); ?></button>
        </div>
    </form>
    
  <a href="/createanggota/en">English</a>
  <a href="/createanggota">Indonesia</a> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LATMODEL\resources\views/createanggota.blade.php ENDPATH**/ ?>