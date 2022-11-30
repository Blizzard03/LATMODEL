<?php $__env->startSection('title', 'Data Buku'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-3">
	<?php if(Session::has('pesan')): ?>
	<div class="alert alert-danger">
		<?php echo e(Session::get('pesan')); ?>

	</div>
	<?php endif; ?>
	<div class="container mt-3">
		<h2><?php echo e(__('tablebuku.title')); ?></h2>
		<p><a href="/createbuku">
				<button class="btn btn-success mb-2"><?php echo e(__('tablebuku.display.tombol1')); ?></button></a></p>

		<table class="table table-bordered table-striped">
			<thead class="table-success">
				<tr>
					<td><?php echo e(__('tablebuku.display.Id')); ?></td>
					<td><?php echo e(__('tablebuku.display.judul')); ?></td>
					<td><?php echo e(__('tablebuku.display.penulis')); ?></td>
					<td><?php echo e(__('tablebuku.display.penerbit')); ?></td>
					<td><?php echo e(__('tablebuku.display.kategori')); ?></td>
					<td><?php echo e(__('tablebuku.display.harga')); ?></td>
					<td><?php echo e(__('tablebuku.display.edit')); ?></td>
					<td><?php echo e(__('tablebuku.display.hapus')); ?></td>
				</tr>
			</thead>

			<tbody>
				<?php $__currentLoopData = $data_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($buku->id); ?></td>
					<td><?php echo e($buku->Judul); ?></td>
					<td><?php echo e($buku->Penulis); ?></td>
					<td><?php echo e($buku->Penerbit); ?></td>
					<?php
					if ($buku->Kode_Kategori == 'F')
					{$kategori = __('tablebuku.display.pilihan_kategori.fiksi');}
					else if ($buku->Kode_Kategori == 'S')
					{$kategori = __('tablebuku.display.pilihan_kategori.sains');}
					else
					{$kategori = 'Data Tidak Ada';}
					?>
					<td><?php echo e($kategori); ?></td>
					<td style="text-align:center">
						<?php echo e("Rp"." " .number_format($buku->hargabuku,2,',','.')); ?>

					</td>
					<td><a href="<?php echo e(route('ubahbuku', $buku->id)); ?>">
							<button class="btn btn-primary btn-sm"><?php echo e(__('tablebuku.display.tombol2')); ?></button></a></td>
					<td>
						<form action="<?php echo e(route('hapusbuku', $buku->id)); ?>" method="post">
							<?php echo csrf_field(); ?>
							<button class="btn btn-primary btn-sm" onClick="return confirm('<?php echo e(__('tablebuku.confirmation')); ?>')"><?php echo e(__('tablebuku.display.tombol3')); ?></button>
						</form>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<!--Change Language-->
		<a href="/buku/en">English</a>
		<a href="/buku">Indonesia</a>

	</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LATMODEL\resources\views/buku.blade.php ENDPATH**/ ?>