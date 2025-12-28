    <?php echo $__env->make('layout.web.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Navbar -->
    <?php echo $__env->make('layout.web.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>    

    <?php echo $__env->make('layout.web.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/layout/web/web.blade.php ENDPATH**/ ?>