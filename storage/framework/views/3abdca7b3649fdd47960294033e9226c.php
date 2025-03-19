
<?php $__env->startSection('content'); ?>
<h2>Courses</h2>
<a href="<?php echo e(route('admin.courses.create')); ?>" class="btn btn-primary">Add Course</a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Name</th>
        
        <th>Actions</th>
    </tr>
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($course->id); ?></td>
        <td><?php echo e($course->name); ?></td>
        <td><?php echo e($course->description); ?></td>
        <td>
            <a href="<?php echo e(route('admin.courses.edit', $course->id)); ?>">Edit</a>
            <form action="<?php echo e(route('admin.courses.destroy', $course->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/admin/courses/index.blade.php ENDPATH**/ ?>