<?php $__env->startSection('title', 'Data Perpustakawan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <h2><?php echo e(__('tableperpustakawan.title')); ?></h2>
    <p><a href="/createperpustakawan">
            <button class="btn btn-success mb-2"><?php echo e(__('tableperpustakawan.display.tombol1')); ?></button></a></p>

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <td><?php echo e(__('tableperpustakawan.display.Id')); ?></td>
                <td><?php echo e(__('tableperpustakawan.display.NIP')); ?></td>
                <td><?php echo e(__('tableperpustakawan.display.Nama')); ?></td>
                <td><?php echo e(__('tableperpustakawan.display.Golongan')); ?></td>
                <td><?php echo e(__('tableperpustakawan.display.edit')); ?></td>
                <td><?php echo e(__('tableperpustakawan.display.hapus')); ?></td>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $data_perpustakawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perpustakawan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($perpustakawan->id); ?></td>
                <td><?php echo e($perpustakawan->NIP); ?></td>
                <td><?php echo e($perpustakawan->Nama); ?></td>
                <td><?php echo e($perpustakawan->Golongan); ?></td>
                <td><a href="<?php echo e(route('ubahperpustakawan', $perpustakawan->id)); ?>">
                        <button class="btn btn-primary btn-sm"><?php echo e(__('tableperpustakawan.display.tombol2')); ?></button></a></td>
                <td>
                    <form action="<?php echo e(route('hapusperpustakawan', $perpustakawan->id)); ?>" method="post">
                        <button class="btn btn-primary btn-sm" onClick="return confirm('<?php echo e(__('tableperpustakawan.confirmation')); ?>')"><?php echo e(__('tableperpustakawan.display.tombol3')); ?></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <!--Change Language-->
		<a href="/perpustakawan/en">English</a>
		<a href="/perpustakawan">Indonesia</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LATMODEL\resources\views/perpustakawan.blade.php ENDPATH**/ ?>