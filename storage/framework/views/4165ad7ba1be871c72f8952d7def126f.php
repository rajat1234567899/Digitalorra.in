

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('admin.blogs.create')); ?>" class="btn btn-primary">Add Blog</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($blog->title); ?></td>
                    <td><img src="<?php echo e(asset('storage/' . $blog->image)); ?>" width="50"></td>
                    <td>
                        <a href="<?php echo e(route('admin.blogs.edit', $blog)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('admin.blogs.destroy', $blog)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($blogs->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/admin/blogs/index.blade.php ENDPATH**/ ?>