

<?php $__env->startSection('content'); ?>
<h2>Students List</h2>
<a href="<?php echo e(route('admin.students.create')); ?>">Add New Student</a>

<?php if(session('success')): ?>
    <p style="color: green;"><?php echo e(session('success')); ?></p>
<?php endif; ?>

<table border="1">
    <tr>
        <th>Registration No.</th>
        <th>Name</th>
        <th>Branch</th>
        <th>Profile</th>
        <th>Actions</th>
    </tr>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($student->registration_no); ?></td>
        <td><?php echo e($student->name); ?></td>
        <td><?php echo e($student->branch); ?></td>
        <td>
            <?php if($student->profile_picture): ?>
                <img src="<?php echo e(asset('storage/'.$student->profile_picture)); ?>" width="50">
            <?php else: ?>
                No Image
            <?php endif; ?>
        </td>
        <td>
            <a href="<?php echo e(route('admin.students.edit', $student->id)); ?>">Edit</a>
            <form action="<?php echo e(route('admin.students.destroy', $student->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/admin/students/index.blade.php ENDPATH**/ ?>