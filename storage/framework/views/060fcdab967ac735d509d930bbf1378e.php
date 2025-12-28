
<?php $__env->startSection('content'); ?>
    <main class="min-h-screen bg-gray-50 dark:bg-slate-900 transition-colors duration-300 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Left Column: Main Content -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Project Header -->
                    <header class="space-y-4">
                        <div class="flex items-center gap-2">

                        </div>
                        <h1
                            class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight">
                            <?php echo e($project->title); ?>

                        </h1>
                        <div class="flex items-center space-x-4 text-sm text-slate-500 dark:text-slate-400">
                            <div class="flex items-center">
                                <?php if($project->user && $project->user->photo): ?>
                                    <img src="<?php echo e($project->user->photo); ?>" alt="Author Photo"
                                        class="h-8 w-8 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold mr-2 text-xs" />
                                <?php else: ?>
                                    <div
                                        class="h-8 w-8 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold mr-2 text-xs">
                                        S
                                    </div>
                                <?php endif; ?>
                                <span>Project by <span
                                        class="font-medium text-slate-900 dark:text-slate-200"><?php echo e($project->user->name); ?></span></span>
                            </div>
                            <span class="hidden sm:inline text-slate-300">|</span>
                            <time class="flex items-center"><i class="fa-regular fa-calendar-check mr-2"></i>
                                <?php echo e($project->created_at->format('F j, Y')); ?></time>

                        </div>
                    </header>

                    <!-- Swiper Image Slider -->
                    <div
                        class="relative group rounded-2xl shadow-2xl border border-slate-200 dark:border-slate-800 overflow-hidden bg-slate-200 dark:bg-slate-800">
                        <div class="swiper project-swiper w-full h-[300px] md:h-[500px]">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('storage/' . $project->thumbnail)); ?>"
                                        class="w-full h-full object-cover" alt="Thumbnail Image">
                                </div>

                                <?php $__currentLoopData = $project->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo e(asset('storage/' . $image->image_path)); ?>"
                                            class="w-full h-full object-cover" alt="Project Image">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <!-- Pagination/Navigation -->
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="swiper-button-prev opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                    </div>


                    <!-- Article Body -->
                    <div id="content" class="text-slate-900 dark:text-white">
                        <?php echo e($project->description); ?>

                    </div>


                </div>

                <!-- Right Column: Sidebar -->
                <aside class="space-y-6">
                    <!-- Project Actions & Stats -->
                    <div
                        class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Live Project</h3>
                            <div class="flex space-x-3">
                                <a href="<?php echo e($project->url); ?>" target="_blank"
                                    class="h-10 w-10 flex items-center justify-center rounded-xl bg-indigo-100 dark:bg-indigo-900/40 text-indigo-600 dark:text-indigo-400 hover:bg-indigo-600 hover:text-white transition-all shadow-sm"
                                    title="Live Preview">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                                <a href="<?php echo e($project->github_url); ?>" target="_blank"
                                    class="h-10 w-10 flex items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 hover:bg-slate-900 hover:text-white dark:hover:bg-white dark:hover:text-slate-900 transition-all shadow-sm"
                                    title="GitHub Source">
                                    <i class="fa-brands fa-github text-lg"></i>
                                </a>
                            </div>
                        </div>

                        <dl class="space-y-4">
                            <div
                                class="flex justify-between items-center py-2 border-b border-slate-50 dark:border-slate-700/50 text-sm">
                                <dt class="text-slate-500 dark:text-slate-400">Client</dt>
                                <dd class="font-semibold text-slate-900 dark:text-slate-100"><?php echo e($project->client); ?>

                                </dd>
                            </div>
                            <div class="flex justify-between items-center py-2 text-sm">
                                <dt class="text-slate-500 dark:text-slate-400">Duration</dt>
                                <dd class="font-semibold text-slate-900 dark:text-slate-100"><?php echo e($project->duration); ?>

                                </dd>
                            </div>
                            <div class="flex justify-between items-center py-2 text-sm">
                                <dt class="text-slate-500 dark:text-slate-400">Rating</dt>
                                <dd class="font-semibold text-slate-900 dark:text-slate-100">
                                    <i class="fa-solid fa-star text-yellow-400 mr-1"></i> <?php echo e($project->rating); ?>/5
                                </dd>
                            </div>
                            <div class="flex justify-between items-center py-2 text-sm">
                                <dt class="text-slate-500 w-1/3 dark:text-slate-400">Category</dt>
                                <dd class="font-semibold w-2/3 text-slate-900 text-right dark:text-slate-100">
                                    <?php $__currentLoopData = $project->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span
                                            class="px-3 inline-block mb-3 py-1 bg-indigo-100 dark:bg-indigo-900/40 text-indigo-600 dark:text-indigo-400 rounded-full text-xs font-bold capitalize tracking-wider"><?php echo e($category->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </dd>
                            </div>
                        </dl>
                    </div>

                    <!-- Tech Stack Icons -->
                    <div
                        class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-6">Technologies Used</h3>
                        <div class="grid grid-cols-3 gap-6">

                            <?php $__currentLoopData = $project->skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex flex-col items-center group">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-red-50 dark:bg-red-900/10 flex items-center justify-center text-[<?php echo e($skill->color); ?>] text-2xl group-hover:scale-110 transition-transform">
                                        <i class="<?php echo e($skill->icon); ?>"></i>
                                    </div>
                                    <span
                                        class="text-[10px] font-bold mt-2 uppercase tracking-tighter text-slate-400"><?php echo e($skill->name); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <!-- Sidebar Footer CTA -->
                    <div class="p-6 bg-gradient-to-br from-indigo-600 to-indigo-800 rounded-2xl text-white shadow-xl">
                        <h4 class="font-bold text-lg mb-2">Interested?</h4>
                        <p class="text-indigo-100 text-sm mb-4 leading-relaxed">Let's discuss how I can help bring your
                            next Laravel project to life.</p>
                        <a href="#"
                            class="block text-center py-3 bg-white text-indigo-600 font-bold rounded-xl hover:bg-indigo-50 transition-colors">Hire
                            Me</a>
                    </div>
                </aside>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>


    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
    <script>
        document.getElementById('content').innerHTML =
            marked.parse(document.getElementById('content').innerText);
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.web.web', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/project-details.blade.php ENDPATH**/ ?>