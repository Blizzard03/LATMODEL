
<?php $__env->startSection('title', 'Edit Anggota'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mb-3 mt-3">
    <h2>Edit Data Anggota</h2>
    <form method="post" action="<?php echo e(route('modifanggota', $Anggota->id)); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3 mt-3">
            <label for="NPM" class="form-label">NPM :</label>
            <input type="text" class="form-control <?php $__errorArgs = ['NPM'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="NPM" name="judul" value="<?php echo e($Anggota->NPM); ?>">
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
            <label for="Nama_Anggota" class="form-label">Nama Anggota :</label>
            <input type="text" class="form-control  <?php $__errorArgs = ['Nama_Anggota'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Nama_Anggota" name="Nama_Anggota" value="<?php echo e($Anggota->Nama); ?>">
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
            <label for="radio1" class="form-label">Kode Gender :</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="Kode_Gender" value="L" <?php if($Anggota->Kode_Gender == 'L'){print('checked');} ?>>
                <label class="form-check-label" for="radio1">Laki-Laki</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="Kode_Gender" value="P" <?php if($Anggota->Kode_Gender == 'P'){print('checked');} ?>>
                <label class="form-check-label" for="radio2">Perempuan</label>
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="Alamat" class="form-label">Alamat:</label>
            <input type="text" class="form-control <?php $__errorArgs = ['Alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Alamat" name="Alamat" value="<?php echo e($Anggota->Alamat); ?>">
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
            <button class="btn btn-success mb-2" type="submit">Simpan</button>
            <button class="btn btn-success mb-2" type="reset">Batal</button>
        </div>
    </form>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LATMODEL\resources\views/editanggota.blade.php ENDPATH**/ ?>