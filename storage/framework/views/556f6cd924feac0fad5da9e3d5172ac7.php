
<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
<h2>Profile</h2>

<div class="profile-layout">
  <div class="section profile-card">
    <img
      src="https://i.pinimg.com/1200x/24/38/5d/24385dfc36869a95c0b83322d4e84ad9.jpg"
      alt="Profile"
      class="profile-img">
  </div>
  <div class="section info-card">
    <h3>Selamat datang, <span class="highlight"><?php echo e($username ?? 'Evie'); ?></span> <3</h3>
    <p>Nama : [plesholder]</p>
    <p>Email : [plesholder]</p>
    <p>Nomor Telepon : [plesholder]</p>
    <p>Peran : [plesholder]</p>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\hateml\UTS_clean\resources\views/profile.blade.php ENDPATH**/ ?>