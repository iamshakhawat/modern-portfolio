

<?php $__env->startSection('title', 'Projects'); ?>

<?php $__env->startSection('content'); ?>
    <section id="projects" class="py-16 bg-gray-100 dark:bg-gray-800 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Title -->
            <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-6">
                <span class="border-b-4 border-indigo-500 pb-1">All Projects</span>
            </h2>

            <!-- Filters -->
            <form onchange="this.submit()" method="GET" action="<?php echo e(route('project.all')); ?>" class="mb-12">
                <div class="flex flex-wrap justify-center gap-4">

                    <!-- Sort -->
                    <select name="sort"
                        class="px-4 py-2 rounded-xl 
                   bg-white dark:bg-gray-800 
                   text-gray-800 dark:text-gray-100
                   border border-gray-300 dark:border-gray-600
                   shadow-sm
                   focus:outline-none focus:ring-2 focus:ring-indigo-500" id="p_sort">
                        <option value="">Sort By</option>
                        <option value="latest" <?php echo e(request('sort') == 'latest' ? 'selected' : ''); ?>>
                            Latest
                        </option>
                        <option value="oldest" <?php echo e(request('sort') == 'oldest' ? 'selected' : ''); ?>>
                            Oldest
                        </option>
                    </select>

                    <!-- Category Filter -->
                    <select name="category" id="p_category"
                        class="px-4 py-2 rounded-xl 
                   bg-white dark:bg-gray-800 
                   text-gray-800 dark:text-gray-100
                   border border-gray-300 dark:border-gray-600
                   shadow-sm
                   focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">All Categories</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"
                                <?php echo e(request('category') == $category->id ? 'selected' : ''); ?>>
                                <?php echo e($category->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                    <!-- Skill Filter -->
                    <select name="skill" id="p_skill"
                        class="px-4 py-2 rounded-xl 
                   bg-white dark:bg-gray-800 
                   text-gray-800 dark:text-gray-100
                   border border-gray-300 dark:border-gray-600
                   shadow-sm
                   focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">All Skills</option>
                        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($skill->id); ?>" <?php echo e(request('skill') == $skill->id ? 'selected' : ''); ?>>
                                <?php echo e($skill->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </form>


            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="project-container">

                <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php echo $__env->make('partials.project-card', ['project' => $project], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="col-span-3 text-center text-gray-600 dark:text-gray-400">
                        No projects found.
                    </p>
                <?php endif; ?>

            </div>

            <!-- Load More Button -->
            <?php if($projects->count() >= 6): ?>
                <div class="mt-12 text-center">
                    <button id="loadMoreBtn" data-skip="6"
                       class="px-8 py-3 text-white cursor-pointer font-medium rounded-xl shadow-lg btn-primary focus:outline-none transition-all duration-300">
                        Load More
                    </button>
                </div>
            <?php endif; ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        $(document).on('click', '#loadMoreBtn', function() {
            $(this).prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i>');
            let button = $(this);
            let skip = button.data('skip');
            let p_sort = $('#p_sort').val();
            let p_category = $('#p_category').val();
            let p_skill = $('#p_skill').val();

            $.ajax({
                url: "<?php echo e(route('loadmore')); ?>",
                type: "GET",
                data: {
                    skip: skip,
                    sort: p_sort,
                    category: p_category,
                    skill: p_skill
                },
                success: function(response) {

                    if (response.trim() === "") {
                        button.hide(); // আর project নাই
                        return;
                    }

                    $('#project-container').append(response);
                    button.data('skip', skip + 6);
                    button.prop('disabled', false).html('Load More');
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.web.web', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/projects.blade.php ENDPATH**/ ?>