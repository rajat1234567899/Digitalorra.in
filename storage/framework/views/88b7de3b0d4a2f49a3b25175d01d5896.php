<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/blogs.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/toc.css')); ?>">
  <link rel="icon" type="image/x-icon" href="<?php echo e(asset('images/logo.png')); ?>">
  <script src="<?php echo e(asset('js/toc.js')); ?>"></script>
</head>
<body>
<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="section">
<div class="container">
    <div class="main-content">
        <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" class="post-img">
        <h1 class="post-title"><?php echo e($blog->title); ?></h1>
        <div class="post-meta">Published on <?php echo $blog->created_at->format('M d, Y'); ?></div>
          <!-- Table of Contents -->
          <div id="table-of-contents" class="card shadow-sm mb-4">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Table of Contents</h5>
                </div>
                <div class="card-body">
                    <ul id="toc-list" class="list-unstyled"></ul>
                </div>
            </div>
        <div class="post-content">
            <p><?php echo $blog->content; ?></p>
        </div>
    </div>

    <div class="sidebar">
        <h3>Related Posts</h3>
        <ul>
        </ul>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php echo $__env->make('header.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/frontend/blogs/show.blade.php ENDPATH**/ ?>