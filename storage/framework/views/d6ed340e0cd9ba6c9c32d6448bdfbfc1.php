<?php if(isset($teams) && count($teams) > 0): ?>
<section class="team-section">
    <h2>A Great Teacher is Key<br> to a Successful Student.</h2>
    <div class="team-container">
        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="team-card">
                <div class="team-header">
                    <img src="<?php echo e(asset('storage/' . $team->image)); ?>" alt="<?php echo e($team->name); ?>">
                </div>
                <div class="team-body">
                    <h3><?php echo e($team->name); ?></h3>
                    <p class="position"><?php echo e($team->position); ?></p>
                </div>
                <div class="team-footer">
                    <button class="plus-button">+</button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <a href="#" class="btn-view-more">View All →</a>
</section>
<?php endif; ?>

<style>
.team-section {
    text-align: center;
    color: white;
    background: #0a0215;
    padding: 50px 0;
    font-family: Arial, sans-serif;
}
.team-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    max-width: 1200px;
    margin: 30px auto;
}
.team-container h2 {
    font-size:20px!important;
}
.team-card {
    background: linear-gradient(90deg, #6a11cb, #2575fc);
    padding: 20px;
    border-radius: 10px;
    width: 220px;
    text-align: center!important;
    box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);
    position: relative;
}
.team-header {
    display: inline-block;
}
.team-card img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 2px solid white;
    margin-bottom: 10px;
}
.team-card h3 {
    font-size: 18px!important;
    font-weight: bold!important;
    margin: 5px 0!important;
}
.position {
    font-size: 14px;
    color: #eee;
}
.plus-button {
    position: absolute;
    right: 10px;
    top: 10px;
    background: white;
    color: black;
    font-size: 16px;
    border: none;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    cursor: pointer;
}
.plus-button:hover {
    background: #ffcc00;
}
.btn-view-more {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: #061F54;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
}
</style>
<?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/frontend/team.blade.php ENDPATH**/ ?>