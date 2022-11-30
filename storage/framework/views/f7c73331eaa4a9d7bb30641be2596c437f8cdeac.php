<!DOCTYPE html>
<html lang='en'>
<head>
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!--Bootstrap 5.1 css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="/buku"><?php echo e(__('navbar.title1')); ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/anggota"><?php echo e(__('navbar.title2')); ?></a>
	  </li>	
      <li class="nav-item">
        <a class="nav-link active" href="/perpustakawan"><?php echo e(__('navbar.title3')); ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/lap1"><?php echo e(__('navbar.title4')); ?></a>
      </li>	
      <li class="nav-item">
        <a class="nav-link active" href="/lap2"><?php echo e(__('navbar.title5')); ?></a>
      </li>			
      <li class="nav-item">
        <a class="nav-link active" href="/lap3"><?php echo e(__('navbar.title6')); ?></a>
      </li>				  
    </ul>
  </div>
</nav>

<?php echo $__env->yieldContent('content'); ?>

<footer class="bg-dark py-4 text-white mt-4"> 
   <div class="container text-center"> 
      <small class="text-center"> <?php echo e(__('navbar.footer1')); ?>

	  <BR> <?php echo e(__('navbar.footer2')); ?></small> 
   </div> 
</footer>
</body>
<!--Bootstrap 5.1 Java Script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>

<?php /**PATH C:\laragon\www\LATMODEL\resources\views/master.blade.php ENDPATH**/ ?>