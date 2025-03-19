<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container text-center" style="height:auto; margin:200px auto; width:100%; display:flex;">
<div style="margin:auto;">
    <h1 class="display-4">404</h1>
    <p class="lead">Oops! The page you are looking for was not found.</p>
    <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Go to Home</a>
    </div></div>
<?php echo $__env->make('header.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/errors/404.blade.php ENDPATH**/ ?>