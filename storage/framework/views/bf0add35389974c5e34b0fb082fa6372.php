

<?php $__env->startSection('title', 'Pengelolaan'); ?>

<?php $__env->startSection('content'); ?>
  <h2>Daftar Pengelolaan</h2>
  <div class="section">
    <table class="table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Peran</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $listData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($item['nama']); ?></td>
            <td><?php echo e($item['peran']); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\hateml\UTS_clean\resources\views/pengelolaan.blade.php ENDPATH**/ ?>