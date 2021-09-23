<!-- Menghubungkan dengan view template header -->

 
<!-- Konten -->
<?php $__env->startSection('konten'); ?>
 
	<p>Ini Adalah Halaman Home</p>
	<p>Selamat datang !</p>
 
<?php $__env->stopSection(); ?>

<!-- Menghubungkan dengan view template footer -->




<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hawary\resources\views/aplikasi.blade.php ENDPATH**/ ?>