

<?php $__env->startSection('content'); ?>
<h2>Edit Student</h2>

<?php if($errors->any()): ?>
    <div style="color: red;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('admin.students.update', $student->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    Name: <input type="text" name="name" value="<?php echo e($student->name); ?>" required><br>
    Father Name: <input type="text" name="father_name" value="<?php echo e($student->father_name); ?>" required><br>
    Mother Name: <input type="text" name="mother_name" value="<?php echo e($student->mother_name); ?>" required><br>
    Phone: <input type="text" name="phone" value="<?php echo e($student->phone); ?>" required><br>
    Branch: <input type="text" name="branch" value="<?php echo e($student->branch); ?>" required><br>
    Registration Date: <input type="date" name="registration_date" value="<?php echo e($student->registration_date); ?>" required><br>
    Course Completion Date: <input type="date" name="course_completion_date" value="<?php echo e($student->course_completion_date); ?>"><br>
    Profile Picture: <input type="file" name="profile_picture"><br>
    Certificate: <input type="file" name="certificate"><br>
    <button type="submit">Update</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/admin/students/edit.blade.php ENDPATH**/ ?>