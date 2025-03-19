<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="students-container">
    <div class="students-header">
        <h2>All Students</h2>
    </div>
    
    <div class="students-list">
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('students.profile', $student->id)); ?>" class="student-item">
            <div class="profile-picture">
            <img src="<?php echo e(asset('storage/'.$student->profile_picture)); ?>" alt="Profile Picture">
        </div>
                <span class="student-name"><?php echo e($student->name); ?></span>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php echo $__env->make('header.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    .students-container {
        max-width: 800px;
        margin: 200px auto 30px auto;
        padding: 20px;
        border-radius: 8px;
        background: #f8f9fa;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .students-header h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #333;
    }

    .students-list {
        display: flex;
        gap: 10px;
    }

    .student-item {
        display: block;
        padding: 12px 20px;
        background:#AFAFF5;
        border-radius: 6px;
        text-decoration: none;
        font-size: 18px;    
        font-weight: 500;
        color:rgb(255, 255, 255);
        transition: 0.3s ease-in-out;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.1);
    }
    .student-item img {
        width: 200px;
        height:200px;        
        border-radius: 50%;

    }

    .student-item:hover {
    color: white;
    transform: translateY(-2px);
}
</style>
<?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/students/index.blade.php ENDPATH**/ ?>