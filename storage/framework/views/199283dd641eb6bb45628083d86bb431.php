<?php
    $socials = \App\Models\Social::where('status', 1)->get();
?>
<!-- 6. Footer -->
<footer
    class="bg-gray-100 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700/50 py-8 transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <!-- Profile Photo (Mini Size) -->
        <div class="mx-auto w-12 h-12 rounded-full overflow-hidden mb-2 border-2 border-indigo-500">
            <?php
                $hero = \App\Models\Hero::first();
            ?>
            <?php if($hero && $hero->hero_img && !empty($hero->hero_img)): ?>
                <img src="<?php echo e(asset('storage/' . $hero->hero_img)); ?>" alt="Mini Photo" class="w-full h-full object-cover"
                    onerror="this.style.display='none'; this.closest('div').innerHTML='<i class=\'fa-solid fa-user text-2xl text-indigo-500\'></i>'">
            <?php else: ?>
                <img src="https://placehold.co/48x48/e5e7eb/1f2937?text=S" alt="Mini Photo"
                    class="w-full h-full object-cover"
                    onerror="this.style.display='none'; this.closest('div').innerHTML='<i class=\'fa-solid fa-user text-2xl text-indigo-500\'></i>'">
            <?php endif; ?>
        </div>

        <!-- Name -->
        <p class="text-xl font-bold text-gray-900 dark:text-white mb-3"><?php echo e($user->name ?? 'Shakhawat Hosen'); ?></p>

        <!-- Social Media Icons (Footer) -->
        <div class="flex justify-center space-x-6 text-xl text-gray-600 dark:text-gray-400 mb-4">
            <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($social->url); ?>" target="_blank" style="transition: color 0.3s;"
                    onmouseover="this.style.color='<?php echo e($social->color); ?>'" onmouseout="this.style.color=''"
                    title="<?php echo e($social->name); ?>">
                    <i class="fab <?php echo e($social->icon); ?>"></i>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <!-- Copyright Text -->
        <p class="text-sm text-gray-500">
            &copy; <span id="year"></span> Shakhawat Hosen. All rights reserved. <br class="sm:hidden">
            Designed and
            Developed with <i class="fa-solid fa-heart text-red-500"></i>.
        </p>
    </div>
</footer>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo e(asset('web/js/app.js')); ?>"></script>
<?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '<?php echo e(session('success')); ?>',
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: true,
        });
    </script>
<?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>



<?php $__sessionArgs = ['error'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '<?php echo e(session('error')); ?>',
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: true,
        });
    </script>
<?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
<?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/layout/web/footer.blade.php ENDPATH**/ ?>