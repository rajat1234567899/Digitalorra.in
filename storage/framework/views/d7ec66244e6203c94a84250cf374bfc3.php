<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap JS (for Navbar Toggle) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Icons (Bootstrap Icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/floatingbutton.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/heading.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/herocss.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css\testimonials.css')); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo.png')); ?>" type="image/x-icon">
    <!-- AOS (Animate on Scroll) CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    
    <!-- Custom JS -->
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <script src="<?php echo e(asset('js/herojs.js')); ?>"></script>
    <script src="<?php echo e(asset('js/header.js')); ?>"></script>
    <script src="<?php echo e(asset('js/services.js')); ?>"></script>
    <script src="<?php echo e(asset('js/background.js')); ?>"></script>
    
  <link rel="icon" type="image/x-icon" href="<?php echo e(asset('images/logo.png')); ?>">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init(); // Initialize AOS
        });
    </script>
    
    <?php
    $seo = \App\Models\SeoSetting::where('page', Request::path())->first();
?>
<title><?php echo e($seo->meta_title ?? 'Default Admin Title'); ?></title>
<meta name="description" content="<?php echo e($seo->meta_description ?? 'Default Description'); ?>">
<meta name="keywords" content="<?php echo e($seo->meta_keywords ?? 'Default Keywords'); ?>">

</head>
<body>
    <!-- Topbar -->
    <div class="topbar bg-dark text-light py-2">
        Join Now And Get 50% OFF
    </div>

    <!-- Header -->
     
    <header class="header" id="mainHeader">
    <div class="logo">
                    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">
                </div>
        <nav class="menu">
            <a href="/">Home</a>
            <a href="/about-us">About Us</a>
            <a href="/courses">Courses</a>
            <a href="/blogs">Blogs</a>
            <a href="/students">Students</a>
            <ul>

</ul>
        </nav>
        <div class="call">
            <i class="bi bi-telephone"></i>
            <span>+91 6280 458 005</span>
        </div>
        <a href="#" class="contact">Contact Us</a>
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </header>
<?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/header/header.blade.php ENDPATH**/ ?>