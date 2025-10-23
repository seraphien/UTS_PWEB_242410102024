<?php
  $uname = request('username');
?>

<nav class="navbar">
  <div class="nav-inner">
    <a class="brand" href="<?php echo e(route('dashboard', ['username' => $uname])); ?>">Project Kelola Data</a>
    <div class="links">
      <a href="<?php echo e(route('dashboard', ['username' => $uname])); ?>">Dashboard</a>
      <a href="<?php echo e(route('pengelolaan', ['username' => $uname])); ?>">Kelola Data</a>
      <a href="<?php echo e(route('profile', ['username' => $uname])); ?>">Profile</a>
      <a href="<?php echo e(route('login')); ?>" class="logout-btn" title="Logout">
    <i class="fa-solid fa-power-off"></i>
    </a>
    </div>
  </div>
</nav>
<?php /**PATH E:\hateml\UTS_clean\resources\views/components/navbar.blade.php ENDPATH**/ ?>