

<?php $__env->startSection('content'); ?>
<h2>Team Members</h2>
<a href="<?php echo e(route('admin.teams.create')); ?>" class="btn btn-primary">Add Team Member</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($team->id); ?></td>
                <td><img src="<?php echo e(asset('storage/' . $team->image)); ?>" width="50"></td>
                <td><?php echo e($team->name); ?></td>
                <td><?php echo e($team->position); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.teams.edit', $team->id)); ?>" class="btn btn-warning">Edit</a>
                    <form action="<?php echo e(route('admin.teams.destroy', $team->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/admin/team/index.blade.php ENDPATH**/ ?>