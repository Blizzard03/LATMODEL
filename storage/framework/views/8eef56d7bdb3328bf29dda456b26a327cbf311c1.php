<?php $__env->startSection('title', 'Data Anggota'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <h2><?php echo e(__('tablemember.title')); ?></h2>
    <div class="container mt-3">
	<?php if(Session::has('pesan')): ?>
	<div class="alert alert-danger">
		<?php echo e(Session::get('pesan')); ?>

	</div>
	<?php endif; ?>
    <p><a href="/createanggota">
            <button class="btn btn-success mb-2"><?php echo e(__('tablemember.display.tombol1')); ?></button></a></p>
    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <td><?php echo e(__('tablemember.display.Id')); ?></td>
                <td><?php echo e(__('tablemember.display.NPM')); ?></td>
                <td><?php echo e(__('tablemember.display.Nama')); ?></td>
                <td><?php echo e(__('tablemember.display.Gender')); ?></td>
                <td><?php echo e(__('tablemember.display.Angkatan')); ?></td>
                <td><?php echo e(__('tablemember.display.Jenjang')); ?></td>
                <td><?php echo e(__('tablemember.display.Jurusan')); ?></td>
                <td><?php echo e(__('tablemember.display.Alamat')); ?></td>
                <td><?php echo e(__('tablemember.display.edit')); ?></td>
                <td><?php echo e(__('tablemember.display.hapus')); ?></td>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $data_anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php
            $gender = $anggota->Kode_Gender;
            $jenjang = substr("$anggota->NPM",4,1);
            $jurusan = substr("$anggota->NPM",5,1);
            $angkatan = substr("$anggota->NPM",0,4);
            if ($gender == 'L')
            {$gender = __('tablemember.display.pilihan_Kode_Gender.Laki-Laki');}
            else if ($gender == 'P')
            {$gender = __('tablemember.display.pilihan_Kode_Gender.Perempuan');}
            else
            {$gender = 'Gender Tidak Ada';}

            if($jenjang == 0){
            $jenjang=__('tablemember.display.pilihan_kode_jenjang.D3');
            } elseif($jenjang == 1){
            $jenjang=__('tablemember.display.pilihan_kode_jenjang.S');
            }elseif($jenjang == 2){
            $jenjang=__('tablemember.display.pilihan_kode_jenjang.M');
            }

            if($jurusan==1){
            $jurusan=__('tablemember.display.pilihan_kode_jurusan.SI');
            } elseif($jurusan==2){
            $jurusan=__('tablemember.display.pilihan_kode_jurusan.SK');
            } elseif($jurusan==3){
            $jurusan=__('tablemember.display.pilihan_kode_jurusan.IT');
            }
            ?>
            <tr>
                <td><?php echo e($anggota->id); ?></td>
                <td><?php echo e($anggota->NPM); ?></td>
                <td><?php echo e($anggota->Nama); ?></td>
                <td><?php echo e($gender); ?></td>
                <td><?php echo e($angkatan); ?></td>
                <td><?php echo e($jenjang); ?></td>
                <td><?php echo e($jurusan); ?></td>
                <td><?php echo e($anggota->Alamat); ?></td>
                <td><a href="<?php echo e(route('ubahanggota', $anggota->id)); ?>">
                        <button class="btn btn-primary btn-sm"><?php echo e(__('tablemember.display.tombol2')); ?></button></a></td>
                <td>
                    <form action="<?php echo e(route('hapusanggota', $anggota->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-primary btn-sm" onClick="return confirm('<?php echo e(__('tablemember.confirmation')); ?>')"><?php echo e(__('tablemember.display.tombol3')); ?></button>
                    </form>
                </td>
            </tr>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    	<!--Change Language-->
		<a href="/anggota/en">English</a>
		<a href="/anggota">Indonesia</a>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LATMODEL\resources\views/anggota.blade.php ENDPATH**/ ?>