
<?php $__env->startSection('title', 'Categories List'); ?>
<?php $__env->startSection('content'); ?>

    <div class="min-h-screen sm:px-2 lg:px-2 bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
        <div class="max-w-7xl mx-auto">
            <div
                class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700">
                <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                    <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Categories List</h2>
                    <a href="<?php echo e(route('admin.category.create')); ?>"
                        class="bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white px-2 text-xs py-2 rounded-xl font-bold shadow transition-all duration-200">
                        <i class="fa fa-plus"></i> Add Category
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th
                                    class="px-4 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase">
                                    SI</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase">
                                    Name</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase">
                                    Slug</th>
                                
                                <th
                                    class="px-4 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase">
                                    Status</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-100 dark:divide-gray-700">
                            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="px-4 py-3 text-sm text-gray-900 dark:text-gray-100">
                                        <?php echo e($categories->firstItem() + $index); ?></td>
                                    <td class="px-4 py-3 text-sm text-gray-900 dark:text-gray-100 font-semibold">
                                        <?php echo e($category->name); ?></td>
                                    <td class="px-4 py-3 text-sm text-gray-900  dark:text-gray-100 font-semibold">
                                        <?php echo e($category->slug); ?></td>
                                    <td class="px-4 py-3">
                                        <?php if($category->status): ?>
                                            <span
                                                class="px-3 py-1 rounded-full text-xs font-bold bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400">Active</span>
                                        <?php else: ?>
                                            <span
                                                class="px-3 py-1 rounded-full text-xs font-bold bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400">Inactive</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-4 py-3 flex space-x-2">
                                        <a href="<?php echo e(route('admin.category.edit', $category->id)); ?>"
                                            class="inline-flex items-center px-3 py-1.5 rounded-lg bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-400 text-xs font-bold hover:bg-yellow-200 dark:hover:bg-yellow-800 transition">
                                            <i class="fa fa-edit mr-1"></i> Edit
                                        </a>
                                        <button type="button"
                                            onclick="deleteData('<?php echo e(route('admin.category.delete', $category->id)); ?>')"
                                            class="inline-flex items-center px-3 py-1.5 rounded-lg bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400 text-xs font-bold hover:bg-red-200 dark:hover:bg-red-800 transition">
                                            <i class="fa fa-trash mr-1"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="8" class="px-4 py-8 text-center text-gray-400 dark:text-gray-500">No
                                        categories found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="px-8 py-4 bg-gray-50 dark:bg-gray-900 border-t border-gray-100 dark:border-gray-700">
                    <?php echo e($categories->links('pagination::tailwind')); ?>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        function deleteData(url) {
            Swal.fire({
                icon: 'info',
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.admin.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shakhawat\Desktop\Portfolio\resources\views/admin/category/index.blade.php ENDPATH**/ ?>