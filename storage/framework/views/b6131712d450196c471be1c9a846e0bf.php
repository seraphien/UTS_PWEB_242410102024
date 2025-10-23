

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
  <h2>Selamat datang, <?php echo e($username ?? 'Tamu'); ?>!</h2>
  <div class="section">
    <p>Halo <?php echo e($username ?? 'Tamu'); ?>!</p>
    <p>Gimana kabarmu hari ini? >:)</p>
  </div>
  <div class="section">
    <h3>Statistik Singkat</h3>
    <ul>
      <img
        src="https://peltiertech.com/images/2010-08/LineChart01.png"
        alt="Statistik Icon"
        class="statistik-icon">
      <li>Jumlah Data: 42</li>
      <li>Data Terbaru Ditambahkan: 2024-05-01</li>
      <li>Aktivitas Terakhir: Login pada 2024-06-10</li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\hateml\UTS_clean\resources\views/dashboard.blade.php ENDPATH**/ ?>