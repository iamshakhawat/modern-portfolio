<a href="<?php echo e(route('project.show', $project->slug)); ?>"
    class="group block bg-white dark:bg-gray-700/50 rounded-2xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition-all duration-500">

    <!-- Thumbnail -->
    <div class="w-full h-48 overflow-hidden">
        <img src="<?php echo e(asset('storage/' . $project->thumbnail)); ?>" alt="<?php echo e($project->title); ?>"
            class="w-full h-full object-cover group-hover:opacity-75 transition-opacity duration-300"
            style="border-bottom-left-radius: 2rem; border-bottom-right-radius: 2rem;">
    </div>

    <!-- Content -->
    <div class="p-6 text-left">

        <h3
            class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
            <?php echo e($project->title); ?>

        </h3>

        <!-- Categories -->
        <div class="mb-3">
            <?php $__currentLoopData = $project->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span
                    class="inline-block mb-1 bg-indigo-600/50 text-indigo-200 text-xs font-semibold px-3 py-1 rounded-full mr-2">
                    <?php echo e($category->name); ?>

                </span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>



        <!-- Description -->
        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3">
            <?php echo e($project->description); ?>

        </p>

        <!-- Skills -->
        <div class="flex space-x-3 text-xl">
            <?php $__currentLoopData = $project->skills->take(11); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <i class="<?php echo e($skill->icon); ?>" style="color: <?php echo e($skill->color); ?>" title="<?php echo e($skill->name); ?>"></i>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</a>
<!-- End of Project Card --><?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/partials/project-card.blade.php ENDPATH**/ ?>