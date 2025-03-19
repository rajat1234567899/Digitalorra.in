

<?php $__env->startSection('content'); ?>
<h2>Add Student</h2>

<?php if($errors->any()): ?>
    <div style="color: red;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('admin.students.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    Registration No: <input type="text" name="registration_no" required><br>
    Name: <input type="text" name="name" required><br>
    Father Name: <input type="text" name="father_name" required><br>
    Mother Name: <input type="text" name="mother_name" required><br>
    Phone: <input type="text" name="phone" required><br>
    Branch: <input type="text" name="branch" required><br>
    Registration Date: <input type="date" name="registration_date" required><br>
    Course Completion Date: <input type="date" name="course_completion_date"><br>
    Profile Picture: <input type="file" name="profile_picture"><br>
    Certificate: <input type="file" name="certificate"><br>
    <button type="submit">Submit</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/admin/students/create.blade.php ENDPATH**/ ?>