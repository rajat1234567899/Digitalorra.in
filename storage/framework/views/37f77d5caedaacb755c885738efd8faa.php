


<?php $__env->startSection('content'); ?>
<h1>Content</h1>

<a href="<?php echo e(route('admin.contents.create')); ?>">Add New Section</a>

<?php if(session('success')): ?>
    <p><?php echo e(session('success')); ?></p>
<?php endif; ?>

<table>
    <tr>
        <th>Section</th>
        <th>Content</th>
        <th>Actions</th>
    </tr>
    <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(ucfirst($content->section)); ?></td>
        <td><?php echo Str::limit($content->content, 50); ?></td>
        <td>
            <a href="<?php echo e(route('admin.contents.edit', $content->id)); ?>">Edit</a> |
            <form action="<?php echo e(route('admin.contents.destroy', $content->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/admin/contents/index.blade.php ENDPATH**/ ?>