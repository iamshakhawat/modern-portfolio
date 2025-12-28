
    <!-- 6. Footer -->
    <footer
        class="bg-gray-100 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700/50 py-8 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <!-- Profile Photo (Mini Size) -->
            <div class="mx-auto w-12 h-12 rounded-full overflow-hidden mb-2 border-2 border-indigo-500">
                <img src="https://placehold.co/48x48/e5e7eb/1f2937?text=S" alt="Mini Photo"
                    class="w-full h-full object-cover"
                    onerror="this.style.display='none'; this.closest('div').innerHTML='<i class=\'fa-solid fa-user text-2xl text-indigo-500\'></i>'">
            </div>

            <!-- Name -->
            <p class="text-xl font-bold text-gray-900 dark:text-white mb-3">Shakhawat Hosen</p>

            <!-- Social Media Icons (Footer) -->
            <div class="flex justify-center space-x-6 text-xl text-gray-600 dark:text-gray-400 mb-4">
                <a href="https://github.com/shakhawat" target="_blank"
                    class="hover:text-gray-900 dark:hover:text-white transition-colors duration-300" title="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://linkedin.com/in/shakhawat" target="_blank"
                    class="hover:text-indigo-600 dark:hover:text-indigo-500 transition-colors duration-300"
                    title="LinkedIn">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="https://twitter.com/shakhawat" target="_blank"
                    class="hover:text-sky-400 transition-colors duration-300" title="X (Twitter)">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="mailto:shakhawat@example.com" class="hover:text-red-500 transition-colors duration-300"
                    title="Google Mail">
                    <i class="fa-brands fa-google"></i>
                </a>
            </div>

            <!-- Copyright Text -->
            <p class="text-sm text-gray-500">
                &copy; <span id="year"></span> Shakhawat Hosen. All rights reserved. <br class="sm:hidden">
                Designed and
                Developed with <i class="fa-solid fa-heart text-red-500"></i>.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo e(asset('web/js/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/layout/web/footer.blade.php ENDPATH**/ ?>