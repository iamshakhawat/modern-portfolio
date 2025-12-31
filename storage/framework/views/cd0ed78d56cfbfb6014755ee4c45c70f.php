
<?php $__env->startSection('title', 'Admin Dashboard'); ?>
<?php $__env->startSection('content'); ?>

<div class="space-y-8">

    <!-- Welcome Section -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-8 text-white">
        <h1 class="text-3xl font-bold mb-2">Welcome back, <?php echo e(Auth::user()->name); ?>! 👋</h1>
        <p class="text-blue-100">Here's your portfolio overview</p>
    </div>

    <!-- Main Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white dark:bg-slate-800 shadow rounded-3xl p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between mb-3">
                <p class="text-gray-500 dark:text-gray-300 uppercase text-xs font-bold">Total Projects</p>
                <i class="fas fa-code text-blue-500 text-2xl"></i>
            </div>
            <p class="text-3xl font-bold text-gray-800 dark:text-white"><?php echo e($stats['total_projects']); ?></p>
        </div>

        <div class="bg-white dark:bg-slate-800 shadow rounded-3xl p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between mb-3">
                <p class="text-gray-500 dark:text-gray-300 uppercase text-xs font-bold">Total Contacts</p>
                <i class="fas fa-envelope text-green-500 text-2xl"></i>
            </div>
            <p class="text-3xl font-bold text-gray-800 dark:text-white"><?php echo e($stats['total_contacts']); ?></p>
        </div>

        <div class="bg-white dark:bg-slate-800 shadow rounded-3xl p-6 border-l-4 border-purple-500">
            <div class="flex items-center justify-between mb-3">
                <p class="text-gray-500 dark:text-gray-300 uppercase text-xs font-bold">Total Skills</p>
                <i class="fas fa-tools text-purple-500 text-2xl"></i>
            </div>
            <p class="text-3xl font-bold text-gray-800 dark:text-white"><?php echo e($stats['total_skills']); ?></p>
        </div>

        <div class="bg-white dark:bg-slate-800 shadow rounded-3xl p-6 border-l-4 border-yellow-500">
            <div class="flex items-center justify-between mb-3">
                <p class="text-gray-500 dark:text-gray-300 uppercase text-xs font-bold">Total Services</p>
                <i class="fas fa-concierge-bell text-yellow-500 text-2xl"></i>
            </div>
            <p class="text-3xl font-bold text-gray-800 dark:text-white"><?php echo e($stats['total_services']); ?></p>
        </div>
    </div>

    <!-- Additional Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white dark:bg-slate-800 shadow rounded-3xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-300 uppercase text-xs font-bold">Testimonials</p>
                    <p class="text-2xl font-bold text-gray-800 dark:text-white mt-2"><?php echo e($stats['total_testimonials']); ?></p>
                </div>
                <i class="fas fa-comments text-pink-500 text-3xl"></i>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 shadow rounded-3xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-300 uppercase text-xs font-bold">Achievements</p>
                    <p class="text-2xl font-bold text-gray-800 dark:text-white mt-2"><?php echo e($stats['total_achievements']); ?></p>
                </div>
                <i class="fas fa-trophy text-yellow-500 text-3xl"></i>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 shadow rounded-3xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-300 uppercase text-xs font-bold">Certifications</p>
                    <p class="text-2xl font-bold text-gray-800 dark:text-white mt-2"><?php echo e($stats['total_certifications']); ?></p>
                </div>
                <i class="fas fa-certificate text-indigo-500 text-3xl"></i>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 shadow rounded-3xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-300 uppercase text-xs font-bold">Experiences</p>
                    <p class="text-2xl font-bold text-gray-800 dark:text-white mt-2"><?php echo e($stats['total_experiences']); ?></p>
                </div>
                <i class="fas fa-briefcase text-teal-500 text-3xl"></i>
            </div>
        </div>
    </div>

    <!-- Recent Projects & Contacts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Projects -->
        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-bold text-gray-800 dark:text-white text-lg flex items-center">
                    <i class="fas fa-code text-blue-500 mr-3"></i>
                    Recent Projects
                </h3>
                <a href="<?php echo e(route('admin.projects')); ?>" class="text-xs text-blue-500 hover:text-blue-700 font-semibold">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            <div class="space-y-4 overflow-y-auto max-h-80">
                <?php $__empty_1 = true; $__currentLoopData = $recentProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="flex items-start space-x-4 p-3 hover:bg-gray-50 dark:hover:bg-slate-700 rounded-xl transition">
                        <div class="w-2 h-2 rounded-full bg-blue-500 mt-2 flex-shrink-0"></div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-700 dark:text-gray-300 font-semibold"><?php echo e($project->title); ?></p>
                            <div class="flex items-center space-x-3 mt-2">
                                <span class="text-[10px] text-gray-400 uppercase tracking-widest font-bold">
                                    <?php echo e($project->created_at->format('d M, Y')); ?>

                                </span>
                                <?php if($project->is_featured): ?>
                                    <span class="text-[10px] bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full font-semibold">Featured</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-gray-400 text-center py-8">No projects yet</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Recent Contact Messages -->
        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-bold text-gray-800 dark:text-white text-lg flex items-center">
                    <i class="fas fa-envelope text-green-500 mr-3"></i>
                    Recent Messages
                </h3>
                <a href="<?php echo e(route('admin.contacts')); ?>" class="text-xs text-green-500 hover:text-green-700 font-semibold">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            <div class="space-y-4 overflow-y-auto max-h-80">
                <?php $__empty_1 = true; $__currentLoopData = $recentContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="border-b border-gray-100 dark:border-slate-700 pb-3 last:border-0">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <p class="text-sm text-gray-700 dark:text-gray-300 font-semibold"><?php echo e($contact->name); ?></p>
                                <p class="text-xs text-gray-500"><?php echo e($contact->email); ?></p>
                            </div>
                        </div>
                        <p class="text-xs text-gray-400 mt-2"><?php echo e(Str::limit($contact->message, 60)); ?></p>
                        <p class="text-[10px] text-gray-400 mt-2"><?php echo e($contact->created_at->diffForHumans()); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-gray-400 text-center py-8">No messages yet</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Latest Testimonials -->
    <div class="bg-white dark:bg-slate-800 rounded-3xl border border-gray-200 dark:border-slate-700 p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="font-bold text-gray-800 dark:text-white text-lg flex items-center">
                <i class="fas fa-comments text-pink-500 mr-3"></i>
                Latest Testimonials
            </h3>
            <a href="<?php echo e(route('admin.testimonials')); ?>" class="text-xs text-pink-500 hover:text-pink-700 font-semibold">
                View All <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php $__empty_1 = true; $__currentLoopData = $latestTestimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="p-4 bg-gray-50 dark:bg-slate-700 rounded-xl">
                    <div class="flex items-center space-x-3 mb-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center text-white font-bold">
                            <?php echo e(substr($testimonial->name, 0, 1)); ?>

                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-700 dark:text-gray-300"><?php echo e($testimonial->name); ?></p>
                            <p class="text-xs text-gray-500"><?php echo e($testimonial->position); ?></p>
                        </div>
                    </div>
                    <p class="text-xs text-gray-600 dark:text-gray-400"><?php echo e(Str::limit($testimonial->message, 80)); ?></p>
                    <div class="flex items-center mt-2">
                        <?php for($i = 0; $i < 5; $i++): ?>
                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <?php endfor; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-gray-400 text-center py-8 col-span-3">No testimonials yet</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Top Skills & Featured Projects -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Top Skills -->
        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-bold text-gray-800 dark:text-white text-lg flex items-center">
                    <i class="fas fa-tools text-purple-500 mr-3"></i>
                    Top Skills
                </h3>
                <a href="<?php echo e(route('admin.skills')); ?>" class="text-xs text-purple-500 hover:text-purple-700 font-semibold">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            <div class="space-y-4">
                <?php $__empty_1 = true; $__currentLoopData = $topSkills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300"><?php echo e($skill->name); ?></span>
                            <span class="text-sm text-gray-500"><?php echo e($skill->percentage); ?>%</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-slate-700 rounded-full h-2">
                            <div class="bg-gradient-to-r from-purple-500 to-pink-500 h-2 rounded-full transition-all duration-300" 
                                 style="width: <?php echo e($skill->percentage); ?>%"></div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-gray-400 text-center py-8">No skills yet</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Featured Projects -->
        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-bold text-gray-800 dark:text-white text-lg flex items-center">
                    <i class="fas fa-star text-yellow-500 mr-3"></i>
                    Featured Projects
                </h3>
                <a href="<?php echo e(route('admin.projects')); ?>" class="text-xs text-yellow-500 hover:text-yellow-700 font-semibold">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            <div class="space-y-4">
                <?php $__empty_1 = true; $__currentLoopData = $featuredProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="p-4 bg-gradient-to-r from-yellow-50 to-orange-50 dark:from-slate-700 dark:to-slate-600 rounded-xl border border-yellow-200 dark:border-slate-600">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-sm font-bold text-gray-800 dark:text-white"><?php echo e($project->title); ?></p>
                                <p class="text-xs text-gray-600 dark:text-gray-400 mt-1"><?php echo e(Str::limit($project->short_description, 50)); ?></p>
                                <div class="flex items-center space-x-2 mt-2">
                                    <span class="text-xs text-yellow-600 dark:text-yellow-400">
                                        <i class="fas fa-calendar mr-1"></i><?php echo e($project->date); ?>

                                    </span>
                                    <span class="text-xs text-yellow-600 dark:text-yellow-400">
                                        <i class="fas fa-star mr-1"></i><?php echo e($project->rating); ?>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-gray-400 text-center py-8">No featured projects</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Recent Achievements & Services -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Achievements -->
        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-bold text-gray-800 dark:text-white text-lg flex items-center">
                    <i class="fas fa-trophy text-yellow-500 mr-3"></i>
                    Recent Achievements
                </h3>
                <a href="<?php echo e(route('admin.achievements')); ?>" class="text-xs text-yellow-500 hover:text-yellow-700 font-semibold">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            <div class="space-y-3">
                <?php $__empty_1 = true; $__currentLoopData = $recentAchievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="flex items-start space-x-4 p-3 hover:bg-gray-50 dark:hover:bg-slate-700 rounded-xl transition">
                        <div class="w-10 h-10 rounded-full bg-yellow-100 dark:bg-yellow-900 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-trophy text-yellow-600 dark:text-yellow-400"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-gray-700 dark:text-gray-300"><?php echo e($achievement->title); ?></p>
                            <p class="text-xs text-gray-500 mt-1"><?php echo e($achievement->description); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-gray-400 text-center py-8">No achievements yet</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Active Services -->
        <div class="bg-white dark:bg-slate-800 rounded-3xl border border-gray-200 dark:border-slate-700 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-bold text-gray-800 dark:text-white text-lg flex items-center">
                    <i class="fas fa-concierge-bell text-blue-500 mr-3"></i>
                    Services Offered
                </h3>
                <a href="<?php echo e(route('admin.services')); ?>" class="text-xs text-blue-500 hover:text-blue-700 font-semibold">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <?php $__empty_1 = true; $__currentLoopData = $activeServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="p-4 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-slate-700 dark:to-slate-600 rounded-xl border border-blue-100 dark:border-slate-600 text-center">
                        <div class="w-12 h-12 mx-auto rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center mb-2">
                            <i class="fas fa-<?php echo e($service->icon ?? 'cog'); ?> text-blue-600 dark:text-blue-400 text-xl"></i>
                        </div>
                        <p class="text-xs font-bold text-gray-800 dark:text-white"><?php echo e($service->title); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-gray-400 text-center py-8 col-span-2">No services yet</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl p-6">
        <h3 class="font-bold text-white text-lg mb-4 flex items-center">
            <i class="fas fa-rocket mr-3"></i>
            Quick Actions
        </h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="<?php echo e(route('admin.projects')); ?>" class="bg-white bg-opacity-20 hover:bg-opacity-30 backdrop-blur-lg rounded-xl p-4 text-center text-white transition">
                <i class="fas fa-plus-circle text-2xl mb-2"></i>
                <p class="text-xs font-semibold">Add Project</p>
            </a>
            <a href="<?php echo e(route('admin.skills')); ?>" class="bg-white bg-opacity-20 hover:bg-opacity-30 backdrop-blur-lg rounded-xl p-4 text-center text-white transition">
                <i class="fas fa-tools text-2xl mb-2"></i>
                <p class="text-xs font-semibold">Add Skill</p>
            </a>
            <a href="<?php echo e(route('admin.services')); ?>" class="bg-white bg-opacity-20 hover:bg-opacity-30 backdrop-blur-lg rounded-xl p-4 text-center text-white transition">
                <i class="fas fa-concierge-bell text-2xl mb-2"></i>
                <p class="text-xs font-semibold">Add Service</p>
            </a>
            <a href="<?php echo e(route('admin.contacts')); ?>" class="bg-white bg-opacity-20 hover:bg-opacity-30 backdrop-blur-lg rounded-xl p-4 text-center text-white transition">
                <i class="fas fa-envelope text-2xl mb-2"></i>
                <p class="text-xs font-semibold">View Messages</p>
            </a>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>