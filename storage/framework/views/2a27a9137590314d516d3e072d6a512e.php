

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
  <h2>Login</h2>
  <div class="section">
    <form action="<?php echo e(route('doLogin')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <label>Username</label>
      <input class="input" type="text" name="username" required>

      <label>Password</label>
      <input class="input" type="password" name="password" required>

      <div style="margin-top:12px">
        <button type="submit" class="btn">Login</button>
      </div>
    </form>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\hateml\UTS_clean\resources\views/login.blade.php ENDPATH**/ ?>