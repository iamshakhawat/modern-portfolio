<nav
    class="sticky shadow top-0 z-50 backdrop-blur-md bg-white/90 dark:bg-gray-900/90 border-b border-gray-200 dark:border-gray-700 transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="<?php echo e(route('home')); ?>"
                    class="group inline-flex items-center text-2xl font-extrabold tracking-tight
          text-gray-900 dark:text-white transition-all duration-300">

                    <span class="relative">
                        SH
                    </span>

                    <span
                        class="text-indigo-600 dark:text-indigo-400 mx-0.5
                 group-hover:text-indigo-500 transition-colors duration-300">
                        AK
                    </span>

                    <span>
                        HA
                    </span>

                    <span
                        class="text-indigo-600 dark:text-indigo-400 ml-0.5
                 group-hover:text-indigo-500 transition-colors duration-300">
                        WAT
                    </span>
                </a>



            </div>

            <!-- Nav Links (Desktop) - Right aligned -->
            <div class="hidden md:flex items-center space-x-2">
                <a href="<?php echo e(url()->current() == '/' ? "#home" : url('/#home')); ?>"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300">Home</a>
                <a href="<?php echo e(url()->current() == '/' ? "#about" : url('/#about')); ?>"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300">About</a>
                <a href="<?php echo e(url()->current() == '/' ? "#skill" : url('/#skill')); ?>"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300">Skills</a>
                <a href="<?php echo e(url()->current() == '/' ? "#projects" : url('/#projects')); ?>"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300">Projects</a>
                <a href="<?php echo e(url()->current() == '/' ? "#services" : url('/#services')); ?>"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300">Services</a>
                <a href="<?php echo e(url()->current() == '/' ? "#contact" : url('/#contact')); ?>"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300">Contact</a>
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(route('admin.dashboard')); ?>"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400 px-2 py-2 text-md font-medium transition-colors duration-300"
                        target="_blank">Admin</a>

                <?php endif; ?>

            </div>

            <!-- Mobile Menu Button & Theme Toggle -->
            <div class="flex items-center space-x-4 md:hidden">
                <!-- Mobile Menu Button (Hamburger) -->
                <button id="mobile-menu-button" type="button"
                    class="inline-flex items-center justify-center cursor-pointer p-2 rounded-md text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none transition-colors duration-300">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div id="mobile-menu"
        class="hidden md:hidden bg-gray-100 dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 transition-colors duration-500">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#home"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">Home</a>
            <a href="#about"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">About</a>
            <a href="#skill"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">Skills</a>
            <a href="#projects"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">Projects</a>
            <a href="#services"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">Services</a>
            <a href="#contact"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">Contact</a>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/layout/web/navbar.blade.php ENDPATH**/ ?>